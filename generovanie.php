<?php
$dir = 'files/';
$subory = scandir($dir);

foreach ($subory as $subor){
    if ($subor!='.' && $subor!='..'){
        echo '<tr>'.

            '<td>'. '<a class="odkaz" target="_blank" href="http://wt131.fei.stuba.sk/uploadovanieZ1/files/'. $subor .' ">'.$subor. '</a></td>'.
            '<td class="zarovnanieP">'. filesize('files/'.$subor)." bytov". '</td>'.
            '<td class="zarovnanieP">'. date("d.m.Y H:i:s", fileatime("files/".$subor)). '</td>'.

            '<tr>';
    }
}

?>