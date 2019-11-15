<form method="POST" id="login-form" class="login-form active error" action="{{ route('login') }}">
    @csrf
    <label>User Login</label>
        <input id="email"
               width="100%"
               type="text"
               size="20"
               class="input username @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}"
               required autocomplete="email"
               placeholder="Email"
               autofocus
        >
        <input id="password"
               width="100%"
               type="password"
               size="20"
               class="@error('password') is-invalid @enderror input password"
               name="password"
               required autocomplete="current-password"
               placeholder="Password"
        >
    <input type="submit" class="button" name="submit" id="submit" value="{{ __('Login') }}" tabindex="4" />
</form>
