<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Livros</title>

        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;       
            }

            .content-table{
                border-collapse: collapse;
                margin: 5px 0;
                font-size: 0.9em;
                min-width: 1000px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                width: 50%;
                margin:auto;
                   
            }
            .content-table thead tr{
                background-color: #66CDAA;
                color: #000;
                text-align: left;
                font-weight: bold;
             
            }

            .content-table th,
            .content-table td{
                padding: 12px 15px;
            }

            .content-table tbody tr{
                border-bottom: 1px solid #ddd;
            }

            .content-table tbody tr:nth-of-type(even){
                background-color: #f3f3f3;
            }
            .content-table tbody tr:last-of-type{
                border-bottom: 2px solid #009879;
            }

            h1{    
                padding: 5px;
                width: 300px;
                background-color: #66CDAA;
                text-align: center;
                margin: 25px auto;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                border-radius: 2px;
                font-size: 145%;
            }

            a{
                display: grid;
                height: 30px;        
                background: #66CDAA;
                place-items: center;
                text-decoration: none;
                border-radius: 4px;
                color: #000; 
                width: 80px;
                    
            }

            #btn_editar{
                background: #6d8ed4;   
            }

            #btn_remover{
                background: #cd666f; 
            }

            .container{
                width: 1200px;
                height: 50px;
                display: flex;
                justify-content: center;
            }

            #btn_cadastrar{
                background: #70fafad8; 
                height: 40px;
                width: 115px;
                margin-right: 45px;
                border: 1px solid #4cb6b6d8;
               
            }
            #btn_listar{
                background: #b97fbb; 
                height: 40px;
                width: 115px;
                margin: auto;
                margin-left: 910px;
                margin-bottom: 10px;
                border: 1px solid #b076b3;
                
            }

        </style>
    </head>
    <body>
        <h1>Cadastro de Livros</h1>
        <div class="container">
            <a href="{{ route('listar_livro')}}"
                id="btn_listar" title="Lista de livros cadastrados"><b>Listar</b></a>

            <a href="{{ route('salvar_livro')}}"
                id="btn_cadastrar" title="Cadastrar novo livro"><b>Cadastrar</b></a>            
        </div>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Preço</th>
                    <th>Editora</th>
                    <th>Ano</th>
                    <th></th><th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                <tr>
                    <td>{{$livro->titulo}}</td>
                    <td>{{$livro->autor}}</td>
                    <td>{{$livro->isbn}}</td>
                    <td>{{$livro->preco}}</td>
                    <td>{{$livro->editora}}</td>
                    <td>{{$livro->ano}}</td>
                    <td><a href="{{ route('editar_livro', ['id'=>$livro->id])}}"
                        id="btn_editar" title="Editar livro {{ $livro->titulo }}"><b>Editar</b></a></td>
    
                    <td><a href="{{ route('apagar_livro', ['id'=>$livro->id])}}"
                        id="btn_remover" title="Remover livro {{ $livro->titulo }}"><b>Remover</b></a></td>
                </tr>
                @endforeach         
          </tbody>
    </body>
</html>