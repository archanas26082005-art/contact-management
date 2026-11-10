<?php
include 'db.php';
$result = $conn->query("SELECT * FROM contacts ORDER BY id ASC");
?>
<!DOCTYPE html>
<html>
<head><title>Contact Management</title><link rel="stylesheet" href="style.css"></head>
<body>
<h2>Contact Management System</h2>
<a href="add.php"><button style="background:green;color:white;padding:10px;">+ Add Contact</button></a><br><br>
<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <tr style="background:#333;color:white;">
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    <?php 
    $no=1;
    while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>