<template>
    <div>
        <h1 class="text-2xl font-bold">Clients</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date d'inscription</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="client in clients" :key="client.id">
                    <td>{{ client.name }}</td>
                    <td>{{ client.email }}</td>
                    <td>{{ client.created_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const clients = ref([]);

onMounted(() => {
    Inertia.get('/clients', {}, {
        onSuccess: ({ props }) => {
            clients.value = props.clients;
        }
    });
});
</script>