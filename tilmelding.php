<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

</head>
<body>

<div class="row">
    
<form class="col s20" action="takkebesked.php" method="post">

    <label>Navn:</label><input type="text" name="navn">
    <label>E-mail:</label><input type="text" name="mail">
      <form action="#">

    <p>
    <input class="filled-in"  id="filled-in-hat" type="checkbox" checked="checked" name="produkt[]" value="Hatte">
    <label for="filled-in-hat">Hatte</label>
    </p>
    <p>
    <input class="filled-in"  id="filled-in-sko" type="checkbox" name="produkt[]" value="Sko">
    <label for="filled-in-sko">Sko</label>
    </p>
    <p>
    <input class="filled-in"  id="filled-in-taske" type="checkbox" name="produkt[]" value="Tasker">
    <label for="filled-in-taske">Tasker</label>
    </p>
    <button class="btn waves-effect waves-light" type="submit" name="action">Send
    </button>
    </form>

</form>

</div>
</body>
</html>
