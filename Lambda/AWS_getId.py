import pymysql

# rds settings:
rds_host = ""
rds_username = ""
rds_password = ""
rds_db = ""


def lambda_handler(event, context):
    try:
        conn = pymysql.connect(host=rds_host, user=rds_username, passwd=rds_password, db=rds_db, connect_timeout=5,
                               charset="utf8", use_unicode=True)
    except pymysql.MySQLError as e:
        print(e)
        return {
            "statusCode": 200,
            "checkAuth": 0,
            "checkMsg": f'[DB-Error] Cannot connect to DB: {e}'
        }

    User_Id = event['User_Id']

    with conn.cursor() as cur:
        try:
            cur.execute('Select * from User where User_Id = "%s" ' % User_Id)
            result = cur.fetchone()
            if result:
                a = {
                    "statusCode": 200,
                    "checkAuth": 1,
                    "checkMsg": '[Check] User_Id is exist!'
                }
            else:
                a = {
                    "statusCode": 200,
                    "checkAuth": 2,
                    "checkMsg": '[Check] There is no user id!'
                }

        except pymysql.MySQLError as e:
            a = {
                "statusCode": 200,
                "checkAuth": 3,
                "checkMsg": f'[Check] something went wrong(username: {User_Id}): {e}'
            }
        finally:
            conn.commit()

    #print(a)
    return a