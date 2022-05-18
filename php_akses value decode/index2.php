<title>Accessing the Decoded Values 2| Andika Febriansyah</title>
<p>mengakses value decode</p>
<?php
$jsonobj = '{"Andika":21,"Kazuma":35,"Astholfo":41}';

$arr = json_decode($jsonobj, true);

echo $arr["Andika"];
echo $arr["Kazuma"];
echo $arr["Astholfo"];
?>