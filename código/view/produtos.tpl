<h3 class="text-center">ADOTE</h3>

       
    <!--  começa lista de produtos  ---->   
   <section id="produtos" class="row">  
 
        <ul style="list-style: none" >
    

  
            <div class="row" id="pularliha">
                    {foreach from=$PRO item=P}
           
        <li class="col-md-18">

                    <div class="thumbnail">

                        <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">


                            <img src="{$P.pro_img}" alt="" > 

                            <div class="caption">

                                <h5 class="text-center">{$P.pro_nome}</h4> 
                                 <h5 class="text-center">{$P.pro_caracteristicas}</h4> 
                                 <h5 class="text-center">{$P.pro_sexoanimal}</h4> 
                                <h8><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">&nbsp&nbsp&nbsp+ infos sobre {$P.pro_nome}&nbsp</h8>                                       

                            </div>

                        </a>

                    </div>


                </li>

                {/foreach}
                
                </div>
                
            
</ul>
    
    </section>
    
    
