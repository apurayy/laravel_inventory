<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex justify-content-between">
                                <h5>Customer List</h5>
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
        {text: "Customer Name", value: "name"},
        {text: "Email", value: "email"},
        {text: "Mobile Number", value: "mobile"},
        {text: "Action", value: "number"},
    ];

    const Item = ref([
        { no: "1", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "2", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "3", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "4", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "5", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "6", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "7", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "8", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "9", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "10", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
        { no: "11", name: "Mollika", email: "molli@gmail.com", mobile: "0178698541" },
    ]);

    const itemClick = (number,player) => {
    alert(`Number is=${number} & Category Name is=${player}`)
}

</script>

<style scoped>

</style>
