<body>

<h1>Login Sistem</h1>

<div class="kotak_login">

<p class="tulisan_login">Silahkan login</p>

<form action="<?php echo URL; ?>/login/proses" method="post">
     <table>
          <tr>
               <td>Username</td>
               <td><input type="email" name="email" placeholder="Email" class="form_login" required></td>
          </tr>
          <tr>
               <td>Password</td>
               <td><input type="password" name="password" placeholder="Password" class="form_login" required></td>
          </tr>
          <tr>
               <td></td>
               <td><input type="submit" name="submit" value="Login" class="tombol_login"></td>
          </tr>
     </table>
</form>
</body>

<div>

<?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
     <div class="error">
          Login tidak di temukan
     </div>
<?php } ?>