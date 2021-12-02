<?php
require_once __DIR__ .'/../Layouts/Default.php'; ?>


<div class="card">
    <div class="card-header">
        Create appointment
    </div>
    <div class="card-body">
        
        <form action="/?action=save" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input required type="text"
              class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Coder name">
            
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Issue</label>
            <input required type="text"
              class="form-control" name="issue" id="issue" aria-describedby="issueHelpId" placeholder="How can we help you? ">
            
          </div>

          <input name="" id="" class="btn btn-success" type="submit" value="Send">

          <a href="/" class="btn btn-primary">Cancel</a>
        </form>
    </div>
    
</div>