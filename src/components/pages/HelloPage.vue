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
  },
  data() {
    return {
      items: [
        {id: 1, category_name: "ДОМАШНИЕ РАСТЕНИЯ"},
        {id: 2, category_name: "ДОМАШНИЕ СТОЛЫ"}
      ]
    }
  }
}
</script>

<template>
  <HeaderComponent />
  <div v-for="(item, index) in items" :key="index" class="w-100 d-flex justify-content-center mt-5">
    <CardComponent 
      :category_name="item.category_name"
    />
  </div>
</template>

<style scoped></style>
