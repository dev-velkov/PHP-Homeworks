<?php
$name = "Gosho";
$phone = "0882-321-423";
$age = "24";
$address = "Hadji Dimitar";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table{
            border: 2px solid black;
        }
        .static{
            text-align: left;
            padding: 5px;
        }
        .info{
            text-align: right;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
    <tbody>
    <tr>
        <td class="static">Name:</td>
        <td class="info"><?php echo $name; ?></td>
    </tr>
    <tr>
        <td class="static">Phone number:</td>
        <td class="info"><?php echo $phone; ?></td>
    </tr>
    <tr>
        <td class="static">Age:</td>
        <td class="info"><?php echo $age; ?></td>
    </tr>
    <tr>
        <td class="static">Address:</td>
        <td class="info"><?php echo $address; ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>