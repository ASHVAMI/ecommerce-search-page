<template>
    <div class="container mx-auto">
      <h1 class="text-2xl font-bold mb-4">Clothing Store</h1>
      <SearchBar />
    </div>
  </template>
  
  <script>
  import SearchBar from '@/components/SearchBar.vue';
  
  export default {
    components: {
      SearchBar
    }
  };
  </script>
  
  <style scoped>
  /* Add any scoped styles here */
  </style>
  