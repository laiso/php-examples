```bash
curl http://192.168.3.8:80/graphql -d "query='query UsersQuery{ users {id, email} }'" 
```

Laravel Extension: 
[Folkloreatelier/laravel\-graphql](https://github.com/Folkloreatelier/laravel-graphql)

Core Library:
[webonyx/graphql\-php \- Packagist](https://packagist.org/packages/webonyx/graphql-php)

Docker Environment:
[hitalos/laravel \- Docker Hub](https://hub.docker.com/r/hitalos/laravel/)

```bash
docker-compose up
docker-compose exec web ping php artisan migrate
```
