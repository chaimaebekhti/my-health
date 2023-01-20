


<div class="container">
              
  <div class="row" style="margin: 50px;">
      
    <div class="col m-4" >

       <img src="th (1).jpg">
   </div>

<div class="col m-4">
   <?php if(!$SessionManager->isSignout()): ?>
 <p class="text"> Please enter your email! </p>   

<div class="col m-4"> 
<div class="card">	
<form method="POST" action="action.php?page=confirmation" >	
<div class="mb-3" style="margin:30px;">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3" style="margin: 25px;">
  <label for="exampleFormControlTextarea1" class="form-label">confirmation number</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
<button type="button" class="btn btn-danger" href="index.php?page=confirmation" style="background-color: #d63384; margin-top: 20px;">confirmation</button>
</form>
<?php else: ?>
  Confirmation completed successfully.
  <br>
  <a href="action.php?page=login" class= "btn btn-primary"style="margin-top: 25px;">login</a>
<?php endif ; ?>  

</div>
</div>

</div>


</div>
</div>

















































































