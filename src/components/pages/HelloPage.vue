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
        <div class="border border-secondary rounden p-3">
          <div class="border border-danger p-2 rounded text-center ">
            РУБРИКИ
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div v-for="(item, index) in items" :key="index" class="">
    <div class="w-100 mt-5 d-flex justify-content-center">
      <CardComponent :category_name="item.category_name" />
    </div>
    <div>
      <div class="">
        1
      </div>
    </div>
  </div> -->
</template>

<style scoped></style>
