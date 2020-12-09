<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1"></script>

        <title>Laravel</title>
    </head>
    <body>
    <input type="hidden" id="digZr_id">
    Nazov: <input type="text" id="nazov" required="required" name="nazov_dig_zr"><br>
    Uroven: <input type="text" id="uroven" required="required" name="uroven_dig_zr"><br>
    <button onclick="submit();">Submit</button>
    </body>
</html>
