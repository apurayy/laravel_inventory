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
            <div class="side-nav-top">
                <h5 class="text-white p-3">Inventory Apps</h5>
            </div>

            <Link href="/dashboard" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid fa-house"></i>
                </span>
                <span class="side-bar-item-caption">Dashboard</span>
            </Link>

            <Link href="/category" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid fa-bookmark"></i>
                </span>
                <span class="side-bar-item-caption">Category</span>
            </Link>

            <Link href="/customer" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid fa-user-nurse"></i>
                </span>
                <span class="side-bar-item-caption">Customer</span>
            </Link>

            <Link href="/product" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid fa-gift"></i>
                </span>
                <span class="side-bar-item-caption">Product</span>
            </Link>

            <Link href="/product" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-regular fa-pen-to-square"></i>
                </span>
                <span class="side-bar-item-caption">Sales</span>
            </Link>

            <Link href="/invoice" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid fa-file-invoice"></i>
                </span>
                <span class="side-bar-item-caption">Invoice</span>
            </Link>

            <Link href="/profile" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid fa-user"></i>
                </span>
                <span class="side-bar-item-caption">Profile</span>
            </Link>

            <Link href="/" class="side-bar-item">
                <span class="side-bar-item-icon">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </span>
                <span class="side-bar-item-caption">Logout</span>
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
