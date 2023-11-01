<script>
import HeaderComponent from "../ui/HeaderComponent.vue";
import CardComponent from "../ui/CardComponent.vue";
import CategoriesComponent from "../ui/CategoriesComponent.vue";
export default {
  name: 'HelloPage',
  components: {
    HeaderComponent,
    CardComponent,
    CategoriesComponent
  },
  props: {
    msg: String
  },
  data() {
    return {
      items: [
        { id: 1, category_name: "ДОМАШНИЕ РАСТЕНИЯ" },
        { id: 2, category_name: "ДОМАШНИЕ СТОЛЫ" },
        { id: 3, category_name: "ДОМАШНИЕ СТУЛЬЯ" },
      ]
    }
  }
}
</script>

<template>
  <HeaderComponent />
  <div class="container">
    <div class="row justify-content-center">
      
      <div class="col">
        <div v-for="(item, index) in items" :key="index" class="">
            <CardComponent :category_name="item.category_name" />
        </div>
      </div>

      <div class="col">
          <CategoriesComponent />
      </div>

    </div>
  </div>
</template>

<style scoped></style>
