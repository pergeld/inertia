<template>
    <div class="px-8">
        <Link :href="route('posts.index')">Posts</Link>
        <Link :href="route('about')" class="ml-2">About</Link>

        <h2>Cooming soon</h2>
    </div>
</template>

<script>
    import { Link } from "@inertiajs/inertia-vue3"

    export default {
        components: {
            Link
        }
    }
</script>
