<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between">
                                <h5>Category List</h5>
                                <input type="text" placeholder="Search...." class="form-control mb-3 w-auto" v-model="searchValue">
                            </div>

                            <EasyDataTable buttons-pagination alternating :headers="Header" :items="Item" :rows-per-page="10" :search-field="searchField" :search-value="searchValue">
                                <template #item-number="{number,player}">
                                    <button class="btn btn-primary mx-3 btn-sm" @click="itemClick(number,player)">Edit</button>
                                    <button class="btn btn-danger btn-sm" @click="itemClick(number,player)">Delete</button>
                                </template>
                            </EasyDataTable>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import {ref} from "vue";

    const Header = [
        {text: "No", value: "no"},
        {text: "Category Name", value: "name"},
        {text: "Action", value: "number"},
    ];

    const Item = ref([
        { no: "1", name: "Electronics" },
        { no: "2", name: "Mobile" },
        { no: "3", name: "Phone" },
        { no: "4", name: "Cloth" },
    ]);

    const itemClick = (number,player) => {
    alert(`Number is=${number} & Category Name is=${player}`)
}

</script>

<style scoped>

</style>
