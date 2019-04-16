<form action="{{ route('login') }}" method="POST" class="enter-form">
    {{ csrf_field() }}
    <h2>Личный кабинет</h2>
    <p class="enter-form-text">Введите пожалуйста свой логин и пароль</p>
    <a class="enter-form-forgot" href="#">Если вы забыли пароль</a>
    <p class="login"><!--[if IE 9]>Email<![endif]--><input type="email" id="enter-1" name="email" placeholder="Логин" value="{{ old('email') }}">
        @if ($errors->has('email'))
            <span class="help-block">
      <strong>{{ $errors->first('email') }}</strong>
              </span>
        @endif
    </p>
    <p class="pass"><!--[if IE 9]>Пароль<![endif]--><input type="password" id="enter-2" name="password" placeholder="Пароль">
        @if ($errors->has('password'))
            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif
    </p>
    <p class="remember"><input type="checkbox" id="enter-3" name="enter-remember" {{ old('remember') ? 'checked' : '' }}><label for="enter-3">Запомните меня</label>
        <a class="forgot-pass" href="#">Я забыл пароль!</a></p>
    <input type="submit" id="enter-4" name="enter-submit" class="btn" value="Войти">
    <!--[if IE 9]><p>*Обязательные для заполнения поля</p><![endif]-->
    <a class="close" href="#"></a>
</form>


