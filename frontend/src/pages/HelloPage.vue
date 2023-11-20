<script>
import getPosts from "../api/getPosts";
import HeaderComponent from "../components/HeaderComponent.vue";
import CardComponent from "../components/Card.vue";
import CategoriesComponent from "../components/CategoriesComponent.vue";

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
      items: null,
    }
  },
  mounted() {
    getPosts()
      .then(response => {
        this.items = response.data;
      })
      .catch(reason => console.error(reason))
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
            <CardComponent 
              :title="item.title" 
              category_name="ДОМАШНИЕ РАСТЕНИЯ" 
              :created_at="item.created_at"
              :text="item.body" />
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