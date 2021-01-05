<?php 

Class Produtos extends Conexao{
    function __construct(){
        parent::__construct();

    }

	function GetProdutosID($id){
//query para buscar  de uma categoria especifica.
$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

$query .= " AND pro_id = :id";

$params = array(':id'=>(int)$id);

$this->ExecuteSQL($query, $params);

$this->GetLista();

}




    function GetProdutos(){
        //query especifica para buscar os produtos de uma categoria especifica
 	
		 $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

	
		 $query .= " ORDER BY pro_id DESC";
 
		 $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos");
 
		 
		 $this->ExecuteSQL($query);
 
		 $this->GetLista();
		 
	 }
     
    
	private function GetLista(){
		$i = 1;
		while($lista = $this->ListarDados()):
		$this->itens[$i] = array(
			 'pro_id' => $lista['pro_id'],
			 'pro_nome'  => $lista['pro_nome'] ,  
	         'pro_desc'  => $lista['pro_desc'] ,  
             'pro_img'     => Rotas::ImageLink($lista['pro_img'], 180, 180) ,  
             'pro_img_g'     => Rotas::ImageLink($lista['pro_img'], 300, 300) ,  
             'pro_img_p'     => Rotas::ImageLink($lista['pro_img'], 70, 70) ,  
			 'pro_slug' => $lista['pro_slug'], 
			 'pro_caracteristicas' => $lista['pro_caracteristicas'], 
			 'pro_estado' => $lista['pro_estado'], 
			 'pro_nomedoador' => $lista['pro_nomedoador'],
			 'pro_emaildoador' => $lista['pro_emaildoador'],
			 'pro_telefonedoador' => $lista['pro_telefonedoador'],
			 'pro_sexoanimal' => $lista['pro_sexoanimal'],
			 'cate_nome' => $lista['cate_nome'] , 
			 'cate_id'   => $lista['cate_id'] 


			);

		$i++;
		endwhile;
	}
    }



?>