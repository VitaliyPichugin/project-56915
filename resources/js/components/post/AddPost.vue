<template>
    <div class="container">
        <div v-bind:class="{ succmsg: succmsg }">
            <div class="col-md-12 col-lg-12">
                <div class="alert alert-success">Data inserted successfully</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 com-lg-7  offset-md-3">
                <form method = "post" name="addpost" id="addpost" action="#" enctype="multipart/form-data" @submit.prevent="addPost">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" v-model="post.title"/>
                        {{ post.title }}
                    </div>
                    <div class="form-group">
                        <label for="post_content">Body</label>
                        <textarea name="post_content" id="post_content" class="form-control" placeholder="Post Body" v-model="post.post_content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="email" v-model="post.email"/>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <select class="form-control" name="author" id="author" v-model="post.author">
                            <option value="moin">Mohammed Minuddin Chowdhury</option>
                            <option value="tanay">Tanay Dey</option>
                            <option value="nazmul">Nazmul</option>
                        </select>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>

    export default {

        data() {
            return {
                post: {
                    'title': '',
                    'post_content': '',
                    'email': '',
                    'author': ''
                },
                succmsg:  true,
            }
        },
        methods: {
            addPost() {
                this.$http.post('/api/posts',{
                    'title': this.post.title,
                    'post_content': this.post.post_content,
                    'email': this.post.email,
                    'author': this.post.author
                }).
                then((data) => {
                    this.succmsg = false;
                    console.log(data);
                    this.post.title = '';
                    this.post.post_content = '';
                    this.post.email = '';
                    this.post.author = '';
                    var self = this;
                    setTimeout(function(){
                        self.succmsg = true;
                    },3000);
                });
            }

        },
        computed: {
        }
    }
</script>
<style scoped>
    .succmsg {
        display: none;
    }
</style>
