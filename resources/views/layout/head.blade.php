<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NOBLOG</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #333;
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    body {
        display: grid;
        grid-template-rows: auto 1fr auto;
    }

    a {
        text-decoration: none;
        text-transform: uppercase;
        color: lime;
        border: 1px solid lime;
        border-radius: .2rem;
        padding: .35rem .5rem;
        transition: .3s;
    }

    nav a:active {
        transform: scale(.98);
        background-color: lime;
        color: #333;
    }

    .main {
        padding: 2rem;
    }

    .noposts {
        display: flex;
        gap: 5rem;
    }

    @media(max-width: 799px) {
        .noposts {
            flex-direction: column;
            gap: 0;
        }
    }
    </style>
</head>

<body>