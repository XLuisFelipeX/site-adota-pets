<?php
/* Smarty version 3.1.36, created on 2020-10-04 20:56:39
  from 'C:\xampp2\htdocs\tccpets\view\clientes_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7a613765ea19_50788676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44175b55bcd1ea6f686d3912589fa9a6d0e0a2e3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tccpets\\view\\clientes_recovery.tpl',
      1 => 1572718842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7a613765ea19_50788676 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  
    
</form><?php }
}
