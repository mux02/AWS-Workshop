CREATE TABLE Game_List( 
Game_Id Integer not null,
User_Id Integer not null,
date_added timestamp default now()
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;