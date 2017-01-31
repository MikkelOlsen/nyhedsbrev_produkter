<?php

if ( $_POST )
{   echo '<div class="row">';
    echo '<div class="col s12 m6">';
    echo '<div class="card blue-grey darken-1"> ';
    echo '<div class="card-content white-text">';
    echo '<span class="card-title">';
    echo "Hej ". $_POST['navn'].".  </span> <p>Tak for din tilmelding til vores nyhedsbrev.
    Du er tilmeldt med mailadressen " . $_POST['mail'] . "
    </p>";
    
    if ( isset ( $_POST['produkt'] ) )
    {
        echo "<p>Du har valgt at få nyheder om disse produkter: </p>";
        echo '</div>';
        echo '<div class="card-action">';
        echo "<ul>";

        foreach ( $_POST['produkt'] as $value )
        {
            echo "<li>" . $value . "</li>";
        }

        echo "</ul>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

</head>
<body>
    
</body>
</html>