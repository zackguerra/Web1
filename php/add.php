<?php 
// global array variable
// ehenever the submit button is pressed, condition check
if(isset($_POST['submit']))
echo htmlspecialchars($_POST['email']);
echo htmlspecialchars($_POST['title']);
echo htmlspecialchars($_POST['content']);

// check email
if(empty($_POST['email'])){
    echo 'An email is required <br>';
}else{
    $email = $_POST['email'];
    // builtin email validation
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'email must be a vaild email address';
    }
}
// check title
if(empty($_POST['title'])){
    echo 'An title is required <br>';
}else{
    $title = $_POST['title'];
//    Regular Expression:Regex
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
        echo 'Title must be letters and space only ';
    }
}

// check content
if(empty($_POST['content'])){
    echo 'An content is required <br>';
}else{
    $content = $_POST['content'];
//    Regular Expression:Regex
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content)){
        echo 'Content must be comma separated ';
    }
}
// XSS(Cross Site Scripting)
?>





<!DOCTYPE html>
<html lang="en">
<?php 
include ('./templates/header.php');
?>
<section class="container grey-text">
<h4 class="center">Add an element</h4>

<!-- form -->
<form action="add.php" class="white" method="POST">
<label> Your Email</label>
<input type="email" name="email">
<label> Title</label>
<input type="text" name="title">
<label> Content(Comma Separated)</label>
<input type="text" name="content">
<div class="center">
<input type="submit"  class="btn brand z-depth-0" name="submit" value="submit"></div>
</form>
</section>
    <?php
    include ('./templates/footer.php') ?>
</body>
</html>