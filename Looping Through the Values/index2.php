<title>Looping Through the Values 2 |Andika Febriansyah</title>
<p>data ukuran pinggul</p>
<?php
$jsonobj = '{"Andika":21,"Kazuma":35,"Astholfo":41}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>