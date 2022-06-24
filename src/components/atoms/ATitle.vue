<template>
  <h1 class="text-2xl font-semibold text-white">{{ content }}</h1>
</template>

<script>
export default {
  name: "ATitle",
  props: {
    content: String,
  },
};
</script>
