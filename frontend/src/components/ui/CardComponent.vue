<script>
export default{ 
    name: 'CardComponent',
    props: {
        category_name: String,
        title: String,
        created_at: String,
        text: String,
    }
}
</script>

<template>
    <div class="card border-0 shadow-sm mb-5 text-center" style="width: 40rem;">
        <img  class="card-img-top">
        <div class="card-body">
            <p class="text-danger">{{ category_name }}</p>
            <h5 class="card-title">{{ title }}</h5>
            <p class=" text-secondary">{{ created_at }}</p>
            <p class="card-text">{{ text }}</p>
            <a href="#" class="card-link text-decoration-none text-danger">ЧИТАТЬ</a>
        </div>
    </div>
</template>

<style scoped>
</style>