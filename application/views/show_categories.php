<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>all categories</h1>
    <?php 
    echo $message;
    ?>
    <?php 
    
    print_r($all_catagories);
echo "<hr>";
echo "<table border='2'>";
    echo "<tr>";
        echo "<th>";
            echo "Catagory id";
        echo "</th>";
        echo "<th>";
            echo "Catagory title";
        echo "</th>";
        echo "<th>";
            echo "Catagory description";
        echo "</th>";
    echo "</tr>";
    foreach($all_catagories as $indexname => $value){
       // echo $indexname . '<br>';
       print_r($value);
       echo "<tr>";
            echo "<td>";
                echo $value->catagory_id;
            echo "</td>";
            echo "<td>";
                echo $value->title;
            echo "</td>";
            echo "<td>";
                echo $value->description;
            echo "</td>";
       echo "</tr>";
    }
echo "</table>";
    ?>
</body>
</html>