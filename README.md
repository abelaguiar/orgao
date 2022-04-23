# Iniciar o Projeto

Execute no terminal e faça a instalação dos pacotes necessarios para o projeto:
```sh
composer install
```

## Configurando Banco de Dados

Arquivo onde será colocado os dados de acesso ao banco:
```sh
cp .env.example .env
```
Acesso o arquivo **.env** e preencha os dados abaixo, salvando o arquivo no final:

```
DB_HOST=""
DB_USER=""
DB_PASSWORD=""
DB_DATABASE=""
DB_DRIVER="pdo_mysql"
DB_PORT="3306"
```
Acesso o arquivo **db.sql** na pasta **config** para criar o banco de dados mysql e inserir o primeiro usuário.

```txt
Usuário: admin@admin.com
Senha: password
```

## Executando no browser

Execute no terminal para iniciar o projeto na porta **8080**
```sh
./setup.sh
```