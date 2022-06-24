<template>
  <div>
    <label
      class="mr-4 text-lg text-white"
      for="genre"
    >
      Generi
    </label>
    <select
      name="genre"
      v-model="states.selectedGenre"
    >
      <option value="">Tutti</option>
      <option
        v-for="(genre, idx) in genres"
        :key="idx"
        :value="genre"
      >
        {{ genre }}
      </option>
    </select>
  </div>
</template>

<script>
import states from "@/shared/states";

export default {
  name: "MSelectGenre",
  data() {
    return {
      states,
    };
  },
  computed: {
    genres() {
      const genres = this.states.albums.map((a) => a.genre);
      return new Set(genres);
    },
  },
};
</script>
