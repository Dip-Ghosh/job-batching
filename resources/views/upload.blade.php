<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upload Million records</title>



    </head>
    <body class="antialiased">

        <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
            <input type="file" name="upload" id="upload"/>
            <button type="submit" name="submit">Upload</button>
        </form>
    </body>
</html>
