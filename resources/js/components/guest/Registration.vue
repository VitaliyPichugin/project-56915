<template>
    <div>
        <form method="POST" id="login-form" class="login-form active error" action="/register">
            <input type="hidden" name="_token" :value="csrf"/>
            <label>User Registration</label>
            <input id="name"
                   type="text"
                   class="input username"
                   name="name"
                   value=""
                   placeholder="Name"
                   required autocomplete="name"
                   width="100%"
                   autofocus
            >
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
            <input id="password-confirm"
                   width="100%"
                   type="password"
                   size="20"
                   class="input password"
                   name="password_confirmation"
                   required autocomplete="new-password"
                   placeholder="Confirm Password"
            >
            <input type="submit" class="button" name="submit" id="submit" value="Register" tabindex="4" />
        </form>
    </div>
</template>

<script>
    export default {
        props: ['method'],
        mounted() {
            console.log('Reg mounted.')
        },
        data(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }
    }
</script>