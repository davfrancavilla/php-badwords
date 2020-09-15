<?php

$testo = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem architecto cum enim autem aut. Quam ad suscipit ea praesentium possimus hic vitae ratione tempore, dicta aperiam non alias sunt. Dignissimos!";

echo nl2br($testo."\n\n");
echo nl2br("La stringa è lunga ".strlen($testo)." caratteri.\n\n");

$badword = $_GET["badword"];

echo str_replace($badword, "***", $testo);

?>