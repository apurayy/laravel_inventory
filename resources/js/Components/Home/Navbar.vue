<template>
    <nav id="menu_bar" class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand logo" href="">Sales Inventory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <Link class="nav-link" href="/">Home</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" href="/">About</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" href="/">Blog</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" href="/">Contact Us</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link login_btn" href="/login">Login</Link>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>
