<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## For Post Server

- php artisan serve --port=8000

## For Comment Server

- php artisan serve --port=8001

## All API's

### Post Api

    - Get All post and Corresponding Comments
    - http://127.0.0.1:8000/api/posts

    - Create Post
    - http://127.0.0.1:8000/api/posts?title=Post2&description=description 2

### Comment Api

    - Comment on Post
    - http://127.0.0.1:8001/api/comments?post_id=2&comment=comment 2
