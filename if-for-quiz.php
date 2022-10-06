<?php
    // Nama : Nurul Hamidah
    // Kelas : 11 RPL 2
    $star=10;
         for( $a=$star;$a>0;$a--){
             for($i=1; $i<=$a; $i++){
                echo "&nbsp";
         }
         for($a1=$star;$a1>=$a;$a1--){
           echo"*";
         }
           echo"<br>";
      }
      echo "<hr>";

      $star=10;
     for($a=$star;$a>0;$a--){
          for($b=$star;$b>=$a;$b--){
               echo "*";
           }
        echo "<br>";
    }
    echo "<hr>";
    $star=10;
    for($a=$star;$a>0;$a--){
           for($i=1; $i<=$a; $i++){
               echo " &nbsp";
           }
           for($a1=$star;$a1>=$a;$a1--){
               echo"*";
           }
       echo"<br>";
   }
   echo "<hr>";
   $star=10;
      for($a=1; $a<=$star; $a++){
            for($b=1; $b<=$a; $b++){
                 echo "&nbsp";
       }
            for($c=$star; $c>=$a; $c-=1){
                  echo "*";
          }
          echo "<br>";
    }
    echo "<hr>";
    $star=10;
     for($a=1; $a<=$star; $a++){
          for($i=1; $i<=$a; $i++){
                echo " &nbsp";
           }
           for($c=$star; $c>=$a; $c-=1){
                  echo "*";
           }
          echo "<br>";
     }
     echo "<hr>";
     $star=10;
  for($a=1; $a<=$star; $a++){
        for($c=$star; $c>=$a; $c-=1){
               echo "*";
        }
         echo "<br>";
   }
   echo "<hr>";
   $star=10;
   for($a=1; $a<=$star; $a++){
         for($b=$star; $b>=$a; $b-=1){
                echo "&nbsp";
         }
         for($c=1; $c<=$a; $c++){
                echo "*";
         }
               echo "<br>";
               }
               for($a=1; $a<=$star; $a++){
               for($b=1; $b<=$a; $b++){
                    echo "&nbsp";
               }
               for($c=$star; $c>=$a; $c-=1){
                    echo "*";
               }
        echo "<br>";
  }
  echo "<hr>";
  for ($i=1; $i<=5; $i++) {
   for ($j=4; $j>=$i; $j--) {
        echo "  ";
    }for ($k=$i; $k>=1; $k--) {
        echo "$k";
    }echo "<br>";
}
echo "<hr>";
$h = 9;
$a = 0;
for($i=0;$i<$h;$i++){
    for($j=$h;$j>$a;$j--){
        print "&nbsp;";
    }
    for($k=0;$k<=$a;$k++){
        if($i==(int)($h/2)){
            print "+&nbsp;";
        }else{
            if($k==0 || $k==$a || $k==(int)($a/2)){
                print "+&nbsp;";
            }else{
                print "&nbsp;&nbsp;";
            }
        }
    }
    if($i<4){
        $a+=2;
    }else{
        $a-=2;
    }
    print "<br/>";
}

?>