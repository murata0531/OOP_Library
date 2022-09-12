# LAMP-Laravel-Redis-Docker

# 環境

PHP 8.0

MySQL 5.7

Redis

Apache 2.4

# 構築

コンテナ立ち上げ

```
$ docker-compose up -d --build
```
laravel初期化
```
$ docker-compose run --rm app bash

```



## mysqlコンテナ
```
$ docker-compose exec db bash
```

## phpコンテナ
```
$ docker-compose run --rm app bash
```
