<?php
/**
 * Created by PhpStorm.
 * User: kami
 * Date: 06/03/2017
 * Time: 01:26
 *
 * CodinGame planet is being attacked by slimy insectoid aliens.
 * <---
 * Hint:To protect the planet, you can implement the pseudo-code provided in the statement, below the player.
 **/


// game loop
while (TRUE)
{
    fscanf(STDIN, "%s",
        $enemy1 // name of enemy 1
    );
    fscanf(STDIN, "%d",
        $dist1 // distance to enemy 1
    );
    fscanf(STDIN, "%s",
        $enemy2 // name of enemy 2
    );
    fscanf(STDIN, "%d",
        $dist2 // distance to enemy 2
    );

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    echo ($dist1 > $dist2)?$enemy2:$enemy1;

    // You have to output a correct ship name to shoot ("Buzz", enemy1, enemy2, ...)
    echo"\n";
}

/**
 * Votre programme doit détruire les vaisseaux ennemis en tirant sur l'ennemi le plus proche à chaque tour.
* Règles
* 
* Les vaisseaux ennemis approchent en ligne droite vers votre canon.
*
* À chaque début d'un tour de jeu (dans la boucle game loop), vous obtenez les informations des deux ennemis les plus proches :
* variable enemy1 : le nom de l'ennemi 1.
* variable dist1 : la distance à laquelle se trouve l'ennemi 1.
* variable enemy2 : le nom de l'ennemi 2.
* variable dist2 : la distance à laquelle se trouve l'ennemi 2.
* Avant la fin du tour (fin de la boucle), vous devez indiquer en sortie le nom de l'ennemi le plus proche. Pour afficher le nom de l'ennemi le plus proche, vous devez utiliser la variable enemy1 ou enemy2.
 */