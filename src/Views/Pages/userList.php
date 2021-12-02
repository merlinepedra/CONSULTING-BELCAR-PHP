

<?php

use PHPUnit\Util\Color;

require_once __DIR__ .'/../Layouts/Default.php';?>

<body>

    
    <section class='row justify-content-center'>
        
    <div class="card">
    <div class="card-header">
        <h2 class="d-flex justify-content-center" style="color:black">You are welcome!</h2>
        <a href="/?action=create" name="" id="" class="btn btn-primary" role="button">Schedule an appointment</a>

    </div>
    
    <div class="card-body">
       
<table class="table table-bordered">
    <thead>
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