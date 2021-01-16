<template>
  <div>
    <div class="form-group row">
      <label for="title" class="col-md-4 col-form-label text-md-right">曲名</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="title" id="title" value="" autocomplete="title" autofocus v-model="title">
      </div>
      
      <label for="artist" class="col-md-4 col-form-label text-md-right">アーティスト名</label>
      <div class="col-md-6">
        <input type="text" class="form-control" name="artist" id="artist" value="" autocomplete="artist" autofocus v-model="artist">
      </div>

      <label for="lyric" class="col-md-4 col-form-label text-md-right">歌詞</label>
      <div class="col-md-6">
        <textarea name="lyric" id="lyric" cols="30" rows="10" class="form-control" autofocus v-model="lyric"></textarea>
      </div>
      
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
          <button type="submit" class="btn btn-primary">新規登録</button>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  name: 'MusicCreatorComponent',
  data: function() {
    return {
      title: '',
      artist: '',
      lyric: '',
    }
  },
  methods: {
    
  },
}
</script>
 