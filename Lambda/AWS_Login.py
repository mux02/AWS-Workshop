import json
import pymysql
from datetime import datetime

# rds settings:
rds_host = ""
rds_username = ""
rds_password = ""
rds_db = ""

# Extract datetime values
def Datetime_toString(date: datetime):
    if date is not None:
        createdDate = date.isoformat()
    else:
        createdDate = "None"
    return createdDate


def lambda_handler(event, context):
    try:
        conn = pymysql.connect(host=rds_host, user=rds_username, passwd=rds_password, db=rds_db, connect_timeout=5, charset="utf8", use_unicode=True)
    except pymysql.MySQLError as e:
        print(e)
        return {
            "statusCode": 200,
            "sendAuth": 0,
            "sendMsg": f'[DB-Error] Cannot connect to DB: {e}'
        }

    Username = event['Username']
    Password = event['User_Password']
    
    with conn.cursor() as cur:
        try:
            cur.execute('Select * from User WHERE Username = "%s" AND User_Password = "%s" ' % (Username, Password))
            row_headers = [x[0] for x in cur.description]  # this will extract row headers
            result = cur.fetchone()
            if result:
                user_array = dict(zip(row_headers, result))

                user_array['CreatedDate'] = Datetime_toString(user_array['CreatedDate'])  # to convert date into string

                json_user = json.dumps(user_array, default=list, sort_keys=True, ensure_ascii=True)

                a = {
                    "statusCode": 200,
                    "sendAuth": 1,
                    "sendMsg": '[User] user data loaded successfully',
                    "User_Data": json.loads(json_user)
                }
            else:
                a = {
                    "statusCode": 200,
                    "sendAuth": 2,
                    "sendMsg": f'[User] There is no user with this info {Username} ',
                    "User_Data": {}
                }
        except pymysql.MySQLError as e:
            print(f"[User] Cannot complete loading process!: {e}")
            a = {
                "statusCode": 200,
                "sendAuth": 3,
                "sendMsg": f'[User] Something went wrong {Username}: {e}',
                "User_Data": {}
            }

        finally:
            conn.commit()
    
    #print(a)
    return a