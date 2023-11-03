<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$jawabanIsset = "Isset adalah = Function untuk menentukan apakah suatu variabel dideklarasikan dan berbeda dari null. Contoh penggunaan Isset pada validasi form PHP.<br><br>";
$jawabanEmpty = "Empty adalah = Function yang Digunakan untuk menentukan apakah variabel ada dan nilai variabel tidak bernilai false. contohnya dalam menginput suatu data.";

function soal($style) {
    if (isset($style)) {
        echo $style;
        if (empty($style) ) {
            echo $style;
        }
    }

    
}

echo soal($jawabanIsset);
echo soal($jawabanEmpty);
// echo soal($null);

?>
</body>
</html>

