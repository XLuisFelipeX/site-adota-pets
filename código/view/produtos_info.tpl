    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     {foreach from=$PRO item=P}

      <h3 class="text-center">{$P.pro_nome}</h3>
<hr>

<div class="row">
    
  
    {*  div da esquerda imagem do produto  *}
    <div class="col-md-6 ">

        <img class="thumbnail" src="{$P.pro_img_g}" alt="" > 

    </div>

    <div class="col-md-6 thumbnail">
        
         <hr>
            <h7 class="text-center">
           <p>DADOS GERAIS</p>
           <li> {$P.pro_caracteristicas} </li> 
           <li> {$P.pro_sexoanimal} </li> 
             </h7>
  <hr>
          <h7 class="text-center">
           <p>HISTÓRIA {$P.pro_nome}</p>
           {$P.pro_desc} 
        
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
            <h4 class="modal-title">INTERESSE DE ADOÇÃO - {$P.pro_nome}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Corpo do modal -->
          <div class="modal-body">
            <span class="highlight-text">Registrado por: {$P.pro_nomedoador}</span>
            <br>
            <span class="highlight-text">
                <img width="25px" src="https://i.pinimg.com/originals/d6/09/0d/d6090d4014c218ed2e44016fbef2adfc.jpg"> {$P.pro_telefonedoador}
             </span> <br>
            <span class="highlight-text">
              <img width="25px" src="https://images.vexels.com/media/users/3/140928/isolated/lists/8d338f5acd60bfbc9b5fb1b208c8814f-delineou-o-icone-redondo-de-e-mail.png"> {$P.pro_emaildoador}
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <hr>

</div>
        <!-- -->
         {*  listagem de imagens extras  *}
         <br></br>
         <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                 {foreach from=$IMAGES item=I}

                      <li class="col-md-3 ">
                          <img src="{$I.img_nome}" alt="" class="thumbnail">

  
                      </li>

                    
{/foreach}
                 
              </ul>
              

        </div>
            <br>
            <br>


  {/foreach}


