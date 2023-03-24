<script setup>
    import useSkills from '../../composables/skills';
    import { onMounted } from 'vue';

    const { skill, getSkill, updateSkill, errors } = useSkills();

    const props = defineProps({
        id: {
            required: true,
            type: String
        }
    });

    onMounted(() => getSkill(props.id));
</script>

<template>
    <div class="mt-12">
        <form class="max-w-md mx-auto p-4 dark:bg-gray-700 shadow-md rounded-md" @submit.prevent="updateSkill($route.params.id)">
            <div class="space-y-6">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" id="name" v-model="skill.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white">
                    
                    <div v-if="errors.name">
                        <span class="text-sm text-red-400">{{ errors.name[0] }}</span>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" id="slug" v-model="skill.slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white">
                
                    <div v-if="errors.slug">
                        <span class="text-sm text-red-400">{{ errors.slug[0] }}</span>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded">Store</button>
                </div>
            </div>
        </form>
    </div>
</template>