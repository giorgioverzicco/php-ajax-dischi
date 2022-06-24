<template>
  <img
    class="h-auto max-w-full"
    :src="thumbnail.src"
    :alt="thumbnail.alt"
  />
</template>

<script>
export default {
  name: "AThumbnail",
  props: {
    thumbnail: Object,
  },
};
</script>
