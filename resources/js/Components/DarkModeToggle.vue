<!-- resources/js/Components/DarkModeToggle.vue -->
<template>
    <button @click="toggleDarkMode" class="p-2 bg-transparent dark:bg-transparent rounded-full transition-all duration-300">
        <i v-if="isDarkMode" class="bx bx-moon text-white text-2xl"></i>
        <i v-else class="bx bx-sun text-yellow-500 text-2xl"></i>
    </button>
</template>

<script setup>
import { ref, onMounted } from 'vue';

// Créer une variable réactive pour suivre l'état du mode sombre
const isDarkMode = ref(false);

// Fonction pour basculer entre le mode clair et le mode sombre
function toggleDarkMode() {
    isDarkMode.value = !isDarkMode.value;
    if (isDarkMode.value) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
}

// Détecter l'état actuel du mode sombre au montage du composant
onMounted(() => {
    isDarkMode.value = localStorage.getItem('theme') === 'dark';
    if (isDarkMode.value) {
        document.documentElement.classList.add('dark');
    }
});
</script>

<style scoped>
/* Style supplémentaire pour le bouton si nécessaire */
</style>