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
        { id: 1, category_name: "РАСТЕНИЯ", title: "title1", created_at: "31.10.2023", text: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquam, purus nec egestas ullamcorper, dolor risus faucibus sem, sit amet venenatis ante mauris eu dui. Aliquam sollicitudin dui sed tincidunt commodo" },
        { id: 2, category_name: "СТОЛЫ", title: "title2", created_at: "03.11.2023", text: "Vestibulum tempus pretium orci, et eleifend elit viverra eu. Vestibulum aliquet, lectus vel ultrices consequat, quam leo cursus nisi, vitae dictum purus purus eget libero. Nam mollis pellentesque purus non sagittis. Nullam quis gravida mauris" },
        { id: 3, category_name: "СТУЛЬЯ", title: "title3", created_at: "04.11.2023", text: "hasellus nulla augue, dictum vel faucibus faucibus, pharetra nec dui. Cras et fermentum enim. Praesent vehicula lacus non libero volutpat, sed sodales mauris iaculis. Ut elit magna, ornare non pellentesque eu, auctor ut orci. Aliquam vitae fermentum urna" },
      ]
    }
  },
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
              :category_name="'ДОМАШНИЕ ' + item.category_name"
              :created_at="item.created_at"
              :text="item.text"
            />
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
