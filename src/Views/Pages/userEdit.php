<?php

require_once __DIR__ .'/../Layouts/Default.php';?>

<div class="card">
    <div id="edicion"  class="card-header">
        Edit appointment
    </div>
    <div class="card-body">
        
    <form action="/?action=update" method="post">
    
      <div class="mb-3 d-none">
            <input required type="text"
              class="form-control" value="<?php echo $data["user"]->id ?>" name="id" id="id">
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input required type="text"
              class="form-control" value="<?php echo $data["user"]->name ?> " name="name" id="name" aria-describedby="helpId" placeholder="Coder name">
            
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Issue</label>
            <input required type="text"
              class="form-control" value="<?php echo $data["user"]->issue ?> " name="issue" id="issue" aria-describedby="issueHelpId" placeholder="How can we help you? ">
            
          </div>

          <input name="" id="" class="btn btn-success" type="submit" value="Edit">

          <a href="/" class="btn btn-primary">Cancel</a>
        </form>
    </div>
    
</div>