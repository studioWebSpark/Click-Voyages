<template>
    <AppLayout>
        <div class="bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-600 h-screen flex overflow-hidden text-sm">





            <div class="flex-grow flex overflow-x-hidden">
                <NbClicks />


                <div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
                    <MainUser />
                </div>
            </div>
        </div>

    </AppLayout>
</template>


<script setup>
import Commercial from '@/Components/Admin/Commercial.vue';
import MainUser from '@/Components/Admin/MainUser.vue';
import NbClicks from '@/Components/Admin/NbClicks.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

</script>