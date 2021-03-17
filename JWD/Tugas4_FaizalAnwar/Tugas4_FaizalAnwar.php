<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <form action="" method="post">
     Jumlah Bintang  = <input type="text" name="nama">
     <br>
     <input type="submit" value="kirim">
     </form>
     <br>
 </body>
 </html>
 <?php
      For ($i=1; $i<=$_POST['nama'];$i++){  
        For($j=1; $j<=$i;$j++){  
             echo "* "; //mencetak bintang  
        }  
        echo '<br/>';  
   }  
?>
