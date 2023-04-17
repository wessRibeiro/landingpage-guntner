- use o ambiente do github se não quiser usar sua própria maquina
https://wessribeiro-vigilant-engine-xqqqqx6r4w36995.github.dev/ 

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

Acesse o sistema
[http://localhost:80](http://localhost:80)

Acessar o admin de banco de dados para verificar as mensagens enviadas e salvas (use as infos do .env)
[http://localhost:8080](http://localhost:8080)


para desligar os serviços
```sh
bash down.sh
```
