 <!-- accesing post data  -->
<?php
 $email = $_POST['email_address'];
 $password = $_POST['password'];

 $result = validate_credentials($email, $password);
 if($result){
?>
  <h1>Login is successfull</h1>
<?php } else { ?>

<main class="form-signin">
  <form method="post" action="signin.php">

    <div class="text-center"> 
      <img class="mb-4" src="../../photogram/assets/brand/photogram-logo.png" alt="" width="100" height="100" >
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    </div>

    <div class="form-floating">
      <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

  </form>
</main>

<?php } ?>
