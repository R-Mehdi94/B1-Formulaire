<!DOCTYPE html>

<?php

	$stock = array(
			
			'Ahibero' => 20 ,
			'Ajowan' => 5 ,
			'Amande' => 15 , 
			'Amiris' => 3 ,
			'Aneth' => 10
		) ;
		
	$nom = ucfirst( $_GET[ 'nom' ] ) ;
	$quantite = $_GET[ 'qte' ] ;


?>


<html lang="fr">
    <head>
        <title>Sanaya Bio</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
		
		Le produit <strong><?php echo $nom ; ?></strong> est
		
		<?php if( array_key_exists( $nom , $stock ) ) { ?>
			
			<?php if( $stock[ $nom ] >= $quantite ){ ?>
				en quantité suffisante.
			<?php } else { ?>
				en quantité insuffisante.
			<?php } ?>
			
		<?php } else {?>
			inconnu.
		<?php } ?>
		
		
	</body>
</html>
