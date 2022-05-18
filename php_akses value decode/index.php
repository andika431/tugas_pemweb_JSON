<title>Accessing the Decoded Values|Andika Febriansyah</title>
<p>Accessing the Decoded Values</p>
<?php
$jsonobj = '{"Andika":21,"Kazuma":35,"Astholfo":41}';

$obj = json_decode($jsonobj);

echo $obj->Andika;
echo $obj->Kazuma;
echo $obj->Astholfo;
?>