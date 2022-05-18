<title>Looping Through the Values| Andika Febriansyah</title>
<p>data berat badan </p>
<?php
$jsonobj = '{"Andika":55,"Kazuma":50,"Astholfo":68}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>