<!DOCTYPE html>

<head>
    <title>Calculator </title>
    <link rel="stylesheet" href="styles.css">
</head>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$hitung = $_POST['hitung'];
$result = '';
if (is_numeric($a) && is_numeric($b)) {
    switch ($hitung) {
        case "Tambah":
           $result = $a + $b;
            break;
        case "Kurang":
           $result = $a - $b;
            break;
        case "Kali":
            $result = $a * $b;
            break;
        case "Bagi":
            $result = $a / $b;
    }
}

?>

<body>
	
    <div>
        <h1>Calculator</h1>
        <form action="" method="post" id="quiz-form">
                        <input type="number" name="a" id="a" required="required" value="<?php echo $a; ?>" />
                        <input type="number" name="b" id="b" required="required" value="<?php echo $b; ?>" />
                        <br> <br>
                        <div>
                            <input type="submit" name="hitung" value="Tambah" />
                            <input type="submit" name="hitung" value="Kurang" />
                            <input type="submit" name="hitung" value="Kali" />
                            <input type="submit" name="hitung" value="Bagi" />
                        </div>
                       
                    <br><input type="text" name="hitung" value=" <?php echo $result; ?>" disabled/>
                       

        </form>

  

    </div>
 
</body>

</html>