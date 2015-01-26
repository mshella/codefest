<div>
   <h2>Login</h2>
   <form method="post" role="form">
      <div class="form-group">
         <input type="text" name="username" placeholder="Email / Username" value="<?php echo @$entry['username'] ?>">
      </div>
      <div class="form-group">
         <input type="password" name="password" placeholder="Password">
      </div>
       <div class="checkbox">
         <label class="placeholder">
            <input type="checkbox" class="checkbox">
            Keep me sign in
         </label>
      </div>
      <p>
         <input type="submit" value="Sign In" class="btn btn-primary"></input>
      </p>
   </form>
</div>
