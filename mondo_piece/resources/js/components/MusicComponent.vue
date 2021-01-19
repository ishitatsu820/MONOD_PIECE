<template>
  <div>
      <a href="" class="list-group-item list-group-item-action flex-colum align-items-start">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">{{ title }}</h5>
          <!-- <p>{{ artist }}</p> -->
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: 'MusicComponent',
  props: ['id', 'title'],
}
</script>

<style>

</style>