<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 animated fadeIn col-lg-6 center-screen">
                <div class="card w-90 p-4">
                    <div class="card-body">
                        <h4 class="text-center text-primary">Sign Up</h4>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" id="name">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="mobile">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>


                            <Link href="/login" class="btn btn-primary w-100">Sign Up</Link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>
