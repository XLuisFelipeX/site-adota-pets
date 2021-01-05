<?php
/* Smarty version 3.1.36, created on 2020-10-11 21:30:42
  from 'C:\xampp2\htdocs\tccpets\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f83a3b28394c0_79608189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11e1bc37b1f043ef7dac332be923800838bcd6cd' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tccpets\\view\\produtos.tpl',
      1 => 1602462639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f83a3b28394c0_79608189 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">ADOTE</h3>

       
    <!--  começa lista de produtos  ---->   
   <section id="produtos" class="row">  
 
        <ul style="list-style: none" >
    

  
            <div class="row" id="pularliha">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
           
        <li class="col-md-18">

                    <div class="thumbnail">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">


                            <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="" > 

                            <div class="caption">

                                <h5 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4> 
                                 <h5 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_caracteristicas'];?>
</h4> 
                                 <h5 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_sexoanimal'];?>
</h4> 
                                <h8><a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">&nbsp&nbsp&nbsp+ infos sobre <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
&nbsp</h8>                                       

                            </div>

                        </a>

                    </div>


                </li>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                </div>
                
            
</ul>
    
    </section>
    
    
<?php }
}
