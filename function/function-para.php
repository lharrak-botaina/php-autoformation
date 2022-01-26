<?php
function familyName($fname, $year) {
//   echo "$fname Refsnes. Born in $year <br>";
  return $fname.$year;
}
$person = familyName('botaina',23);
echo $person ;
// familyName("Hege","1975");
// familyName("Stale","1978");
// familyName("Kai Jim","1983");
?>