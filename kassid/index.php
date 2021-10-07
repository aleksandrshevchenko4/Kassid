<?php
$kass=simplexml_load_file("kassid.xml");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kassid</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Nimi</th>
        <th>Synniaasta</th>
    </tr>
    <?php
    foreach ($kass->xpath("//kass") as $kaas){
        echo "<tr>";
        echo "<td>". ($kaas->nimi) . "</td>";
        echo "<td>". ($kaas->synniaasta) . "</td>";
        echo "</tr>";
    }
    ?>
</table>
<br><br>
<table>
    <ul>
        <?php
        foreach ($kass->xpath("//kass") as $kaas){
            if (substr(strtolower($kaas->nimi),0,1)=="a"){
                echo "<li>".($kaas->nimi)."</li>";
            }
        }
        ?>
    </ul>
</table>
<br><br>
<table border="1">
    <tr>
        <th>Nimi</th>
        <th>Synniaasta</th>
    </tr>
    <?php
    foreach ($kass->xpath("//kass") as $kaas){
        echo "<tr>";
        if (substr(strtolower($kaas->synniaasta),2,4)=="10"){
            echo "<td>".($kaas->nimi)."</td>";
            echo "<td>". ($kaas->synniaasta) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<br><br>
</body>
</html>