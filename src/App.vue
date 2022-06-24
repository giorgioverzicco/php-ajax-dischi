<template>
  <div id="app">
    <OHeader />
    <OMain />
  </div>
</template>

<script>
import OHeader from "./components/organisms/OHeader.vue";
import OMain from "./components/organisms/OMain.vue";
export default {
  name: "App",
  components: { OHeader, OMain },
};
</script>

<style lang="scss">
body {
  @apply bg-slate-blue-700;
}
</style>
