/* eslint-disable no-console */
<template>
  <div class="list-group">
      <music-component 
        v-for="music in musics" 
        :key="music.id"
        :id="music.id"
        :title="music.title"
        ></music-component>
  </div>
</template>

<script>
import Axios from 'axios';
import MusicComponent from "./MusicComponent";

export default {
  name: 'MisicListComponent',
  components: {
    MusicComponent
  },
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
    }

  }
}
</script>

<style>

</style>