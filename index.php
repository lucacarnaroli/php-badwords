<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. (edited)  -->
<?php
$bad_word = $_GET['bad_word'];
$bad = $_GET['bad'];
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$length_array = strlen($text);

?>

<!DOCTYPE html>
<html lang="s" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>es</title>
  </head>
  <body>
    <h3><?php echo $text; ?></h3>
    <p>Lunghezza testo: <?php echo $length_array ?></p>
    <h3><?php echo $length_array1 = str_replace($bad_word, '***', $text); ?></h3>
    <p>Lunghezza testo:
      <?php
     echo strlen($length_array1);?>
   </p>
  </body>
</html>
