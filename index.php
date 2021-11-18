<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Consulting</title>
</head>

<body>
    <h1>THE CODERS OFFICE</h1>
    <section class='row justify-content-center'>
        
    <div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" role="button">Add Wathever</a>

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
        require_once 'User.php';
        $users = (new User())->all();

foreach ($users as $user) {
 echo "
<tr>
<td>{$user->id}</td>
<td>{$user->date}</td>
<td>{$user->name}</td>
<td>{$user->issue}</td>
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