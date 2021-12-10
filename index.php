<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário PHP e MYSQL</title>
        <link rel="stylesheet" href="main.css">

        


    </head>
    <body>
        <form action="inclue.php" method="post">
                <header class="formulario">
                    <div class=" divs">
                        <label class=" " for="nome">Nome</label>
                        <input autocomplete="off" type="text" name="Nome" id="nome" class="form-control" placeholder="Nome Completo" minlength="3" required>
                    </div>
                    <div class=" divs">
                        <label class=" " for="idade">Idade</label>
                        <input autocomplete="off" type="number" name="Idade" id="idade" class="form-control" placeholder="Idade" minlength="3" required>
                    </div>
                    <div class=" divs">
                        <label class=" " for="profissao">Profissão</label>
                        <select name="Profissao" id="profissao">
                            <option value="0"></option>
                            <option value="Programdor JR">Programdor JR</option>
                            <option value="Programador Pleno">Programador Pleno</option>
                            <option value="Programdor Sênior">Programdor Sênior</option>
                            <option value="Estágiario">Estágiario</option>
                        </select>
                    </div>
                    <center><div class="divs">
                        <button class="button" type="submit">
                            ENVIAR FORMULÁRIO
                        </button>
                    </div></center>
                </header>
        </form>
    </body>
</html>