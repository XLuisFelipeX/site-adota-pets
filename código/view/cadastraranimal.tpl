 <h3>Cadastro de animal</h3>
<!--- dados do cadastro -->

<hr>

  <form name="cadAnimal" id="cadAnimal" method="post" action="">

<section class="row" id="cadastraranimal">

  
        
        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" class="form-control" name="pro_nome" value="" placeholder="Nome do animalzinho">
            
            
        </div>

          <div class="col-md-4">
          <label>Categoria:</label>
          <br>
          <select name="pro_categoria">
              <option selected="" value="">Selecione a categoria:</option>
              <option value="Cachorro">Cachorro</option>
              <option value="Gato">Gato</option>
  
              </select>

                        
            
        </div>

            <div class="col-md-4">
            <label>Descrição:</label>
           <textarea class="form-control" name="pro_desc" rows="3" placeholder="Fale sobre o animalzinho"></textarea>
            
            
        </div>

            <div class="col-md-4">
            <label>Imagem:</label>
            <input type="file" name="pro_img" accept="image/png, image/jpeg" multiple />.
            
            
        </div>

          <div class="col-md-4">
          <label>Caracteristicas:</label>
          <textarea class="form-control" name="pro_caracteristicas" rows="3" placeholder="Fale as principais caracteristicas do animalzinho"></textarea>
            
            
        </div>
        
          <div class="col-md-4">
          <label>Estado:</label>
          <br>
          <select name="pro_estado">
              <option selected="" value="">Selecione o Estado (UF)</option>
              <option value="Acre">Acre</option>
              <option value="Alagoas">Alagoas</option>
              <option value="Amapá">Amapá</option>
              <option value="Amazonas">Amazonas</option>
              <option value="Bahia">Bahia</option>
              <option value="Ceará">Ceará</option>
              <option value="Distrito Federal">Distrito Federal</option>
              <option value="Espírito Santo">Espírito Santo</option>
              <option value="Goiás">Goiás</option>
              <option value="Maranhão">Maranhão</option>
              <option value="Mato Grosso">Mato Grosso</option>
              <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
              <option value="Minas Gerais">Minas Gerais</option>
              <option value="Pará">Pará</option>
              <option value="Paraíba">Paraíba</option>
              <option value="Paraná">Paraná</option>
              <option value="Pernambuco">Pernambuco</option>
              <option value="Piauí">Piauí</option>
              <option value="Rio de Janeiro">Rio de Janeiro</option>
              <option value="Rio Grande do Sul">Rio Grande do Sul</option>
              <option value="Rio Grande do Norte">Rio Grande do Norte</option>
              <option value="Rondônia">Rondônia</option>
              <option value="Roraima">Roraima</option>
              <option value="Santa Catarina">Santa Catarina</option>
              <option value="São Paulo">São Paulo</option>
              <option value="Sergipe">Sergipe</option>
              <option value="Tocantins">Tocantins</option>
              </select>
            
            
        </div>
</section>

      <br>
      <br>
      
      <section class="row" id="btngravar">
          
       <div class="col-md-4"></div>
       
       <div class="col-md-4">
           <button type="submit" class="btn btn-info btn-block "> <i class="glyphicon glyphicon-ok" action ="model/cadastraranimal.php" ></i> Cadastrar! </button>
               
           
       </div>
       
       <div class="col-md-4"></div>
    
    
</section>
      
      
         </form>