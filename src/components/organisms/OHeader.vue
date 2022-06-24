<template>
  <header
    class="flex items-center justify-between h-20 px-5 py-3 bg-slate-blue-500"
  >
    <ALogo />
    <MSelectGenre />
  </header>
</template>

<script>
import states from "@/shared/states";

import ALogo from "../atoms/ALogo.vue";
import MSelectGenre from "../molecules/MSelectGenre.vue";
export default {
  name: "OHeader",
  components: { ALogo, MSelectGenre },
  data() {
    return {
      states,
    };
  },
};
</script>
