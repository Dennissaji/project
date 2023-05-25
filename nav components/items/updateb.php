<?php
include 'config.php';
$sql="SELECT * FROM `items`";
$result=$conn->query($sql);
while($data=$result->fetch_assoc())
{ $id=$data['id'];?>
<tr>
    <td><?php echo $data['id'] ?> </td>
    <td><?php echo $data['product name'] ?>  </td>
    <td><?php echo $data['serial no'] ?>  </td>
    <td><?php echo $data['product code'] ?>  </td>
    <td><?php echo $data['location'] ?>  </td>
    <td><?php echo $data['category'] ?> </td>
    <td><?php echo $data['count'] ?>  </td>
    <td><?php echo $data['price'] ?>  </td>
    <td><?php echo $data['date of purchase'] ?>  </td>
    <td><?php echo $data['warranty period'] ?>  </td>
    <td><?php echo $data['seller details'] ?>  </td>
    <td><?php echo $data['specs'] ?> </td>
    <td><a href='updateform.php?id=<?php echo "$id" ?>' class="edit">Edit </a></td>
    <td><button class='delete-btn' data-id='<?php echo "$id"; ?>' class="delete">Delete </button></td>

</tr>
<?php } ?>