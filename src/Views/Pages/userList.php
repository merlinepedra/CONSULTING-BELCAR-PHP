

<?php

use PHPUnit\Util\Color;

require_once __DIR__ .'/../Layouts/Default.php';?>

<body>

    
    <section class='row justify-content-center'>
        
    <div class="card">
    <div class="card-header">
        <h2 class="d-flex justify-content-center" style="color:black">You are welcome!</h2>
        <a href="/?action=create" name="" id="" class="btn btn-primary" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 18 18">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>Schedule an appointment</a>

    </div>
    
    <div class="card-body">
       
<table id="table-general" class="table table-bordered">
    <img class="disk" src="./../../../image/disk.png" alt="">
    <thead class="table-header">
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Name</th>
            <th>Issue</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>    
        <?php
            foreach ($data["users"] as $user) {
                echo "
                <tr>
                <td>{$user->id}</td>
                <td>{$user->date}</td>
                <td>{$user->name}</td>
                <td>{$user->issue}</td>
                <td>               
                    <a href='/?action=edit&id={$user->id}'style='color: coral'><i class='lnr lnr-pencil'></i></a>
                    <a href='/?action=delete&id={$user->id}'style='color: green'><i class='lnr lnr-trash'></i></a>
                </td>
                </tr>    
                    ";
            }
        ?>
    </tbody>
</table>
    </div>
</section>

</body>

</html>