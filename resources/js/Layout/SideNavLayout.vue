<template>
    <div>
        <nav id="topNav" class="navbar fixed-top bg-primary top-navbar">
            <div class="container-fluid">
                <a id="MenuBar" @click="NavOpenClose" class="icon-nav mx-0 my-1 h5">
                    <i class="fa text-white fa-bars"></i>
                </a>
            </div>
        </nav>

        <div id="sideNav" class="side-nav-open">
            <div class="side-nav-top text-center">
                <h5 class="text-white">Inventory</h5>
            </div>

            <Link href="/dashboard" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid text-primary fa-house"></i>
                </span>
                <span class="side-bar-item-caption">Dashboard</span>
            </Link>

            <Link href="/category" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid text-primary fa-bookmark"></i>
                </span>
                <span class="side-bar-item-caption">Category</span>
            </Link>

            <Link href="/customer" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid text-primary fa-users"></i>
                </span>
                <span class="side-bar-item-caption">Customer</span>
            </Link>

            <Link href="/product" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid text-primary fa-users"></i>
                </span>
                <span class="side-bar-item-caption">Product</span>
            </Link>

            <Link href="/product" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid text-primary fa-users"></i>
                </span>
                <span class="side-bar-item-caption">Sales</span>
            </Link>

            <Link href="/invoice" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid text-primary fa-users"></i>
                </span>
                <span class="side-bar-item-caption">Invoice</span>
            </Link>

        </div>

        <div id="content" class="content">
            <div class="container-fluid">
                <main>
                    <slot></slot>
                </main>
            </div>
        </div>

    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>

</style>
