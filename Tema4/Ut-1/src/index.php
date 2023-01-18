<?php
require_once("cityDAO.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>My Travel Bucket List</h1>
<h2>Places I'd Like to Visit</h2>
<ul>
    <?php
        $novisitadas = selectNoVisited();
    while($row=pg_fetch_row($novisitadas)){
        echo "<li> $row[1] </li>";
    }
    ?>
 
</ul>

<h2>Places I've Already Been To</h2>
<ul>
<?php
        $visitadas = selectVisited();
    while($row=pg_fetch_row($visitadas)){
        echo "<li> $row[1] </li>";
    }
    ?>
</ul>
</body>
</html>