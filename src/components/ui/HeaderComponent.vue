<script>
export default {
  name: 'HeaderComponent',
  props: {
    msg: String
  }
}
</script>

<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <a class="navbar-brand text-danger" href="#">Блог для дома</a>
    </div>
  </nav>
</template>

<style scoped></style>
