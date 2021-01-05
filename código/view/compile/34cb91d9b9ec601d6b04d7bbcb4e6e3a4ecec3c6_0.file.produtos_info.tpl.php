<?php
/* Smarty version 3.1.36, created on 2020-10-11 21:33:01
  from 'C:\xampp2\htdocs\tccpets\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f83a43d60c319_89388320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34cb91d9b9ec601d6b04d7bbcb4e6e3a4ecec3c6' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tccpets\\view\\produtos_info.tpl',
      1 => 1602462778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f83a43d60c319_89388320 (Smarty_Internal_Template $_smarty_tpl) {
?>    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

      <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
<hr>

<div class="row">
    
  
        <div class="col-md-6 ">

        <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="" > 

    </div>

    <div class="col-md-6 thumbnail">
        
         <hr>
            <h7 class="text-center">
           <p>DADOS GERAIS</p>
           <li> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_caracteristicas'];?>
 </li> 
           <li> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_sexoanimal'];?>
 </li> 
             </h7>
  <hr>
          <h7 class="text-center">
           <p>HISTÓRIA <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</p>
           <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
 
        
    </h7>

     <hr>
 <br>
        
    </h7> 

    <button type="button" class="btn btn-primary btn-lg mt-2 ml-2" data-toggle="modal" data-target="#meuModal">QUERO ADOTAR!</button>
   
    <div id="meuModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Conteúdo do modal-->
        <div class="modal-content">

          <!-- Cabeçalho do modal -->
          <div class="modal-header">
            <h4 class="modal-title">INTERESSE DE ADOÇÃO - <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Corpo do modal -->
          <div class="modal-body">
            <span class="highlight-text">Registrado por: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nomedoador'];?>
</span>
            <br>
            <span class="highlight-text">
                <img width="25px" src="https://i.pinimg.com/originals/d6/09/0d/d6090d4014c218ed2e44016fbef2adfc.jpg"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_telefonedoador'];?>

             </span> <br>
            <span class="highlight-text">
              <img width="25px" src="https://images.vexels.com/media/users/3/140928/isolated/lists/8d338f5acd60bfbc9b5fb1b208c8814f-delineou-o-icone-redondo-de-e-mail.png"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_emaildoador'];?>

            </span><br>
              <span class="small text-muted">Ao falar com o doador, diga que viu o anúncio dele aqui no Adota Pets.</span>

            <br><br>
            <p>Adote e tenha um novo melhor amigo!</p>
          </div>

          <!-- Rodapé do modal-->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
         </div>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
 <hr>

</div>
        <!-- -->
                  <br></br>
         <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>

                      <li class="col-md-3 ">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="thumbnail">

  
                      </li>

                    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                 
              </ul>
              

        </div>
            <br>
            <br>


  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php }
}
