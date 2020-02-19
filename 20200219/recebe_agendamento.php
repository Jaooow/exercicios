<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Agendando... </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/estilo.min.css" />
        <link href = "https://fonts.googleapis.com/icon?family=Material+Icons" rel = "stylesheet"/>
    </head>
    <body>
        <div class = "container-fluid"">
            <?php
                $nome=$_POST["nome"];
                $email=$_POST["email"];
                $telefone=$_POST["telefone"];
                $data_agendamento=$_POST["data_agendamento"];
                $hora=$_POST["hora"];
                $aux=0;

                if(!file_exists("agenda.xml")){
                    $xml=
    "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
        <agenda>
            <agendamento>
                <nome>$nome</nome>
                <email>$email</email>
                <telefone>$telefone</telefone>
                <data_agendamento>$data_agendamento</data_agendamento>
                <hora>$hora</hora>
            </agendamento>
        </agenda>";

                    file_put_contents("agenda.xml", $xml);

                    echo"<h1> Agendamento realizado com sucesso. </h1>";

                    echo"<a href=\"lista_agendamento.php\"> Consultar agenda </a>";
                }
                else{
                    $agenda=simplexml_load_file("agenda.xml");
                    foreach($agenda->children() as $agendamento){
                        if($_POST["data_agendamento"]==$agendamento->data_agendamento && $_POST["hora"]==$agendamento->hora){
                            $aux=1;
                        }
                    }
                    if($aux==0){
                        $agenda=simplexml_load_file("agenda.xml");
                        $agendamento=$agenda->addChild("agendamento");

                        $agendamento->addChild("nome", $nome);
                        $agendamento->addChild("email", $email);
                        $agendamento->addChild("telefone", $telefone);
                        $agendamento->addChild("data_agendamento", $data_agendamento);
                        $agendamento->addChild("hora", $hora);

                        file_put_contents("agenda.xml", $agenda->asXML());

                        echo"<h1> Agendamento realizado com sucesso. </h1>";

                        echo"<a href=\"lista_agendamento.php\"> Consultar agenda </a>";
                    }
                    else{
                        echo"<h2> Já existe cliente agendado no horário selecionado. </h2>";

                        echo"<a href=\"form_agendamento.php\"> Tentar novamente </a>";
                    }
                }
            ?>
        </div>
    </body>
</html>
