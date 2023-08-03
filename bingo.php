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
  <link rel="styleheet" href="style.css">
</head>
<body>
  <p>Hello, <?= $_SESSION["username"];?>!<br/>
You are successfully logged into your account!<br/>
Your e-mail: <?=$_SESSION["email"]?><br/> </p>

  <br> 
  <br>
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
    <input type="text" name="name" required placeholder = "John">
    <input type="submit" name="checkbox" value ="Generate Bingo">
    </form>
    <?php
    if(isset($_SESSION['new_bingo'])) {
      foreach ($_SESSION['new_bingo'] as $bingo){
      echo $bingo . "\n";
      }
    }
    
    ?>
    <table>

    </table>











<button id="logout_button"><a href="logout.php">LOG OUT</a></button>




</body>
</html>