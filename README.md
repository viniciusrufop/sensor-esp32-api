# Sistema de leitura de sensores - Firmware

## Sistema que recebe os dados de leitura de sensores e salva em um Banco de dados

# Passos de configuração

## Utilizar a branch master

## Rodar o composer

Abrir o terminal e executar `composer install`

## Configurar o arquivo .env

Abrir o terminal e executar `cp .env.example .env`, e popular as variaveis com os dados de conexão de seu banco de dados

## Criar as migrations

Abrir o terminal e executar `php artisan migrate`

## Criar chave padrão

Abrir o terminal e executar `php artisan key:generate`

## Executar API

Abrir o terminal e executar `php -S localhost:8000 -t public/`
Para que a ESP32 tenha conexão com a API é necessário inicialiar o servidor com o ip do computador na rede.
Exemplo `php -S 192.168.10:8000 -t public/`

# Firmware do projeto

O firmware foi feito utilizando a linguagem Arduino, que tem por base a linguagem C++. A placa de desenvolvimento utilizada no projeto foi a **ESP32-DevKitC**. [Repositório do Firmware](https://github.com/viniciusrufop/sensor-esp32-firmaware.git)