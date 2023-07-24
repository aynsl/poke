# Pokéfight *

Cette application permet aux utilisateurs d'obtenir des informations détaillées sur les différents Pokémon et imaginer des scénarios combats entre *__Pokémon__*.

### index.php ###

Ce code en PHP récupère une liste de Pokémon à partir de l'API "PokeBuildAPI" et les affiche sous forme de cases à cocher dans un formulaire HTML. Voici une explication détaillée du code :

    La première partie du code utilise la fonction file_get_contents() pour récupérer les données JSON de l'API "PokeBuildAPI". Ces données sont ensuite décodées en utilisant json_decode() pour obtenir un objet contenant la liste des Pokémon.

    Ensuite, une variable $string est initialisée pour stocker le code HTML qui représente les cases à cocher pour chaque Pokémon. Une boucle foreach est utilisée pour itérer sur chaque élément de la liste des Pokémon.

    À l'intérieur de la boucle, il y a une condition if pour vérifier si le Pokémon appartient à la génération 1. Si c'est le cas, le code HTML est ajouté à la variable $string. Ce code HTML comprend une case à cocher avec le nom du Pokémon et une image, ainsi qu'un lien vers une page de détails.

    Après la boucle, le code HTML principal commence. Il s'agit d'un formulaire avec une mise en page basée sur Bootstrap. La variable $string est affichée à l'intérieur d'une div avec la classe "row", afin que les Pokémon soient affichés dans une grille.

    Le formulaire a une action "simulation.php" et utilise la méthode POST pour envoyer les données sélectionnées par l'utilisateur.

    Enfin, le code HTML se termine avec les balises de fermeture pour le formulaire, le corps de la page (</body>) et le document HTML (</html>).

Ce code permet donc d'afficher une liste de Pokémon avec des cases à cocher, permettant aux utilisateurs de sélectionner les Pokémon de leur choix et de soumettre le formulaire pour une simulation de combat.


## details.php ##


Ce code PHP semble implémenter une fonctionnalité qui récupère les détails d'un Pokémon à partir de l'API "PokeBuildAPI" en utilisant son ID, puis instancie une classe correspondant au type de Pokémon et passe les données récupérées en tant que paramètres lors de l'instanciation. Voici une explication détaillée du code :

    La première partie du code inclut la classe Utility à partir du namespace Src\Utility. Cette classe n'est pas définie dans le code fourni, mais elle est utilisée plus tard pour effectuer une opération sur le type de Pokémon.

    Ensuite, le code vérifie si l'ID du Pokémon est passé dans l'URL (via $_GET). Si c'est le cas, l'ID est stocké dans la variable $id. Sinon, l'utilisateur est redirigé vers la page index.php.

    Le code utilise la fonction file_get_contents() pour récupérer les données JSON de l'API "PokeBuildAPI" pour le Pokémon correspondant à l'ID spécifié. Ces données sont ensuite décodées en utilisant json_decode() pour obtenir un objet contenant les détails du Pokémon.

    La classe Utility est instanciée en tant que $utility pour utiliser sa méthode mrPropre(). Cela semble être une méthode personnalisée pour nettoyer le nom du type de Pokémon.

    Le nom de la classe est généré dynamiquement en utilisant la variable $type, qui contient le nom du type de Pokémon. Le format du nom de classe est "Src\Pokemons$type". Par exemple, si le type est "Feu", la classe correspondante serait "Src\Pokemons\Feu". La variable $className contient donc le nom de classe complet.

    Ensuite, une instance de la classe est créée en utilisant le nom de classe généré dynamiquement ($className). Les paramètres nécessaires pour l'instanciation sont passés, y compris le nom du Pokémon, ses statistiques, sa génération et son image.

    Le reste du code est une structure HTML de base sans contenu spécifique.

### simulation.php ###

Ce code semble implémenter une fonctionnalité de simulation de combat entre deux Pokémon. Voici une explication détaillée du code :

    Le code utilise les namespaces Src\Api et Src\Pokemons\Feu. Ces namespaces sont probablement définis dans d'autres fichiers inclus par le code.

    Ensuite, le code inclut les fichiers autoload.php pour charger les classes dynamiquement.

    Le code vérifie si des données ont été soumises via POST et si la clé 'pokemon' existe. Si c'est le cas, les données soumises sont récupérées et stockées dans la variable $pokemons. Sinon, l'utilisateur est redirigé vers la page index.php.

    Les deux premiers éléments du tableau $pokemons sont extraits et stockés dans les variables $combatant1 et $combatant2 respectivement. Ces variables représentent les identifiants des Pokémon qui vont s'affronter.

    Une instance de la classe Api est créée en utilisant le code $api = new Api();. Cette classe est probablement responsable de l'appel à l'API pour récupérer les détails des Pokémon.

    Les détails des Pokémon de combatant1 et combatant2 sont récupérés en utilisant la méthode getPokemonById() de l'objet $api.

    Les méthodes attaque() sont appelées sur les objets $combatant1 et $combatant2. Ces méthodes semblent probablement implémentées dans les classes des Pokémon respectifs (par exemple, la classe Feu) et effectuent des actions spécifiques liées à l'attaque du Pokémon.