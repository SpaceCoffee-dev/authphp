<?php

/*
 * Define - Configuração Global padrão para todo o site
 * */

define("SITE",[
    "name" => "Auth em MVC com PHP",
    "desc" => "Aprenda a construir uma aplicação de autenticação em MVC com PHP do Jeito Certo!",
    "domain" => "localauth.com",
    "locale" => "pt_BR",
    "root" => "http://localhost/codigoaberto/t1"
]);

/*
 * Site Minify - Configuração Global para minificação de arquivos no projeto
 * */

if ($_SERVER{"SERVER_NAME"} == "localhost"){
    require __DIR__."/Minify.php";
};

/*
 * Define Data Layer- Configuração Global para abstração do Banco de Dados
 * */

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/*
 * Define Social - Configuração Global para manuseio de redes Sociais CEO
 * */

define("SOCIAL",[
    "facebook_page" => "robsonvleite2",
    "facebook_author" => "robsonvleite",
    "facebook_appId" => "2193729837289",
    "twitter_creator" => "@robsonvleite",
    "twitter_site" => "@robsonvleite"
]);

/*
 * Conexão com Email
 * */

define("MAIL", []);

/*
 * Conexão com Facebook
 * */

define("FACEBOOK_LOGIN", []);

/*
 * Conexão com Google
 * */

define("GOOGLE_LOGIN", []);
