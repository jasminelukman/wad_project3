<?php
    $conn = mysqli_connect("127.0.0.1","root","","wad_project3");

    $result = mysqli_query($conn,"SELECT*FROM students");

    // var_dump(mysqli_fetch_object($result));
    // $data = (mysqli_fetch_object($result));
    // var_dump($data->name);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Index</title>
    <h1 class = "text-center">Tabel Students</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">NIM</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>

    <?php while( $data = mysqli_fetch_object($result) ) {?>
        <tr>
            <th scope="row"><?php echo $data->id?></th>
            <td><?php echo $data->name?></td>
            <td><?php echo $data->nim?></td>s
            <td><?php echo $data->address?></td>
        </tr>
        <?php }?>

  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>