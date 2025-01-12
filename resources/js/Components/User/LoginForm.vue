<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 animated fadeIn col-lg-6 center-screen">
                <div class="card w-90 p-4">
                    <div class="card-body">
                        <h4 class="text-center text-primary">SIGN IN</h4>
                        <br>
                        <input type="email" id="email" placeholder="User Email" class="form-control">

                        <br>
                        <input type="password" id="password" placeholder="User Password" class="form-control">

                        <br>
                        <Link href="/dashboard" class="btn w-100 btn-primary">Login</Link>
                        <hr>
                        <span>
                            <Link class="text-center ms-3 h6" href="/registration">Sign-Up </Link>
                            <span class="ms-1"> |</span>
                            <Link class="text-center ms-3 h6" href="/sendotp">Forget Password</Link>
                        </span>
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
