<template>
    <div>
        <p class="text-right auth" @click="toogkeAuth">{{login == true ? "Registration" : "Login"}}</p>
        <div v-if="login">
            <login></login>
        </div>
        <div v-else="!login">
            <registration></registration>
        </div>
    </div>
</template>

<script>
    import registration from './Registration.vue';
    import login from './Login.vue';
    import toastr from 'toastr';
    export default {
        props: ['errors'],
        components: {
            registration,
            login
        },
        data() {
            return {
                login: true
            }
        },
        methods: {
            toogkeAuth: function () {
                if (!this.login)
                    this.login = true;
                else this.login = false;
            },
            checkErrors: function () {
                let errors = this.errors;
                if (errors[0]) {
                    errors.forEach(error => {
                        toastr.error(error);
                    });
                }
            }
        },
        mounted() {
            this.checkErrors();
        }
    }
</script>