<?php 
// Informationen �ber die installierte
// GD-Grafikbibliothek anzeigen
$info = gd_info();
echo '<pre>';
print_r($info);
echo '</pre>';
?> 