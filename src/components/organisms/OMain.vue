<template>
  <main class="w-full px-5 mx-auto md:w-3/4 md:px-0 py-14">
    <div
      v-if="loaded"
      class="grid-album"
    >
      <MCardAlbum
        v-for="(album, idx) in filteredAlbums"
        :key="idx"
        :album="album"
      />
    </div>
    <div
      v-else
      class="flex items-center justify-center"
    >
      <SyncLoader color="#2ABE58" />
    </div>
  </main>
</template>

<script>
import axios from "axios";
import states from "@/shared/states";

import MCardAlbum from "../molecules/MCardAlbum.vue";
import SyncLoader from "../loaders/SyncLoader.vue";
export default {
  components: { MCardAlbum, SyncLoader },
  name: "OMain",
  data() {
    return {
      states,
      loaded: false,
    };
  },
  computed: {
    filteredAlbums() {
      return this.states.albums.filter(
        (a) =>
          a.genre === this.states.selectedGenre || !this.states.selectedGenre
      );
    },
  },
  created() {
    axios
      .get("http://localhost:8888/api.php")
      .then((response) => {
        this.states.albums = response.data;
      })
      .finally(() => (this.loaded = true));
  },
};
</script>

<style
  lang="scss"
  scoped
>
.grid-album {
  @apply grid
    justify-center
    gap-x-10
    gap-y-6;

  grid-template-columns: repeat(auto-fit, 230px);
}
</style>
