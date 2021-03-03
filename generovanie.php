<?php
$podAdresar = $_POST['cesta'];
$dir = 'files/'.$podAdresar;
$subory = scandir($dir);
$korenovyAdresar = "http://wt131.fei.stuba.sk/uploadovanieZ1/files/";


vypisTabulky($dir, $subory);

function vypisTabulky($dir, $subory){

    foreach ($subory as $subor){
        if ($subor!='.' && $subor!='..'){
            echo '<tr>';
            overeniePriecinku($dir, $subor);
            nacitanieVlastnosti($subor);
            echo '<tr>';
        }
    }
}

function overeniePriecinku($dir, $subor){

    if(is_dir($dir.$subor)){
        $medzera = " ";
        $premenna = "'".$subor."'";
        echo '<td class="link" onclick="vnorenie('.$premenna.')">'.'<img src="img/icon/289-2899361_folder-icons-small-white-folder-icon-png-transparent.png" height="35" width="35" alt="subor">'.$medzera .$subor. '</td>';
    }else{
        echo '<td class="link">'. '<a class="odkaz" target="_blank" href="http://wt131.fei.stuba.sk/uploadovanieZ1/files/'. $subor .' ">'.$subor. '</a></td>';
    }
}

function nacitanieVlastnosti($subor){
    echo '<td class="zarovnanieP">'. filesize('files/'.$subor)." bytov". '</td>';
    echo '<td class="zarovnanieP">'. date("d.m.Y H:i:s", fileatime("files/".$subor)). '</td>';
}


?>