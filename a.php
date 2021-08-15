<?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
 echo'<div class="container">
<h1 class="py-2">Post a comment</h1>
<form action="'. $_SERVER["REQUEST_URI"] . '" method="POST">
    
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Type your comment</label>
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Post Comment</button>
</form>

</div>';
 }
else{
    echo ' <p class="lead" >You are not loggedin Please Login to Continue!!</p> ';
    }


?>