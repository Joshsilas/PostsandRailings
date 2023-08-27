
<?php
       
        require('functions.php');
 ?>
 
 Input the amount of posts you need then amount of railings. Railings must be 1 less than posts.
 <br>
<br>
<form method ='POST' >
	<label for="text">Input posts then railings</label> 
	<input type="int" name= "posts" id="posts"> 
    <input type="int" name= "railings" id="railings"> 
    <input type="submit" value='Calculate length of fence based on posts and railings'>
</form>



<?php

if (isset($_POST['posts']) && isset($_POST['railings'])) {
   echo thelengthofthefence($_POST['posts'],$_POST['railings']);
   echo '<br>';
   echo '<br>' ;
   echo "You put " .($_POST['posts'] . " posts, and " . $_POST['railings']) . " railings";
 }


?> 
<br>
<br>
Please enter the Length of the fence you want and we will return the amount of posts and railings you need.
<br>
<br>
<form method ='POST' >
	<label for="text">Input length of fence in metres</label> 
	<input type="int" name= "length" id="length"> 
    <input type="submit" value='Calculate amount of posts and railings required for length'>
</form>

<?php 
if (isset($_POST["length"])) {
    echo howManyPolesAndRailings($_POST['length']);
 echo '<br>';
echo '<br>' ;}

