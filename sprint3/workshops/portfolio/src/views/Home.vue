<template>
  <div class="home">
    
    <titlex></titlex>
    <aboutme></aboutme>
    <experiences></experiences>
  </div>
</template>

<script>
// @ is an alias to /src
import titlex from "@/components/title.vue";
import aboutme from "@/components/aboutme.vue";
import Experiences from '@/components/experiences.vue';

export default {
  name: "Home",
  components: {
   titlex,aboutme,
    Experiences
  },
};
</script>
<style lang="scss">

</style>