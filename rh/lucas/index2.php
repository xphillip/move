<html>
<head>
   <title>Basic Upload</title>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
<p>
   	<input type="file" name="fileUpload" class="btn btn-sm btn-danger">
</p>
<p>
  <select name="tipo" id="tipo">
    <option value="Entrada_1">Entrada 1</option>
    <option value="Saida_1">Saida 1</option>
    <option value="Entrada_2">Entrada 2</option>
    <option value="Saida_2">Saida 2</option>
  </select>
</p>
<p>&nbsp;</p>
	<p>
    	<input type="submit" value="Carregar" class="btn btn-sm btn-danger">
   	</p>
</body>
</html>
<?php
   if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
 
      $ext = end(explode(".",$_FILES['fileUpload']['name'])); //Pegando extensão do arquivo
      $new_name = 'ComprovantePonto_LucasAraujoSantos_'.date("d.m.Y").'_'.$_POST['tipo'].'.'.$ext; //Definindo um novo nome para o arquivo
      $dir = 'up/'; //Diretório para uploads
 
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
	  '<br />'; echo '<font size="+1.5"><div class="label label-warning">'."Comprovante salvo com sucesso - Ponto ".$_POST['tipo']." do dia ".date("d.m.Y").'</div><br />';};?>