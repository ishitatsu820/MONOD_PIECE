<template>
  <div>
    <div class="form-group row">
      <label for="title" class="col-md-4 col-form-label text-md-right">曲名</label>
      <div class="col-md-6 mb-3">
        <input type="text" class="form-control" name="title" id="title" value="" autocomplete="title" autofocus v-model="postMusicTitle">
      </div>
      
      <label for="artist" class="col-md-4 col-form-label text-md-right">アーティスト名</label>
      <div class="col-md-6 mb-3">
        <input type="text" class="form-control" name="artist" id="artist" value="" autocomplete="artist" autofocus v-model="postMusicArtist">
      </div>

      <label for="lyric" class="col-md-4 col-form-label text-md-right">歌詞</label>
      <div class="col-md-6 mb-3">
        <textarea name="lyric" id="lyric" cols="30" rows="10" class="form-control" autofocus v-model="postMusicLyric"></textarea>
      </div>
      
    </div>
    <div class="form-group row mb-5">
      <div class="col-md-8 offset-md-4">
        <button class="btn btn-primary" @click="createMusic">新規登録</button>
      </div>
    </div>
    <div class="list-group">
      <a :href="'/music/' + music.id" class="list-group-item list-group-item-action" v-for="music in musics" :key="music.id">
          <div class="d-flex w-100 flex-column">
            <div class="mb-1 font-weight-bold">{{ music.title }}</div>
            <small>　-{{ music.artist }}</small>
          </div>
      </a>
    </div>
  </div>
</template>

<script>
import Axios from 'axios';


export default {
  name: 'MusicAppComponent',
  data: function() {
    return {
      musics: [
        {
          id:"",
          title:"",
          artist:"",
          lyric:"",
          user_id:"",
          created_at:"",
          updated_at:""
        },
      ],
      postMusicTitle:"",
      postMusicArtist:"",
      postMusicLyric:""
      
    }
  },
  created() {
    this.getMusicList();
    console.log('created');
  },
  methods: {
    getMusicList() {
      let self = this;
      Axios.get('/music/list')
        
      //   this.musics.id = res.data.id;
      //   this.musics.title = res.data.title;
      //   this.musics.artist = res.data.artist;
      //   this.musics.lyric = res.data.lyric;
      
      .then(function (response) {
        // handle success
        let data = response.data;
        
        self.musics = data;
        console.log(response);
        // this.$set(this.musics, 'data[0].title', response.data[1].title)

      })      
      .catch(function(error){
        console.log(error);
      })
    },
    createMusic() {
      let postData = {
        'title': this.postMusicTitle,
        'artist': this.postMusicArtist,
        'lyric': this.postMusicLyric,
      };
      Axios.post('/music/create',postData)
      .then(
        console.log('新規データPOSTしました！')
      )     
      .catch(error => {
          console.log(error);
      });
      this.postMusicArtist = '',
      this.postMusicTitle = '',
      this.postMusicLyric = '',
      this.getMusicList();
    },
    deleteMusic(){
      axios.post('muisc/delete', data)
      .then(
        console.log('削除データPOSTしました！')
  
      )
      .catch(error => {
        console.log(error);
      })
    }
  }
}
</script>

<style lang="scss" scoped>
  .icon {
    height: 30px;
    width: 30px;
    &-trash {
      stroke: red;
    }
    
  }
</style>

