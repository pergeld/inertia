<template>
    <div class="px-8">

        <Link :href="route('posts.index')" :class="{ 'font-bold': $page.component === 'Posts/Index' }">Posts</Link>
        <Link :href="route('about')" class="ml-2" :class="{ 'font-bold': $page.component === 'About' }">About</Link>

        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>
