<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="proc.php" method="post" name="calc">
    <label>coloque los valores</label></br>
    <input type="text" name="c1"/><br/><br/>
    <input type="text" name="c2"/><br/><br/>
    <input type="text" name="c3"/><br/><br/>
    
    <label>Selecciona la operacion:<select name="lista">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    
    </select>
    </label><br/>
        <input type="submit" value="Ver resultado"/><br/><br/>
</form>
    
</body>
</html>