//detalles de busquedad 
<?php 
        include('conexion.php');
        $conexion = conexion();
//https://jonathanmelgoza.com/blog/crear-filtros-de-productos-en-php-y-mysql/
        //http://www.comocreartuweb.com/consultas/showthread.php/56130-Conseguir-filtro-de-b%C3%BAsqueda-a-trav%C3%A9s-de-varias-consultas

//preguntamos si lo que llego de BARRIO no está vacío:
//si no lo está va a entrar en la sentencia
/* $filtros = array(
            "municipio", 
            "barrio", 
            "tipo", 
            "alcobas" 
        );

        $consulta = "";
 
        foreach ($filtros as $filtro) {
            if(isset($_GET[$filtro])){
                $consulta .= $filtro." LIKE '%".$_GET[$filtro]."%' AND ";
            }
        }

        if(!$consulta){
            $consulta = substr($consulta,0,(strlen($consulta)-4));
        }
    
        $sql    = "SELECT * FROM propiedades WHERE $consulta ORDER BY idPropiedades ASC"; 
        $resultados= $conn->query($sql);  */
if(!empty($barrio)){ 

        //ahora preguntamos si la variable consulta esta vacía
      //por qué? PORQUE mas arriba tenes un if de Municipio.
     //la variable $consulta desde municipio lo llenara con:
    // $consulta.="municipio LIKE '$municipio'"; por ende ya tendría contenido
      // e indefectiblemente tendras que usar un AND para que funcione el filtro algo asi
   // SELECT * FROM propiedades WHERE municipio LIKE '$municipio' AND barrio LIKE '$barrio' ORDER BY idPropiedades ASC
     //pero si la variable $consulta vino vacia desde municipio, quiere decir que será el comienzo del filtro y querdaría solo asi:
     //SELECT * FROM propiedades WHERE barrio LIKE '$barrio' ORDER BY idPropiedades ASC
// y así con todos

        if($consulta==""){
            //si esta vacia la var consulta, le ponemos como si fuera el primer filtro
                 $consulta.="barrio LIKE '$barrio'";            
        }        
   
        }else{ 
         
        //si no, pues cocatenamos con el filtro de municipio
                $consulta.="AND barrio LIKE '$barrio'";  
                
             
        }
}  
if(isset($_GET['categoria']))
{
$categoria= $_GET['categoria'];
}

if(isset($_GET['ubicacion']))
{
$ubicacion= $_GET['ubicacion'];
}

if(isset($_GET['precioMin']))
{
$precioMin= $_GET['precioMin'];
}

if(isset($_GET['precioMax']))
{
$precioMax= $_GET['precioMax'];
}

if(isset($_GET['nexo']))
{
$in= $_GET['nexo'];//aca recibo el OR o AND que da resultados distintos
}

if(isset($_GET['orden']))
{
$orden= $_GET['orden'];
}
$consulta="";
$texto="Resultados para: - ";

        //Consultas de categoria
        if(!empty($categoria)){
        
            if($consulta==""){
                $consulta.="idCat LIKE '$categoria'";
                //$texto.="<strong>Categoria</strong> - ";
            }
        
        }//fin consulta categoria
        
        
        //Consultas de ubicacion
        if(!empty($ubicacion)){
        
            if($consulta==""){
                $consulta.="idLoc LIKE '$ubicacion'";
                //$texto.="<strong>Ubicación</strong> - ";
            
            }else{
                $consulta.=" $in idLoc LIKE '$ubicacion'";
                //$texto.="<strong>Ubicación</strong> - ";
            
            }
        
        }//fin consulta ubicacion
        
        
        //Consultas de precio minimo
        if(!empty($precioMin)){
        
            if($consulta==""){
                $consulta.="precio >='$precioMin'";
                //$texto.="<strong>Precio</strong> - ";
            
            }else{
                $consulta.=" $in precio >='$precioMin'";
                //$texto.="<strong>Precio</strong> - ";
            
            }
        
        }//fin consulta precio minimo
        
        
        if(!empty($precioMax)){
        
            if($consulta==""){
                $consulta.="precio <='$precioMax'";
                //$texto.="<strong>Precio</strong> - ";
            
            }else{
                $consulta.=" $in precio <='$precioMax'";
                //$texto.="<strong>Precio</strong> - ";
            
            }
        
        }//fin consulta precio
        
        if($consulta!=""){
            $consulta=$consulta;
        }

