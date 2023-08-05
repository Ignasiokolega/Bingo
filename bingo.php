<?php
session_start();
if ($_SESSION['status'] != true || !isset($_SESSION["status"])){
  header('Location: index.php');
  exit();
}
if (isset($_SESSION['err_name'])){
  echo $_SESSION['err_name'];
  unset($_SESSION['err_name']);
} 

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Bingo!</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p>Hello, <?=$_SESSION["username"]?>! <br>
  You are successfully logged into your account! <br>
  Your e-mail: <?=$_SESSION["email"]?> </p>

    <br> 
    <?php 
    if(isset($_SESSION["Success"])) {
     echo "You've successfully added new sentence";
    }
    
    ?>
    <br>


  <p>Do you want new sentence in you're bingo?<br>
  Fill up this form, and you will have it!</p>

  <form action='new_bingo_sentence.php' method='post'>

    <input name='bingo' type='text' required placeholder='Doing something stupid'>

    <br>
    <br>

    <input name='character' type='text' required placeholder='John'>

    <br>
    <br>

    <input type='submit' name='checkbox' onsubmit='confirm ("Do you really want add this sentence to this character?");' value='Add sentence'>

  </form>
  <br><br><br>

  <p> Today bingo for character you choose! Remember to write it on paper or sth <p>


  <form action="helper.php" method="post">
      <input type="text" name="name" required placeholder = "<?php if(isset($_POST['name'])){echo $_POST['name'];} else {echo 'John';}?>">
      <input type="submit" name="checkbox" value ="Generate Bingo">
      </form>

      
      <?php
      if(isset($_SESSION['new_bingo'])){
        $bingo = $_SESSION['new_bingo'];
        shuffle($bingo);
        $bingo = array_chunk($bingo, 5);
      }
        ?>


        <table class='style-table'>

          <tr>

        <?php
        if (isset($bingo[0]) && gettype($bingo[0]) === "array"){
          foreach ($bingo[0] as $bingo1){
            echo "<td>".$bingo1."</td>";
          }
        }
        ?>

          </tr>

          <tr>

        <?php
          if (isset($bingo[1]) && gettype($bingo[1]) === "array"){
            foreach ($bingo[1] as $bingo2){
              echo "<td>".$bingo2."</td>";
            }
          }
        ?>
            
          </tr>

          <tr>

        <?php
          if (isset($bingo[2]) && gettype($bingo[2]) === "array"){
            foreach ($bingo[2] as $bingo3){
              echo "<td>".$bingo3."</td>";
            }
          }
        ?>

          </tr>

          <tr>

        <?php
          if (isset($bingo[3]) && gettype($bingo[3]) === "array"){
            foreach ($bingo[3] as $bingo4){
              echo "<td>".$bingo4."</td>";
            }
          }
        ?>
          </tr>

          <tr>

        <?php
          if (isset($bingo[4]) && gettype($bingo[4]) === "array"){
            foreach ($bingo[4] as $bingo5){
              echo "<td>".$bingo5."</td>";
            }
          }
        ?>
          </tr>


        </table>
      
      
      
      

      

  

        <br> 
        <br>
        <br>
        <br>









    <button id="logout_button"><a href="logout.php">LOG OUT</a></button>




  </body>
</html>