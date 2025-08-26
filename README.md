# 🌍 Laravel Maps API

Este projeto é uma aplicação desenvolvida em **Laravel** que fornece uma
**API de mapas** para salvar, gerenciar e consultar localizações
geográficas.\
Foi implementada também, por iniciativa própria, uma **barra de
pesquisa** para facilitar a busca de locais já cadastrados.

------------------------------------------------------------------------

## 🚀 Funcionalidades

-   📌 **Salvar localizações** com latitude e longitude.
-   🗂 **Gerenciar pontos salvos** (criar, listar, atualizar e excluir).
-   🔍 **Pesquisar locais** através de uma barra de pesquisa intuitiva.
-   🗺 **Integração com mapas** para exibir pontos cadastrados.

------------------------------------------------------------------------

## 🛠 Tecnologias Utilizadas

-   [Laravel 10](https://laravel.com/) - Framework PHP
-   [MySQL](https://www.mysql.com/) - Banco de dados relacional
-   [Leaflet.js](https://leafletjs.com/) - Biblioteca de mapas
    interativos
-   [Axios](https://axios-http.com/) - Cliente HTTP para consumo da API
-   [Tailwind CSS](https://tailwindcss.com/) - Estilização responsiva e
    moderna

------------------------------------------------------------------------

## 📦 Instalação e Configuração

1.  **Clone o repositório**

    ``` bash
    git clone https://github.com/seu-usuario/laravel-maps-api.git
    cd laravel-maps-api
    ```

2.  **Instale as dependências do Laravel**

    ``` bash
    composer install
    ```

3.  **Instale as dependências do frontend**

    ``` bash
    npm install && npm run dev
    ```

4.  **Configure o arquivo `.env`**

    ``` env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=maps_api
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5.  **Gere a chave da aplicação**

    ``` bash
    php artisan key:generate
    ```

6.  **Execute as migrações**

    ``` bash
    php artisan migrate
    ```

7.  **Inicie o servidor**

    ``` bash
    php artisan serve
    ```

------------------------------------------------------------------------

## 🔍 Barra de Pesquisa

Foi implementada uma **barra de pesquisa** que permite ao usuário
digitar o nome de um local salvo e visualizar os resultados
instantaneamente no mapa.\
Essa funcionalidade foi desenvolvida **por conta própria**, além dos
requisitos iniciais.

------------------------------------------------------------------------

## 📷 Demonstração

<img width="1884" height="867" alt="image" src="https://github.com/user-attachments/assets/c414ed2a-01fb-4371-8bff-14f75a5bb234" />


------------------------------------------------------------------------

## 🤝 Contribuição

1.  Faça um fork do projeto.
2.  Crie uma branch para sua feature (`git checkout -b minha-feature`).
3.  Commit suas mudanças (`git commit -m 'Adicionei nova feature'`).
4.  Envie para o branch principal (`git push origin minha-feature`).
5.  Abra um Pull Request.

------------------------------------------------------------------------

## 📃Documento de inspiração

Caso tenha interesse acesse o documento que possui o tutorial de como fazer o projeto realize o passo a passo no <a href="https://github.com/Gustavo-Rodrigue/Maps_laravel/tree/main/Passo%20a%20Passo">Clicando Aqui</a> e após isso crie a tabela que aparece no arquivo TXT
