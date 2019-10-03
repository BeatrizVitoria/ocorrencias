<!DOCTYPE>
<html lang = "pt-br">
<head>	
	<title>Página Ocorrência</title>
	<meta charset="UTF-8">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.mim.js"></script>
    <link rel="stylesheet"  href="./css2/estilo.css">
	<style>
		.FieldInfo{
			color: rgb(0,0,139);
			font-family: Bitter, Helvetica,"Times New Roman",Times,serif;
			font-size: 1.5em;
		}
    </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<h4 style = "color: white">Menu</h4>
				    <ul id="Menu" class ="nav flex-column" >
					<li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
					<li class="active" class="nav-item "><a class="nav-link" href="CadastroOcorrencia.php">Registrar nova ocorrência</a></li>
			</div>
			<div class="col-sm-10">
				<h1>Adicionar Ocorrência</h1>
					<div>
					<form action="../Controller/OcorrenciaController.php?cadastro1" method="POST"
					>
						<fieldset>
							<div class="form-group">
								<label for="descarea"><span class="FieldInfo">Descrição:</span></label>
								<textarea class="form-control"  name="descricao" id="descricao"></textarea>
							</div>
						    <div class="form-group">
								<label for="tipselect"><span class="FieldInfo">Tipo:</span></label>
								<input class="form-control" type="text" name="tipo" id="tipo">
							</div>
							<div class="form-group">
							<label for="logradouro"><span class="FieldInfo">Endereço:</span></label>
						    <input class="form-control" type="text" name="logradouro" id="logradouro">
						    </div>
							<div class="form-group">
							<label for="bairro"><span class="FieldInfo">Bairro:</span></label>
							<input class="form-control" type="text" name="bairro" id="bairro">
						    </div>
							<div class="form-group">
							<label for="data"><span class="FieldInfo">Data:</span></label>
						    <input class="form-control" type="date" name="data" id="data">
							</div>
							<div class="form-group">
							<label for="hora"><span class="FieldInfo">Hora:</span></label>
							<input class="form-control" type="time" name="hora" id="hora">
							</div>
							<div class="form-group">
						<label for="imageselect"><span class="FieldInfo">Selecione uma imagem:</span></label>
						    <input class="form-control" type="file" name="imagem" id="imagem">
							</div>
							<div class="form-group">
							<label for="videoselect"><span class="FieldInfo">Selecione um vídeo:</span></label>
							<input class="form-control" type="file" name="video" id="video">
							</div>
							<br>
							<button class="btn btn-success btn-block" type="Submit" value="Adicionar Ocorrencia">Adicionar</button>
						    </fieldset>
						    <br>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</body>
	</html>