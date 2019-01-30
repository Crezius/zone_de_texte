
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="utf-8">
    
</head>

<body>
    
    <h1>Message</h1>

   <form action="index.php" method='post'>
        <input type="text" name="message">
        <input type="submit" value="Submit">
    </form>
    
    
    
    <?php
        if(isset($_POST["message"])){
            $message = $_POST["message"];
            
            if($message != ""){
                echo '<p>Vous avez entré : '.$message.'</p>';
            } else {
                echo '<p>La zone de texte est vide</>';

            }
        }
    
    ?>
    
</body>

</html>