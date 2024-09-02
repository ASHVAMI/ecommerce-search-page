<template>
    <div class="p-4">
      <input
        v-model="query"
        @input="onInput"
        type="text"
        placeholder="Search for clothing..."
        class="p-2 border rounded-md w-full"
      />
      <ul v-if="results.length > 0" class="mt-2 border rounded-md">
        <li
          v-for="item in results"
          :key="item.id"
          class="p-2 border-b last:border-b-0"
        >
          {{ item.name }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        query: '',
        results: []
      };
    },
    methods: {
      async onInput() {
        if (this.query.length > 3) {
          const response = await fetch(`/api/search?query=${this.query}`);
          this.results = await response.json();
        } else {
          this.results = [];
        }
      }
    }
  };
  </script>
  
  <style scoped>
  /* Add any scoped styles here */
  </style>
  