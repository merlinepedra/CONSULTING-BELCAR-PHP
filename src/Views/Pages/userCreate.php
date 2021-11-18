<?php
require_once __DIR__ .'/../Layouts/Default.php'; ?>


<div class="card">
    <div class="card-header">
        Create appointment
    </div>
    <div class="card-body">
        
        <form action="" method="post">

        <div class="mb-3">
          <label for="nombre" class="form-label">Name</label>
          <input required type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Coder name">
          
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Issue</label>
          <input required type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="How can we help you? ">
          
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Send">

        <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancel</a>
        </form>
    </div>
    
</div>