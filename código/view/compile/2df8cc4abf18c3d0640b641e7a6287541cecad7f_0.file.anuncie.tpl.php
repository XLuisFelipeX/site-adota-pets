<?php
/* Smarty version 3.1.36, created on 2020-10-10 16:55:51
  from 'C:\xampp2\htdocs\tccpets\view\anuncie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f8211c74ec564_29196504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df8cc4abf18c3d0640b641e7a6287541cecad7f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tccpets\\view\\anuncie.tpl',
      1 => 1602359326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8211c74ec564_29196504 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <div class="col-md-5" >
          <h4><strong>Anuncie em nosso site!</strong></h4>

        <form action="envioanuncio" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="nomeanuciante" value="" placeholder="Nome:">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail:">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="telefoneanunciante" value="" placeholder="Telefone:">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="ramoempresa" value="" placeholder="Ramo da sua empresa:">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
          </div>
          <br>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-cursor-fill" aria-hidden="true"></i> Quero anunciar!
          </button>
        </form>
      </div>
    </div>
  </div>
</section><?php }
}
