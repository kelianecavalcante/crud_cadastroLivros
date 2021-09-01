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

            .box{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                width: 30%;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
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

            .inputUser{
                background: none;
                border: 1px solid #ddd;
                outline: none;
                font-size: 15px;
                height: 25px;
                border-radius: 2px;
                margin: 2px;
                padding: 3px;
                width: 357px;
                background: #f3f3f3;                
            }
            
            button{
                background-color: #66CDAA;
                width: 100%;
                border: none;
                padding: 3%; 
                font-size: 115%;
                cursor: pointer;
                border-radius: 2px; 
            }

            button:hover{
                background: #5F9EA0;
            }

        </style>
    </head>
    <body>
        <a href="{{ route('index_livro')}}">Voltar a página anterior</a> 
        <div class="box">
            <form action="{{ route('salvar_livro') }}" method="post">
             @csrf
                <fieldset>
                    <legend><b>Cadastro de Livros</b></legend>
                        <br><br>
                        <label for="titulo"><b>Título</b></label>
                            <input type="text" name="titulo" id="titulo" class="inputUser" required>
                        <br><br>
                        <label for="autor"><b>Autor</b></label>
                            <input type="text" name="autor" id="autor" class="inputUser" required>
                        <br><br>
                        <label for="isbn"><b>ISBN</b></label>
                            <input type="text" name="isbn" id="isbn" class="inputUser" required>
                        <br><br>
                        <label for="preco"><b>Preço</b></label>
                            <input type="text" name="preco" id="preco" class="inputUser" required>
                        <br><br>
                        <label for="editora"><b>Editora</b></label>
                            <input type="text" name="editora" id="editora" class="inputUser" required>
                        <br><br>
                        <label for="ano"><b>Ano de lançamento</b></label>
                            <input type="text" name="ano" id="ano" class="inputUser" required>
                        <br><br>
                        <button type="submit"><b>Cadastrar</b></button>
                </fieldset>
            </form> 
        </div>
    </body>
</html>