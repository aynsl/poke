<?php
   // methode pour limiter les pokemons de generation 1 
   // $list = file_get_contents('https://pokebuildapi.fr/api/v1/pokemon/generation/1');
    $list = file_get_contents('https://pokebuildapi.fr/api/v1/pokemon');
    $list = json_decode($list);
    
    $string = '';
    foreach($list as $row){
        // autre methode limiter juste les pokemons de generation 1 
        if($row->apiGeneration == 1){
        $string .= '<div class="col-3"><input type="checkbox" 
        name="pokemon[]" value="'.$row->id.'"><a href="details.php?id='
        .$row->id.'"><img style="width:50px;" src="'.$row->image.'" /><br />' 
        . $row->name . '</a></div>';
    }
}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="simulation.php" method="POST">
        <div class="container">
            <div class="row">
            <?php echo $string; ?>
            <input type="submit" value="lancer le 
             combat " class="form-control">
             </div>
        </div>
    </form>
</body>
</html>