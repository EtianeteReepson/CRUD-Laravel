<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        
    </head>
    <body>
        <h1>Olá</h1>

        <p>Data Actual: {{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</p>
    </body>
</html>
