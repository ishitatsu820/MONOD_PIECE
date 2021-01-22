<template>
  <div>
    <p>コメントです</p>
    <div class="form-group row">
      <label for="comment" class="col-md-4 col-form-label text-md-right">コメント</label>
      <div class="col-md-6 mb-3">
        <input type="text" class="form-control" name="comment" id="comment" value="" autocomplete="comment" autofocus v-model="postComment">
      </div>
    </div>
    <div class="form-group row mb-5">
      <div class="col-md-8 offset-md-4">
        <button class="btn btn-primary" @click="createComment">コメント登録</button>
      </div>
    </div>
    <div class="list-group">
      <div class="list-group-item list-group-item-action flex-colum align-items-start" v-for="comment in comments" :key="comment.id">
        <div class="d-flex w-100 justify-content-between">
          <h4 class="mb-1">{{ comments.title }}</h4>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Axios from 'axios';
export default {
  name: 'CommentComponent',
  data: function() {
    return {
      postComment:"",
      comments: [
        {
          id:'',
          comment:''
        }
      ]
    }
  },
  created() {

  },
  methods: {
    getComment(){
      let self = this;
      Axios.get('comment/list')
      .then(function(response){
        console.log(response);
      })
      .catch(error => {
          console.log(error);
      });
    },

    createComment(){
      let postData = {
        'comment': this.postComment,
      };
      Axios.post('comment.create', postComment)
      .then(
       console.log('新規コメントPOSTしました！')
      )
      .catch(error => {
            console.log(error);
      });
      this.postComment = ''
      }
  }
}
</script>

<style>

</style>