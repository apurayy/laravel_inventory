<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 animated fadeIn col-lg-6 center-screen">
                <div class="card w-90 p-4">
                    <div class="card-body">

                        <label class="form-label">Email address</label>
                        <input type="email" id="email" placeholder="User Email" class="form-control">

                        <br>
                        <Link href="/verifyotp" class="btn w-100 btn-primary">SEND OTP</Link>

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
