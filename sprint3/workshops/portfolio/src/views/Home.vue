<template>
  <div class="home">
    
    <titlex></titlex>
    <aboutme></aboutme>
    <experiences></experiences>
    <myskills></myskills>
    <projects></projects>
  </div>
</template>

<script>
// @ is an alias to /src
import titlex from "@/components/title.vue";
import aboutme from "@/components/aboutme.vue";
import Experiences from '@/components/experiences.vue';
import myskills from '../components/myskills.vue'
import Projects from '../components/Projects'

export default {
  name: "Home",
  components: {
   titlex,aboutme,
    Experiences,myskills,Projects
  },
};
</script>
<style lang="scss">

</style>