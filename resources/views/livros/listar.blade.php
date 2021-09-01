<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vitrine de livros</title>

        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;   
            }

            .box{
                
                margin-left: auto;
                margin-right: auto;
                width: 50em;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                border-radius: 10px;
                padding: 20px;
                width: 60%;  

            }

            fieldset{
                border: 2px solid #66CDAA;
                border-radius: 3px;
            }

            legend{
                border: 1px solid #66CDAA;
                padding: 9px;
                width: 300px;
                text-align: center;
                background-color: #66CDAA;
                border-radius: 2px;
                font-size: 125%;
            }

        </style>
    </head>
    <body>
        <div class="box">
        <!--<a href="{{ route('index_livro')}}">Voltar a página anterior</a> -->
        <fieldset>
            <legend><b>Livros cadastrados</b></legend>
            <br><br>
            @foreach($livros as $livro)
            <ul>
                <ol>[{{$livro->id}}] - {{$livro->titulo}} - {{$livro->autor}} - {{$livro->isbn}} - {{$livro->preco}} - {{$livro->editora}} - {{$livro->ano}}</ol>
            </ul>
            @endforeach       
        </fieldset>
        </div>
    </body>
</html>