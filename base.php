<?php $path = "uploads/BASES/Margens_Servidores/";$diretorio = dir($path); echo "<strong> Aqruivos Margens Servidores <br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>
<br />
<br />
<?php $path = "uploads/BASES/Margens_Pensionistas/"; $diretorio = dir($path); echo "<strong> Aqruivos Margens_Pensionistas<br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>
<br />
<br />
<?php $path = "uploads/BASES/Fora_Folha_Servidores/"; $diretorio = dir($path); echo "<strong> Aqruivos Fora Folha Servidores<br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>
<br />
<br />
<?php $path = "uploads/BASES/Fora_Folha_pensionistas/"; $diretorio = dir($path); echo "<strong> Aqruivos Fora Folha pensionistas<br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>
<br />
<br />
<?php $path = "uploads/BASES/Contratos_Servidores/"; $diretorio = dir($path); echo "<strong> Aqruivos Contratos Servidores<br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>
<br />
<br />
<?php $path = "uploads/BASES/Contratos_Pensionistas/"; $diretorio = dir($path); echo "<strong> Aqruivos Contratos Pensionistas<br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>
<br />
<br />
<?php $path = "uploads/BASES/Cadastro_Pensionistas/"; $diretorio = dir($path); echo "<strong> Aqruivos Cadastro Pensionistas<br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>
<br />
<br />
<?php $path = "uploads/BASES/Cadastros_Servidores/"; $diretorio = dir($path); echo "<strong> Aqruivos Cadastros Servidores<br /></strong>"; while($arquivo = $diretorio -> read()){ echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />"; } $diretorio -> close(); ?>