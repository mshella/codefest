<div id="login">
   <div class="title">
      <h2>
         MHA
         <br>
         <strong>Menstruation Health Application</strong>
      </h2>
   </div>
   <form method="post">
      <div class="row">
         <div class="span-12">
            <input type="text" name="username" placeholder="Email / Username" value="<?php echo @$entry['username'] ?>">
         </div>
         <div class="span-12">
            <input type="password" name="password" placeholder="Password">
         </div>
         <div class="span-12">
            <label class="placeholder">
            <input type="checkbox" class="checkbox">
               Keep me sign in
            </label>
         </div>
         <div class="span-12">
            <input type="submit" value="Sign In"></input>
         </div>
      </div>
   </form>
</div>