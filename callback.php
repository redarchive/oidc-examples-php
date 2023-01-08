<?php

  $id_token = $_GET['id_token'];
  $payload = base64_decode(explode(".", $id_token)[1]);
  $parsed = json_decode($payload, true);
  
?>

<table>
  <tr>
    <th>이름</th>
    <td><?php echo $parsed['data']['fullname'] ?></td>
  </tr>
  <tr>
    <th>학년</th>
    <td><?php echo $parsed['data']['classInfo']['grade'] ?></td>
  </tr>
  <tr>
    <th>반</th>
    <td><?php echo $parsed['data']['classInfo']['class'] ?></td>
  </tr>
  <tr>
    <th>번호</th>
    <td><?php echo $parsed['data']['classInfo']['number'] ?></td>
  </tr>
</table>

<code>
  <?php echo $payload ?>
</code>
