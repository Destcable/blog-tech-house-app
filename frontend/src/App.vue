<script>
import Hello from './components/pages/HelloPage.vue';

export default {
  name: 'App',
  components: {
    Hello
  }
}
</script>

<template>
  <Hello msg="Welcome to Your Vue.js App"/>
</template>

<style>
::selection {
  background-color: red; 
  color: white; 
}
</style>
