<?php
/* Smarty version 3.1.36, created on 2020-10-04 19:20:01
  from 'C:\xampp2\htdocs\tccpets\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f7a4a91eae2d8_42473861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e02589bc5acfb76922843990c39d87658eeaa5' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tccpets\\view\\cadastro.tpl',
      1 => 1601849997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7a4a91eae2d8_42473861 (Smarty_Internal_Template $_smarty_tpl) {
?> <h3>Cadastro de cliente</h3>
<!--- dados do cadastro -->

<hr>

  <form name="cadcliente" id="cadcliente" method="post" action="">

<section class="row" id="cadastro">
    
  
        
        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" name="cli_nome" class="form-control" minlength="3" required>
            
            
        </div>
        
        <div class="col-md-4">
            <label>Sobrenome:</label>
            <input type="text" name="cli_sobrenome" class="form-control"  minlength="3" required>
            
            
        </div>
        
      
        <div class="col-md-3">
            <label>Data Nasc:</label>
            <input type="date" name="cli_data_nasc" class="form-control" placeholder="dd/mm/aaaa" required>
            
            
        </div>
        
      
        <div class="col-md-2">
            <label>RG:</label>
            <input type="text" name="cli_rg" class="form-control" required>
            
            
        </div>
        
      
        
        <div class="col-md-2">
            <label>CPF:</label>
            <input type="text" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required>
            
            
        </div>
        
      
        
        <div class="col-md-2">
            <label>DDD:</label>
            <input type="number" name="cli_ddd" class="form-control"  min="10" max="99" required>
            
            
        </div>
        
      
        
        <div class="col-md-3">
            <label>Fone:</label>
            <input type="number" name="cli_fone" class="form-control" required>
            
            
        </div>
        
      
        
        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" name="cli_celular" class="form-control" required>
            
            
        </div>
                
        
        
        <div class="col-md-6">
            <label>Endereço:</label>
            <input type="text" name="cli_endereco" class="form-control"  minlength="3" required>
            
            
        </div>
        
        
        
        <div class="col-md-2">
            <label>Numero:</label>
            <input type="text" name="cli_numero" class="form-control" required>
            
            
        </div>
        
        
        <div class="col-md-4">
            <label>Bairro:</label>
            <input type="text" name="cli_bairro" class="form-control" minlength="3" required>
            
            
        </div>
        
        
        <div class="col-md-4">
            <label>Cidade:</label>
            <input type="text" name="cli_cidade" class="form-control" minlength="3" required>
            
            
        </div>
        
        
        <div class="col-md-2">
            <label>UF:</label>
           
            <input type="text" name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
            
            
        </div>
        
        
        <div class="col-md-2">
            <label>Cep:</label>
           
            <input type="text" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
            
            
        </div>
        
        
        <div class="col-md-4">
            <label>Email:</label>
           
            <input type="email" name="cli_email" class="form-control" required>
            
            
        </div>
        
        
        
        
        
 
    
       
    
</section>

      <br>
      <br>
      
      <section class="row" id="btngravar">
          
       <div class="col-md-4"></div>
       
       <div class="col-md-4">
           <button type="submit" class="btn btn-info btn-block "> <i class="glyphicon glyphicon-ok"></i> Gravar </button>
               
           
       </div>
       
       <div class="col-md-4"></div>
    
    
</section>
      
      
         </form><?php }
}
