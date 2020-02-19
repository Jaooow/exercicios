<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Agenda </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.min.css" />
        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
    </head>
    <body>
        <div class = "container-fluid">
            <header>
                <p>
                    <h1>- Barbearia -</h1>
                    <nav>

                        <a href = "index.php">Home</a>
                        |
                        <a href = "index.php">Agendamento</a>
                        |
                        <a href = "lista_agendamento.php">Lista Agendamento</a>
                
                    </nav>
                </p>
			</header>
            <div class = "tabela">
                <?php
                    if(file_exists("agenda.xml")){
                        echo"
                            <table class=\"table\" align = \"center\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Nome</th>
                                        <th scope=\"col\">E-mail</th>
                                        <th scope=\"col\">Telefone</th>
                                        <th scope=\"col\">Data</th>
                                        <th scope=\"col\">Hora</th>
                                    </tr>
                                </thead>
                                <tbody>
                        ";
                        $agenda=simplexml_load_file("agenda.xml");
                      
                        foreach($agenda->children() as $agendamento)    
                        {
                            echo"<tr>
                                    <td scope=\"row\">$agendamento->nome</td>
                                    <td>$agendamento->email</td>
                                    <td>$agendamento->telefone</td>
                                    <td>$agendamento->data_agendamento</td>
                                    <td>$agendamento->hora</td>
                                </tr>";
                        }

                        echo"
                            </tbody>
                        </table>
                        ";
            echo'</div>';
                        echo"<button type=\"submit\" class=\"btn btn-danger\"><a href=\"index.php\"> Realizar agendamento </a></button>";
                    }
                    else{
                        echo"<h1> Não há agendamentos cadastrados. </h1>";
                        echo"<br/>";
                        echo"<button type=\"submit\" class=\"btn btn-danger\"><a href=\"index.php\"> Realizar agendamento </a></button>";
                    }
                ?>
            <footer>
                Desenvolvido na aula de WEB.
            </footer>
        </div>
    </body>
</html>
