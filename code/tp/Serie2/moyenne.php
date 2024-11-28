<?php




function moyenne($notes){
    $somme = 0;
    $moyenne = 0;
    foreach($notes as $note){
        $somme +=  $note;
    }
        $moyenne =$somme/count($notes);
        return $moyenne;
    
}

?>