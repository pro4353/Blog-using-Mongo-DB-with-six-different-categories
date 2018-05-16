<?php
require 'vendor/autoload.php';
include_once("config.php");
include_once("library.php");
$result = $db->novels->find(
[],
[
$sort=array(['_id' => -1]),
]);
?>
<html>
<head>Novels Posts</head>
<body>
<table width='80%' border=0>
 
    <tr bgcolor='#CCCCCC'>
        <td>Posted By</td>
        <td>Posts</td>
        
    </tr>
    <?php     
    foreach ($result as $res) {
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['message']."</td>";
        
		}
    ?>
    </table>
		<form action="index.php" method="post">

		<button type="submit" name="add">Go Home!</button>
	</form>
</body>
</html>