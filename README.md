#para o backend

Crie o Arquivo .env
```sh
cp .env.example .env
```

Suba os serviços
```sh
bash up.sh
```


instale as dependencias do laravel
```sh
docker exec landingpage-guntner-app-1 composer install
```

rode os comandos
```sh
docker exec landingpage-guntner-app-1 php artisan key:generate
docker exec landingpage-guntner-app-1 php artisan migrate
docker exec landingpage-guntner-app-1 php artisan db:seed
```

Acesse
[http://localhost:80](http://localhost:80)

Acessar o admin de banco de dados
[http://localhost:8080](http://localhost:8080)


