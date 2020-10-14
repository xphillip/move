<html>
<head>
   <title>Basic Upload</title>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
	<p>
    	<input type="file" name="fileUpload" >
	</p>
	<p>
    	<input type="submit" value="Enviar" class="btn btn-sm btn-danger">
   	</p>
</body>
</html>
<?php
   if(isset($_FILES['fileUpload']))
   {
      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
 
      $ext = end(explode(".",$_FILES['fileUpload']['name'])); //Pegando extensão do arquivo
      $new_name = date("Y.m.d-H.i.s") .'.'. $ext; //Definindo um novo nome para o arquivo
      $dir = 'uploads/'; //Diretório para uploads
	  $tipo      = $_FILES['fileUpload']['type'];
	  $tamanho   = $_FILES['fileUpload']['size'];

if($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/gif' || $tipo == 'image/bmp'|| $tipo == 'image/png') {
        /*
        VERIFICO SE O TAMANHO NÃO ULTRAPASSA 2Mb
        O CALCULO DEVE SER REALIZADO EM BYTES.
        */
        if($tamanho <= 60000000) {

            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name)) {
                /* SE ESTIVER TUDO OK, REDIRECIONO PARA UMA PÁGINA DE SUCESSO */
                '<br />'; echo '<font size="+1.5"><div class="label label-warning">'."Link para baixar arquivo ".'</div><br />'.'<input type="textfield" size="60" id="textfield" onclick="this.select()" name="link" value="http://apromotora.com/move/uploads/'.$new_name.'"></font><br /><p> O link gerado ficará disponivel por 30 dias';};
            } else {
                $erros['pasta'] = 'Ocorreu um erro ao enviar o arquivo para a pasta correta';
            }
        } else {
            $erros['tamanho'] = 'Esse arquivo é maior que o permitido, o tamanho máximo permitido é de: <strong>2Mb</strong>';
        }
    } else {
        $erros['tipo'] = 'Esse arquivo não é um arquivo suportado pelo sistema, os tipos suportados são: <strong>jpg, jpeg, gif e bmp</strong>';
    }