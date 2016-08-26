<link rel="stylesheet" href="style.css">
<style>*{background-image: url(img/requincheval.jpg);}</style>

<?php
    $triBulle = array(10, 9, 7, 4, 5, 3, 7, 6, 12, 0);

    $triBulleLength = count($triBulle)-1;

    for($i = 0; $i <= $triBulleLength; $i++) {
        for($j = $triBulleLength-1; $j >= $i; $j--) {
            if($triBulle[$j] > $triBulle[$j+1]) {
                $temp = $triBulle[$j+1];
                $triBulle[$j+1] = $triBulle[$j];
                $triBulle[$j] = $temp;
            }
        }
    }
?>
 
<?php
    $triInsert = array(1, 2, 4, 3);
?>
  
<?php include('content.php'); ?>
   
   
    