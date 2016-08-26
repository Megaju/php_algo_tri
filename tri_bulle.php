<link rel="stylesheet" href="style.css">

<?php
    $tri = array(10, 9, 7, 4, 5, 3, 7, 6, 12, 0);

    $triLength = count($tri)-1;

    for($i = 0; $i <= $triLength; $i++) {
        for($j = $triLength-1; $j >= $i; $j--) {
            if($tri[$j] > $tri[$j+1]) {
                $temp = $tri[$j+1];
                $tri[$j+1] = $tri[$j];
                $tri[$j] = $temp;
            }
        }
    }
?>
  
<?php include('content.php'); ?>
   
   
    