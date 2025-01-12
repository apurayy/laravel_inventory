<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 animated fadeIn col-lg-6 center-screen">
                <div class="card w-90 p-4">
                    <div class="card-body">
                        <h4 class="text-center text-primary">Set Password</h4>

                        <br>
                        <input type="password" id="password" placeholder="New Password" class="form-control">

                        <br>
                        <input type="password" id="cpassword" placeholder="Confirm Password" class="form-control">

                        <br>
                        <Link href="/login" class="btn w-100 btn-primary">Update Password</Link>

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
