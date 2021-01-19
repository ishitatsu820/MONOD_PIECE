<template>
  <music-app-component></music-app-component>
</template>

<script>
import ExampleComponent from "./components/ExampleComponent";
import MusicAppComponent from "./components/MusicAppComponent";
import axios from "axios";

export default {
  name: "app",
  components: {
    MusicAppComponent
  }
}
</script>
