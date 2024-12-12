# MVC

Model 資料庫
View ui
Controller Php

## artisan指令

建立controller
php artisan make:controller PostController
php artisan make:controller PostController --resource

建立migration
php artisan make:migration create_posts_table

建立model
php artisan make:model Post -mcr

執行migrate
php artisan migrate
php artisan migrate:rollback

查詢路由
php artisan route:list
