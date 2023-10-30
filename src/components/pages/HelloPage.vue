<script>
import HeaderComponent from "../ui/HeaderComponent.vue";
import CardComponent from "../ui/CardComponent.vue";
export default {
  name: 'HelloPage',
  components: {
    HeaderComponent,
    CardComponent
},
  props: {
    msg: String
  }
}
</script>

<template>
  <HeaderComponent />
  <div class="w-100 d-flex justify-content-center">
    <CardComponent />
  </div>
</template>

<style scoped></style>
