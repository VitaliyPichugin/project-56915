<template>
    <v-app id="inspire">
        <v-navigation-drawer v-model="drawer" app clipped>
            <v-list dense>
                <div v-for="route in routes">
                    <router-link tag="span" :to="route.url" >
                        <v-list-item @click="">
                            <v-list-item-action>
                                <v-icon>{{route.icon}}</v-icon>
                            </v-list-item-action>
                            <v-list-item-content>
                                <v-list-item-title>{{route.name}}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </router-link>
                </div>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app clipped-left>
            <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>

        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex >
                       <router-view></router-view>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>

        <v-footer app >
            <span class="text-lg-center" >&copy; 2019</span>
        </v-footer>
    </v-app>
</template>

<script>
    export default {
        props: {
            source: String,
        },
        data: () => ({
            drawer: true,
            drawerRight: null,
            right: false,
            left: false,
            routes: [
                 {
                    name: 'Home',
                    url: '/',
                    icon: 'home',
                },
                {
                    name: 'About',
                    url: '/about',
                    icon: 'info',
                },
                {
                    name: 'Setting',
                    url: '/setting',
                    icon: 'settings',
                },
            ],
        }),
    }
</script>