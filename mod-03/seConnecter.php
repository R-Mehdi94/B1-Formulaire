<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>

    <body>
		
		
		<?php
			$connexionOk = FALSE ;
			if(  ){
				$connexionOk = TRUE ;
			}
		
		?>
		
		<h5>
			<?php
				if( $connexionOk ){
					echo "Administrateur connecté." ;
				}
				else {
					echo "Connexion refusée." ;
				}
			
			?>
		</h5>
		
		<a href="authentification.html">
		<?php
		
			if( $connexionOk ){
				echo "Déconnexion" ;
			}
		
		?>
		</a>
		
	</body>

</html>	
