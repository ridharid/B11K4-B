<?php

function sort_array($data1) {
    $data1=[["a", "c", "b", "e", "d"],["g", "e", "f"]];
    sort($data1);
}   $arrlength=count($data1);
    for($x=0;$x<$arrlength;$x++)
  {
    echo $data1[$x];
    echo "<br>";
  }

function sort_array($data2) {
    $data2=[["g", "h", "i", "j"], ["a", "c", "b", "e", "d"],["g", "e", "f"]];
    sort($data2);
}   $arrlength=count($data2);
    for($x=0;$x<$arrlength;$x++)
  {
    echo $data2[$x];
    echo "<br>";
  }

?>