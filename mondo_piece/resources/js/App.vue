<template>
  <music-component></music-component>
</template>

<script>
import ExampleComponent from "./components/ExampleComponent";
import MusicComponent from "./components/MusicComponent";
import axios from "axios";

export default {
  name: "app",
  components: {
    ExampleComponent,
    MusicComponent
  }
}
</script>
