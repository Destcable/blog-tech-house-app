<script>
import getPosts from "../api/getPosts";
import transformResponsePosts from "../utils/transformResponse/transformResponsePosts"
import sortByDateDescending from "../utils/sortByDateDescending"
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
      items: null,
    }
  },
  mounted() {
    getPosts()
      .then(response =>{ 
        this.items = sortByDateDescending(
          transformResponsePosts(response.data), 'created_at'
        )
      });
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