<form method="post" action="#">
	<div id="content" class="period">
		<h1>Eliminar Periodo</h1>
		<h2>¿Seguro de eliminar el periodo?</h2>
		<h3 ></h3>
<?php
	if(isset($list_periodos) == false && empty($list_periodos))
		echo '<a href="'.base_url().'sistema/periodos'.'">Regresar a lista de Periodos.</a> </br>';
	else
		echo $list_periodos.'</br>';
?>
			<!--<?=$list_periodos;?>-->
	        
		<input name="btnOK" type="submit" id="btnOK" value="OK" />

		<input name="btnCancel" type="button" id="btnCancel" value="Cancel"
			onclick="javascript: window.history.back()"
		/>
		</br>
		<p>
			<span id="msg"><?=$msg?></span>
		</p>
	</div>
</form>
