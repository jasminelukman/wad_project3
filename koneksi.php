<?php
    $conn = mysqli_connect("127.0.0.1","root","","wad_project3");

    // insert
    // get data from form
    //letakkan di var
    // create query
    //execute
    
    // $result = mysqli_query($conn,"SELECT*FROM students");
    $result = mysqli_query($conn,"SELECT*FROM students where id = 0");

    // $data = null;
    // while (mysqli_fetch_object($result)) {
    //    $data[] = $return;
    // }
    var_dump(mysqli_fetch_object($result));
?>