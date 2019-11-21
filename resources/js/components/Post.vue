<template>
    <post-component></post-component>
</template>

<script>
    import AddPost from './post/AddPost.vue';
    import PostComponent from './post/PostComponent.vue';
    import toastr from 'toastr';
    export default {
        props: ['errors'],
        components: {
            AddPost,
            PostComponent
        },
        data: function () {
            return {}
        },
    }
</script>