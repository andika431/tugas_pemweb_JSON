<title>json_decode 2 | Andika Febriansyah</title>
<p>data umur </p>
<?php
$jsonobj = '{"Andika":21,"Kazuma":35,"Astholfo":41}';

var_dump(json_decode($jsonobj, true));
?>