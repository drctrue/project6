<form action="" method="post" name="php_form" class="login-form">
  <fieldset>
    <span class="form-ttl">Enter your Login & Password:</span>
    <div class="row">
      <label for="input01">Login:</label>
      <div class="input-holder">
        <input type="text" name="login" id="input01">
      </div>
    </div>
    <div class="row">
      <label for="input02">Password:</label>
      <div class="input-holder">
        <input type="password" name="password" id="input02">
      </div>
    </div>
    <div class="row">
      <label for="input03">Confirm password:</label>
      <div class="input-holder">
        <input type="password" name="password2" id="input03">
      </div>
    </div>
    <div class="row">
      <label for="input04">About:</label>
      <div class="input-holder">
        <textarea id="input04" name="about"></textarea>
      </div>
    </div>
    <div class="btn-holder">
      <button type="submit" name="submit" class="btn-submit">Sing up</button>
    </div>
  </fieldset>
</form>

<?php

  $login = $_POST['login'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $about = $_POST['about'];
  $submit = $_POST['submit'];

  if(isset($login) && isset($password) && isset($password2)) {
    $errors = [];

    if (preg_match('/\s/', $login)) {
      $errors[] = '<h1 style="color: red; font-size: large;" >' . 'Логин не может быть пустым или содержать пробелы.' . '</h1>';
    }
    if ($password != $password2) {
      $errors[] = '<h1 style="color: red; font-size: large;" >' . 'Пароли не совпадают.' . '</h1>';
    }
    if (strlen($login) < 4) {
      $errors[] = '<h1 style="color: red; font-size: large;" >' . 'Слишком короткий логин.' . '</h1>';
    }
    if (strlen($password) < 4) {
      $errors[] = '<h1 style="color: red; font-size: large;" >' . 'Слишком короткий пароль.' . '</h1>';
    }

    if (!empty($errors)) {
      foreach ($errors as $error) {
        echo $error . '</br>';
      }
    }
    else {
      echo '<h1 style="color: green; font-size: large;" >'. 'Success!' . '</h1>';
    }
  }






