<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

  <title>Record Table</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f0f2f5;
      min-height: 100vh;
    }
    table {
      border-collapse: collapse;
      width: 80%;
      max-width: 800px;
      background: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }
    thead {
      background-color: #007bff;
      color: white;
    }
    thead th {
      padding: 1rem;
      text-align: left;
      font-size: 1.1rem;
    }
    tbody tr {
      border-bottom: 1px solid #ddd;
    }
    tbody tr:hover {
      background-color: #f9f9f9;
    }
    tbody td {
      padding: 0.8rem;
      font-size: 1rem;
      color: #333;
    }
    tbody tr:last-child {
      border-bottom: none;
    }
    .id-column {
      text-align: center;
      font-weight: bold;
      color: #007bff;
    }
    .email-column {
      color: #555;
    }
    .password-column {
      font-style: italic;
      color: #888;
    }
    .add-btn{
      position: absolute;
      top: 10px;
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <a href="form.php" class="add-btn">Add New</a>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

    <?php
    include 'db.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn , $sql);

    while ($row = mysqli_fetch_assoc($result)){
        ?>
<tr>
        <td class="id-column"><?php echo $row['id']; ?></td>
        <td class="email-column"> <?php echo $row['email'] ?> </td>
        <td class="password-column"><?php echo $row['password'] ?></td>
        <td>
           <a href="edit.php?userid=<?php echo $row['id']?>"><i class="fa-solid fa-pen-to-square fs-5 me-3" style="color:rgb(0, 255, 34);"></i></a> &nbsp;&nbsp;
          <a href="delete.php?userid=<?php echo $row['id']?>"><i class="fa-solid fa-trash fs-5" style="color:rgb(255, 0, 0);"></i></a>
        </td>
      </tr>
      
<?php

    }?>

    

      
    </tbody>
  </table>
</body>
</html>
