<?php require_once './connexion.php' ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BirthDayApp</title>
</head>
<style>
    body{
        width: 100%;
        height: 100%;
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
    }
    .container{
        position: absolute;
        width: 350px;
        min-height: 650px;
        padding: 10px;
        top: 50%;
        left: 50%;
        transform:translate(-50%, -50%);
        background-color: #00bcd4;

        -webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
        box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
    }
    a{
        text-decoration: none;
    }
    .container .lnk_ajouter{
        display: inline-block;
        position: absolute;
        bottom: 3%;
        right: 5%;
        padding: 7px;
        text-decoration: none;
        border: 0px black solid;
        border-radius: 3px;
        background-color: #efefef;
        color: #000;

        -webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
        box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);

    }
    ul ul {
        margin-left: -1em;
        margin-bottom: 1em;
    }
    .li_name > ul{
        display: none;
    }
    .li_name:hover > ul{
        display: block;
        transition: all 5s linear 5s;
    }
    span{
        position: absolute;
        bottom: 0;
        font-size: 8px;
    }
    input, textarea{
        font-family: Arial, sans-serif;
        outline: none;
        display: block;
        width: 95%;
        border: 1px #f3f3f3 solid;
        border-radius: 3px;
        margin-bottom: 8px;
        padding: 8px;
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.25);
        box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.25);
    }
    button{
        padding: 8px;
        border-radius: 3px;
        border: 1px #f3f3f3 solid;
        cursor: pointer;
        -webkit-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
        -moz-box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
        box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.25);
    }
</style>
<body>
<div class="container">