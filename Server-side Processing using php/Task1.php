<html>
  <body>
   Latitude entered: <?php echo $_POST["latitude"]; ?>!<br />

   <?php $lat = $_POST["latitude"];?>

   <?php

    if (!is_numeric($lat)){
        echo "You have entered an invalid numeric latitude value. Please TRY AGAIN !";
    }
    elseif($lat >= -90 && $lat <= 90){
           $r = 6400;
           $pi = 3.142;
           $cosine = cos($lat);
           $latdeg = ($lat*pi())/180;
           $cosinedeg = cos($latdeg);
           $circ = 2 * $pi * $r * $cosinedeg;
           /*
           print "<br>Radius = $r Km";
           print "<br>Cosine of latitude $lat in radian = $cosine";
           */
           print "<br>Cosine of latitude in degrees = $cosinedeg";
           print "<br><b>The circumference for latitude of $lat is $circ</b><br>";
    }
    else{
            echo "Enter a valid numeric value for latitude in the interval [-90, +90] . TRY AGAIN!";
    }

   ?>
  </body>
</html> 