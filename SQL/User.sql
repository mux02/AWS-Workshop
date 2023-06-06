CREATE TABLE User( 
User_Id Integer AUTO_INCREMENT primary key,
Username varchar(100) not null unique,
User_Password varchar(100) not null,
Group_Id integer default 0 COMMENT '0: normal user, 1: admin user',
User_Email varchar(150) not null,
Photo_Path varchar(255) default "none",
Game_Downloads integer default 0,
Friends_Num integer default 0,
Live_Num integer default 0,
Clips integer default 0,
Online_Status tinyint(2) default 0,
Bio varchar(150) default "none",
Status tinyint(3) default 1,
CreatedDate timestamp default now()
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;