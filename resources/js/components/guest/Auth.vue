<template>
    <div>
        <button class="btn btn-info" @click="toogkeAuth">Toogel</button>
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
    export default {
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
        },
        mounted() {
            console.log('Auth mounted.')
        }
    }
</script>