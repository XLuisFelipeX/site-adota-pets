<?php
/* Smarty version 3.1.36, created on 2020-10-10 17:18:21
  from 'C:\xampp2\htdocs\tccpets\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f82170dc29237_13739745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90b359aa3c87e893e00a28be901e92f16a4f1371' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tccpets\\view\\contato.tpl',
      1 => 1602360986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f82170dc29237_13739745 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <div class="col-md-5" >
          <h4><strong>Fale conosco!</strong></h4>
        <form action="envio"> 
          <div class="form-group">
            <input type="text" class="form-control" name="nome" value="" placeholder="Nome">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="telefone" value="" placeholder="Telefone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section><?php }
}
