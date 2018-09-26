<form action="" method="post" name="signup_form" class="login-form" onsubmit="return validateForm()">
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
        <textarea id="input04"></textarea>
      </div>
    </div>
    <div class="btn-holder">
      <button type="submit" class="btn-submit">Sing up</button>
    </div>
    <p id="alert" style="color: red;"></p>
  </fieldset>
</form>

<script type="text/javascript">
  function validateForm() {
    var login = document.forms['signup_form']['login'].value;
    var password = document.forms['signup_form']['password'].value;
    var password2 = document.forms['signup_form']['password2'].value;
    var alerts = document.getElementById('alert');
    var errors = [];
    if(login.indexOf(' ') > 0) {
      errors.push('Логин не должен содержать пробелы.');
    }
    if(login.length < 4) {
      errors.push('Логин не должен быть короче 4х символов.');
    }
    if(password.length < 4) {
      errors.push('Пароль не должен быть короче 4х символов.');
    }
    if(password !== password2) {
      errors.push('Пароли не совпадают.');
    }
    if(errors.length > 0) {
      alerts.innerHTML = '';
      errors.forEach(function (error) {
          alerts.innerHTML = alerts.innerHTML + error + '<br/>';
      });
      return false;
    }
  }
</script>