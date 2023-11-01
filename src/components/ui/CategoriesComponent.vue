<script>
export default {
    name: 'CategoriesComponent',
    props: { 
        category_names: { 
            
        },
    }
}
</script>

<template>
    <div class="shadow rounded p-4">
        <div class="border border-danger p-2 ps-4 pe-4 rounded text-center mb-2">
            <small>РУБРИКИ</small>
        </div>
        <div class="d-grid gap-2">
            <span>Цветы</span>
            <div class="separator"></div>
            <span>Столы</span>
            <div class="separator"></div>
            <span>Стулья</span>
        </div>

    </div>
</template>

<style>
.separator {
    border-bottom: 1px dashed rgba(128, 128, 128, 0.5);
}
</style>