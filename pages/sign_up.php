<form action="" method="post" name="signup_form" class="login-form" onsubmit="return validateForm()">
  <fieldset>
    <span class="form-ttl">Enter your Login & Password:</span>
    <div class="row">
      <label for="input01">Login:</label>
      <div class="input-holder">
        <input type="text" name="login" id="input01">
      </div>
    </div>
    <p id="alert1"></p>
    <div class="row">
      <label for="input02">Password:</label>
      <div class="input-holder">
        <input type="password" name="password" id="input02">
      </div>
    </div>
    <p id="alert2"></p>
    <div class="row">
      <label for="input03">Confirm password:</label>
      <div class="input-holder">
        <input type="password" name="password2" id="input03">
      </div>
    </div>
    <div class="row">
      <label for="input04">About:</label>
      <div class="input-holder">
        <textarea id="input04"></textarea>
      </div>
    </div>
    <div class="btn-holder">
      <button type="submit" class="btn-submit">Sing up</button>
    </div>
  </fieldset>
</form>

<script type="text/javascript">
  function validateForm() {
    var login = document.forms['signup_form']['login'].value;
    var password = document.forms['signup_form']['password'].value;
    var password2 = document.forms['signup_form']['password2'].value;
    if(login.indexOf(' ') > 0) {
      document.getElementById('alert1').innerText = 'Логин не должен содержать пробелы.';
      // return false;
    }
    if(login.length < 4) {
      document.getElementById('alert1').innerText = 'Логин не должен быть короче 4х символов.';
      // return false;
    }
    if(password.length < 4) {
      document.getElementById('alert2').innerText = 'Пароль не должен быть короче 4х символов.';
      // return false;
    }
    if(password !== password2) {
      document.getElementById('alert2').innerText = 'Пароли не совпадают.';
      // return false;
    }
  }
</script>