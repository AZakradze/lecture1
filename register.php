<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$bio = $_POST['bio'];
$bdate = $_POST['birth'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registered</title>
</head>
<body>

<h1>Your info</h1>

<table>
  <tr>
    <th>name</th>
    <th>surname</th>
    <th>address</th>
    <th>bio</th>
    <th>bdate</th>
  </tr>
  <tr>
    <td><?php  echo $name ?></td>
    <td><?php  echo $surname ?></td>
    <td><?php  echo $address ?></td>
    <td><?php  echo $bio ?></td>
    <td><?php  echo $bdate ?></td>
  </tr>
</table>

</body>
</html>