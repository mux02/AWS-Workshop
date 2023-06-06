CREATE TABLE Game( 
Game_Id Integer AUTO_INCREMENT primary key,
Game_Name varchar(100) not null,
Game_Company varchar(100) not null,
Game_Category varchar(100) not null,
Is_Published tinyint(3) default 1,
AddedBy_User varchar(100) not null,
Rating_Num float default 0,
Download_Num float default 0,
Size integer default 0,
Photo_Path varchar(255) default "none",
Status tinyint(3) default 1,
CreatedDate timestamp default now()
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;