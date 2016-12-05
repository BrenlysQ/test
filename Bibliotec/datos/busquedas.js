 $(document).ready(function(){
 
		$(".buscarlibros").autocomplete({        
			source: "buscar_libro.php",
			minLength: 1,
			select: function( event, ui ) {	
			}
		});	
 
 
	 
});
