<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="{{action('PruebaController@view')}}" method="post">
        <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
        @for($i = 0; $i < 5; $i++)
            <input type="text" name="nombre[{{$i}}]" id="" value="">
            <input type="text" name="codigo[{{$i}}]" id="" value="">
        @endfor
        <input type="submit" value="Enivar" id="enviar">
    </form>
    <script>
        $(document).ready(function(e){
            $('#enviar').click(function (e) {
                $.ajax({
                    url: 'view',
                    type: 'post',
                    
                });
            });
        });
    </script>
</body>
</html>