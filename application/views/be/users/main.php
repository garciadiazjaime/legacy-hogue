<div id="submenu">
	<ul>
		<li class="current"><a href="<?=base_url();?>sistema/users"
			title="Consultar">Consultar</a></li>
		<li class="last"><a href="<?=base_url();?>sistema/users/create"
			title="Nuevo">Nuevo</a></li>
	</ul>
	<br class="clearer" />
</div>
<div id="content" class="users">
       <h1>Lista de Usuarios</h1>
       <div>
               <form method="post" action="#">
               <h2>Filtrar Usuario</h2>
               <div class="left_column">
                       <label for="no_emp"> No. Emp.: </label>
                       <input name="no_emp" type="text" id="no_emp"/>
               </div>
               <div class="right_column">        
                       <label for="name">
                                     Nombre:
                           </label>        
                       <input name="name"type="text" id="name"/>
               </div>
               <br class="clearer" />        
               <div class="right_column">
<p class="button filter_button_in_form ">
                               <input name="btnOK" type="submit" id="btnOK" value="Buscar"                                                 class="filter_button_in_form"/>
</p>
               </div>
               </form>
       </div>
       <br class="clearer" />
       <div >
                       <span id="num_users"><?=$num_users;?><BR></span>
                       <?=$user_list;?>
       </div>
       <div class="pagination">
               <?php echo $this->pagination->create_links(); ?>
       </div>
</div>
 

