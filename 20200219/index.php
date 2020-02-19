<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Barbearia </title>
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
			<div class = "agendamento">
				<fieldset>
					<legend> Agendamento </legend>
					<form action="recebe_agendamento.php" method="POST">
						<p>
							<label> Nome: </label>
							<input type="text" name="nome"/>
						</p>
						<p>
							<label> Email: </label>
							<input type="text" name="email"/>
						</p>
						<p>
							<label> Telefone: </label>
							<input type="text" name="telefone"/>
						</p>
						<p>
							<label> Data: </label>
							<input type="date" name="data_agendamento"/>
						</p>
						<p>
							<label> Hora: </label>
							<input type="time" name="hora"/>
						</p>
						<p>
							<input type="submit" value="Agendar"/>
						</p>
					</form>

					<br/>
					<button type="submit" class="btn btn-danger"><a href="lista_agendamento.php"> Consultar agenda </a></button>
				</fieldset>
			</div>
			<footer>
                Desenvolvido na aula de WEB.
            </footer>
        </div>
    </body>
</html>
