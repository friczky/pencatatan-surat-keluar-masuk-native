<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Date</title>
</head>
<body>
   <form action="" method="get">
   <input type="date" name="date">
   <button type="submit">Kirim</button>
   </form>

   <?php 

    if(isset($_GET['date'])){
        $date = $_GET['date'];
        echo $date;
        echo '<br>';
        $parts = explode('-', $date);
        echo 'tahun = '.$parts[0].'<br>';
        echo 'bulan = '.$parts[1].'<br>';
        echo 'tanggal = '.$parts[2].'<br>';

    }
    ?>
</body>
</html>

