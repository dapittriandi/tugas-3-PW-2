

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Style</title>
<style>
    .ganti-style {
    font-size: 28px;
    font-family: arial;
    color: #1A0547;
    font-style: italic;
    font-weight: bolder;
}
</style>
</head>

<body>
    <?php
    $tulisan = "Hello World! Here I Come!";
    $kelas = "ganti-style";

    function ganti_style($tulisan, $kelas) { ?>
        <h1 class="<?php echo $kelas; ?>"><?php echo $tulisan; ?></h1>
        
    <?php }
     
      echo ganti_style($tulisan, $kelas); ?>
</body>
</html>