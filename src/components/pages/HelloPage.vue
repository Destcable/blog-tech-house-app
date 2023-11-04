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
        { id: 1, category_name: "РАСТЕНИЯ" },
        { id: 2, category_name: "СТОЛЫ" },
        { id: 3, category_name: "СТУЛЬЯ" },
      ]
    }
  }
}
</script>

<template>
  <div class="welcome-page">
    <HeaderComponent />
    <div class="container">
      <div class="d-flex justify-content-center row">
        <div class="col-md-8 w-50">
          <div v-for="(item, index) in items" :key="index">
            <CardComponent :category_name="'ДОМАШНИЕ ' + item.category_name" />
          </div>
        </div>
        <div class="col-md-3">
          <CategoriesComponent />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.welcome-page {
  background-color: #F5F5F5;
}
</style>
