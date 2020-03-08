 <?php 
$Name= $_POST["Name"];
$Email= $_POST["email"];
$T1= $_POST["T1"];
$T2= $_POST["T2"];
$T3= $_POST["T3"];
$An= $_POST["Anmerkungen"];
mail ( "juliushussl4@gmail.com" , "Neue Tischreservierung" , "$Name möchte: \n $T1 mal Tischplatz 10 € \n $T2 mal 8er-Tisch 75 € \n $T3 mal 12er-Tisch 100 € \n reservieren.\nAnmerkungen: $An. \n Bitte antworte ihm möglichst schnell!\n Seine Email: $Email \nUnd schreibe an juliushussl@gmail.com wenn sich die Anzahl der übrigen Tische ändert!");

if(mail ( "schulball.grg4@gmail.com" , "Neue Tischreservierung" , "$Name möchte: \n $T1 mal Tischplatz 10 € \n $T2 mal 8er-Tisch 75 € \n $T3 mal 12er-Tisch 100 € \n reservieren.\nAnmerkungen: $An. \n Bitte antworte ihm möglichst schnell!\n Seine Email: $Email \nUnd schreibe an juliushussl@gmail.com wenn sich die Anzahl der übrigen Tische ändert!")){ ?>
    <script language="javascript" type="text/javascript">
  window.location.href = 'Bestatigung.html';
 </script>
<?php
}else{
    echo "Es gab einen fehler bitte versuchen Sie es nochmal oder kontaktieren Sie juliushussl@gmail.com";
}

//"$Name möchte: \n $T1 mal Tischplatz 10 € \n $T2 mal 8er-Tisch 75 € \n $T3 mal 12er-Tisch 100 € \n reservieren. Anmerkungen: $An. \n Bitte antworte ihm möglichst schnell! Seine Email: $Email Und schreibe an juliushussl@gmail.com wenn sich die Anzahl der übrigen Tische ändert!"
?>