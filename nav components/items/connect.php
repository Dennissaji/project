<?php

$host="localhost:3325";
$username="root";
$password="dennis";
$database="mini project";

$conn=mysqli_connect($host,$username,$password,$database);
$sql="select * from `users`";
$result=$conn->query($sql);


while($data=$result->fetch_assoc())
{?>
<tr>
    <td><?php echo $data['email'] ?> </td>
    <td><?php echo $data['username'] ?>  </td>
    <td><?php echo $data['designation'] ?>  </td>
    <td><?php echo $data['role'] ?>  </td>
    <td><?php echo $data['phone'] ?>  </td>

</tr>
<?php } ?>

