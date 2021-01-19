<template>
  <div>
    <music-creator-component></music-creator-component>
    <music-list-component></music-list-component>
  </div>
</template>

<script>
import MusicCreatorComponent from "./MusicCreatorComponent";
import MusicListComponent from "./MusicListComponent";

export default {
  name: 'MusicAppComponent',
  components : {
    MusicCreatorComponent,
    MusicListComponent,
  }
}
</script>

<style>

</style>