<script>
export default{ 
    name: 'CardComponent',
    props: {
        category_name: String,
    }
}
</script>

<template>
    <div class="card text-center" style="width: 40rem;">
        <img  class="card-img-top">
        <div class="card-body">
            <p class="text-danger">{{ category_name }}</p>
            <h5 class="card-title">Комнатные Растения — Целители. Для Чего Нужно Разводить Домашние Растения</h5>
            <p class=" text-secondary">31.10.2023</p>
            <p class="card-text">Одни называют комнатные растения пылесборниками, другие возводят их в ранг природных лекарей. Очевидно одно: растения дают силы и заряжают энергией, только будьте очень разборчивы в выборе зелёных друзей. Большинство людей заводят комнатные растения для красоты.</p>
            <a href="#" class="card-link text-decoration-none text-danger">ЧИТАТЬ</a>
        </div>
    </div>
</template>

<style scoped>
</style>