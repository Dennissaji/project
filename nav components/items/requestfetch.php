<?php

 include 'config.php';

 $sql="SELECT * FROM `complaint` where `status`='pending' order by `date`;";
 $result = $conn->query($sql);
 if(mysqli_num_rows($result)==0)
 {
    echo"No Requests";
 }
 else
 {
 while($data=$result->fetch_assoc())
 {?>
 <tr>
     <td><?php echo $data['id'] ?></td>
     <td><?php echo $data['item'] ?> </td>
     <td><?php echo $data['category'] ?>  </td>
     <td><?php echo $data['desc'] ?>  </td>
     <td><?php echo $data['date'] ?>  </td>
     <td><?php echo $data['email'] ?>  </td>
     <td><?php echo $data['phone'] ?>  </td>
     <td><button id="approve" data-id = "<?php echo $data['id'] ?>"> Approve</button></td>
  </tr>
 <?php
  }}
 ?>
 


?>