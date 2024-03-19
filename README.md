# A Fantástica Fábrica de Transferência de Abacate por _Abacate Inc_

## Motivação
A Grande demanda e valor do abacate fez com que essa fruta pudesse ser substituida por algo de valor, até mesmo por dinheiro.

## Como funciona
Após a instalação do portal, basta seguir os passo abaixo:
- Ponha no portal a quantidade de abacates que deseja transferir.
- Acessar a sua conta do Abacate Inc por meio do nosso APP (Android/IOS) ou WEB _http://abacate.inc/_.
- Entre com a conta de destinho e o total de abacates que desenha tranferir.
- Aberto o botão enviar.
E pronto, seus abacates serão transferidos, instantâneo e com segurança!

## Dados técnicos
- PHP 8.3.4
- Nginx 1.25.4
- Postgres 16.2
- Docker-compose 3
- Lumen 10.0.3

## Técnico: Documentação
Documentos importantes estão na pasta `./doc`.

## Técnico: Como usar?
- `git clone`
- `cd Abacate`
- `cp ./src/.env.example ./src/.env`
- Set *string(32)* to **APP_KEY** in **src/.env** file (Linux: `echo 'my super password' | md5sum`)
- `docker-compose --env-file ./src/.env up -d`
- `docker cp db/postgres.sql abacate-db:/docker-entrypoint-initdb.d/dump.sql`
- `docker exec -it abacate-db psql -h localhost -U postgres -f docker-entrypoint-initdb.d/dump.sql`
- `docker exec -it abacate-api php /usr/bin/composer install`
- `docker exec -it abacate-api docker php artisan migrate`
- `docker exec -it abacate-api php artisan db:seed`

## Técnico: Requisições
Use o plugin **REST Client**, (autor _Huachao Mao_) para Visual Code e consuma as requisições na pasta `./requests`

## Util
- Listar endereços IP dos containers ```docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)```