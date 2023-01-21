
    <div class="container">
              
    <div class="row" style="margin-bottom: 200px; margin-top: 30px;">
    <div class="col m-8" style="margin-top: 50px;" >

     <div class="card">
     <div class="card-body">

    <?php 
      if(!isset($_SESSION['id'])): ?>
      <form method="POST" action="action.php?page=confirmation">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
      <label for="exampleInputNumber" class="form-label">confirmation number</label>
      <input type="number" class="form-control" id="exampleInputNumber" name="confirmation">
      <div style="margin-top : 25px;" >
      <button type="submit" class="btn btn-denger" style="background-color: #d821aa";>Submit</button>
      </div>
     </form>

     <?php else: ?>
  The confirmation process has been completed successfully.
<br>
<a href= "action.php?page=Exit" class="btn btn-primary" style="margin: 25px;">Logout</a>
<?php endif ; ?>


   </div>
 </div>
</div>


 <div class="col m-8">
 <img src="th (2).jpg" class="rounded float-end" alt="..."> 
</div>


</div>
</div>
</div>
