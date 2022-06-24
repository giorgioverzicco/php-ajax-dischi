<template>
  <div class="flex flex-col gap-5 p-5 bg-slate-blue-500">
    <AThumbnail :thumbnail="{ src: album.poster, alt: album.title }" />
    <ATitle
      class="text-center uppercase"
      :content="album.title"
    />
    <div class="leading-5 text-center text-gray-500">
      <p class="text-lg font-medium">{{ album.author }}</p>
      <p>{{ album.year }}</p>
    </div>
  </div>
</template>

<script>
import AThumbnail from "../atoms/AThumbnail.vue";
import ATitle from "../atoms/ATitle.vue";
export default {
  name: "MCardAlbum",
  components: { AThumbnail, ATitle },
  props: {
    album: Object,
  },
};
</script>
