<?php 
require_once('../../private/initialize.php');

$sql =" DELETE FROM TABLE"
$contacts = where id =2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    
<h1>Read all contacts</h1>


<table class="table table-striped table-bordered table-hover table-condensed text-center">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>phone number</th>
        <th>address</th>
        <th>city</th>
        <th>state</th>
        <th>design</th>
        <th>time</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>

    <?php while($contact = mysqli_fetch_assoc($contacts)) {?>
    <tr>
        <td><?php echo $contact['id']?></td>
        <td><?php echo $contact['name']?></td>
        <td><?php echo $contact['email']?></td>
        <td><?php echo $contact['phone_number']?></td>
        <td><?php echo $contact['address']?></td>
        <td><?php echo $contact['city']?></td>
        <td><?php echo $contact['state']?></td>
        <td><?php echo $contact['design']?></td>
        <td><?php echo $contact['time']?></td>

        <td><a class="action" href="<?php echo './show_contact.php?id=' . $contact['id'] ;?>">CLICK TO VIEW</a></td>
        <td>Update</td>
        <td>Delete</td>


    </tr>

    <?php }?>
</table>

</body>
</html>