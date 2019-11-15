<template>
    <div>
        <form method="POST" id="login-form" class="login-form active error" action="/login">
            <input type="hidden" name="_token" :value="csrf"/>
            <label>User Login</label>
            <input id="email"
                   width="100%"
                   type="text"
                   size="20"
                   class="input username"
                   name="email" value=""
                   required autocomplete="email"
                   placeholder="Email"
                   autofocus
            >
            <input id="password"
                   width="100%"
                   type="password"
                   size="20"
                   class="input password"
                   name="password"
                   required autocomplete="current-password"
                   placeholder="Password"
            >
            <input type="submit" class="button" name="submit" id="submit" value="Login" tabindex="4" />
        </form>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Login mounted.')
        },
        data(){
          return {
              csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          }
        }
    }
</script>