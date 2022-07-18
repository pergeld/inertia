<template>
    <div class="px-8">

        <Link :href="route('posts.index')">Posts</Link>
        <Link :href="route('about')" class="ml-2">About</Link>

        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Id</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Content</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Created at</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        <tr v-for="post in posts" :key="post.id">
                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ post.id }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.title }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.content }}</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ post.created_at }}</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { Link } from "@inertiajs/inertia-vue3"

    export default {
        components: {
            Link
        },

        props: {
            posts: Object
        }
    }
</script>
