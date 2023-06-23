<?php
for ($i = 1; $i <= 10; $i++) {
  if ($i == 5) {
    continue; // Melewati iterasi ke-5
  }
  echo $i . " ";
}
?>