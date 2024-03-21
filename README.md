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
- Docker Compose 2
- Lumen 10.0.3

## Técnico: Documentação
Documentos importantes estão na pasta `./doc`.

## Técnico: Como usar?
- `git clone`
- `cd Abacate`
- `cp ./src/.env.example ./src/.env`
- Set *string(32)* to **APP_KEY** in **src/.env** file (Linux: `echo 'my super password' | md5sum`)
- `docker compose build app`
- `docker compose up -d`
- `docker compose ps`
- `docker compose exec app ls -l`
- `docker compose exec app rm -rf vendor composer.lock`
- `docker compose exec app composer install`
- `docker cp db/postgres.sql abacate-db:/docker-entrypoint-initdb.d/dump.sql`
- `docker compose exec db psql -h localhost -U postgres -f docker-entrypoint-initdb.d/dump.sql`
- `docker compose exec app php artisan migrate`
- `docker compose exec app php artisan db:seed --class=ClientsTableSeeder`

Obs:
- Caso tenha problemas de permissão usar `chmod -R 755` nas pastas/arquivos necessários em `/var/www`
- Caso necessário alterar os argumentos `user` e `uid` para manipular nome de usuário e id de usuário.

## Técnico: Requisições
Use o plugin **REST Client**, (autor _Huachao Mao_) para Visual Code e consuma as requisições na pasta `./requests`

## Util
- Listar endereços IP dos containers ```docker inspect -f '{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)```