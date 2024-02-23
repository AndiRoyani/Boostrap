
<?php
$a = readline("Masukkan nilai a: ");
$b = readline("Masukkan nilai b: ");
$c = readline("Masukkan nilai c: ");
$d = readline("Masukkan nilai d: ");

$max_of_abc = ($a > $b && $a > $c) ? $a : ($b > $c ? $b : $c);

if ($max_of_abc > $d) {
    echo "Nilai terbesar adalah $max_of_abc";
} else {
    echo "Nilai terbesar adalah d";
}
?>
 