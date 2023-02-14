<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><u><h1>Bill</h1></u></center>
    <form method="post" action="indexx.php">
       <table>

    <tr>
        <td>consumer id</td>
        <td> <input type="number" name="id"></td>
    </tr>
    <tr>
        <td>name</td>
        <td> <input type="text" name="name"></td>
    </tr>
    <tr>
        <td>previous reading</td>
        <td> <input type="number" name="r1"></td>
    </tr>
    <tr>
        <td>present reading</td>
        <td> <input type="number" name="r2"></td>
    </tr>
    <tr>
        
        <td> <input type="submit"></td>
    </tr>

      </table>
       
    </form>
    <?php
    $id=$_POST['id'];
    $name=$_POST['name'];
    $previuous=$_POST['r1'];
    $present=$_POST['r2'];

    echo "<br>consumer id:",$id;
    echo "<br>name: ",$name;
    echo "<br>previous reading:",$previuous;
    echo "<br>present reading:",$present;

    $unit=$present-$previous;
    if($unit<=100)
    {
        $amount=$unit*3;
    }
    elseif($unit>100&&$unit<=200){
        $amount=$unit*4;
    }



    ?>

    
</body>
</html>