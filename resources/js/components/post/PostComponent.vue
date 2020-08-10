<template>
    <div id="postsrec" >
        <!-- Modals -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" v-bind:class="{ showmodal:showmodal }">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method = "post" name="addpost" id="addpost" action="#" @submit.prevent="updatePost">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Title" v-model="post.title" />
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
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <p>Are you sure want to delete the record? </p>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success" v-on:click="hideModal()">Cancel</button>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success" v-on:click="deletePost()">Ok</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Modals -->
        <v-simple-table style="margin: 10px 10px 0 10px">
            <template v-slot:default>
                <thead>
                <tr>
                    <th class="text-left">Title</th>
                    <th class="text-left">Body</th>
                    <th class="text-left">Eamil</th>
                    <th class="text-left">Author</th>
                    <th class="text-left">Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="post in laravelData.data" :key="post.id">
                    <th >{{ post.title }}</th>
                    <td>{{ post.post_content.slice(0,50) + "....." }}</td>
                    <td>{{ post.email }}</td>
                    <td>{{ post.author }}</td>
                    <td><a href="#" v-on:click="editPost(post.id)" data-target="#exampleModal"  data-toggle="modal" v-bind:title="post.title">Edit</a></td>
                    <td><a href="#" data-target="#exampleModal2" v-on:click="deleteId(post.id)"  data-toggle="modal" v-bind:id="id"  >Delete</a></td>
                </tr>
                </tbody>
            </template>
        </v-simple-table>
        <v-pagination
            v-model="pagination.current"
            :length="pagination.length"
            :total-visible="7"
            @input="postLists"
        ></v-pagination>
    </div>
</template>
<script>
    export default {
    data() {
        return {
            post: {
                "title": '',
                "post_content": '',
                "author": '',
                "email": '',
            },
            laravelData: {},
            id: '',
            succmsg:  true,
            showmodal: false,
            actionmsg: '',

            pagination: {
                current: 1,
                total: 0,
                per_page: 0,
                length: 0,
            }
        }
    },
    methods: {
        postLists(page) {
            if (typeof page === 'undefined') {
                page = 1;
            }
            this.$http.get('/api/posts?page='+ page).then((response) => {
                this.laravelData = response.data;
                this.pagination.current = page;
                this.pagination.total = this.laravelData.meta.total;
                this.pagination.per_page = this.laravelData.meta.per_page;
                this.pagination.length = Math.ceil(this.pagination.total/this.pagination.per_page);
            });
        },
        editPost(postid) {
            this.$http.get('/api/posts/'+ postid).
            then((data) => {
                this.post.title = data.data.data.title;
                this.post.post_content = data.data.data.post_content;
                this.post.email = data.data.data.email;
                this.post.author = data.data.data.author;
                this.id = postid;
            });
        },
        updatePost() {
            this.$http.put('/api/posts/'+this.id,{
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
                this.actionmsg = "Data updated successfully";
                $('#exampleModal').modal('hide');
                this.postLists(this.pagination.current);

            });
        },
        deleteId(postid) {
            this.id = postid;
        },
        deletePost() {
            this.$http.delete('/api/posts/'+this.id).
            then((data) => {
                this.succmsg = false;
                var self = this;
                setTimeout(function(){
                    self.succmsg = true;
                },3000);
                this.actionmsg = "Data deleted successfully";
                this.postLists(this.pagination.current);
                $('#exampleModal2').modal('hide');
            });
        },
        hideModal() {
            $('#exampleModal2').modal('hide');
        }
    },
    mounted() {
        this.postLists();
    }
}
</script>
<style scoped>
    .succmsg {
        display: none;
    }
    .showmodal {
        display: none !important;
        opacity: 0;
    }
</style>
