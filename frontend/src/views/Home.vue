<template>
  <div>
    <div class="component-spacing2"></div>
    <default-navbar></default-navbar>
    <div class="component-spacing"></div>
    <HomeIntro :userData="userData"></HomeIntro>
    <div class="component-spacing"></div>
    <AboutIntro :userData="userData"></AboutIntro>
    <div class="component-spacing"></div>
    <ResumeIntro :userData="userData"></ResumeIntro>
    <div class="component-spacing"></div>
    <PortfolioIntro :userData="userData"></PortfolioIntro>
    <div class="component-spacing"></div>
    <contact-intro :userData="userData"></contact-intro>
    <div class="component-spacing"></div>
    <DefaultFooter></DefaultFooter>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";
import HomeIntro from "@/components/HomeIntro.vue";
import AboutIntro from "@/components/AboutIntro.vue";
import ResumeIntro from "@/components/ResumeIntro.vue";
import PortfolioIntro from "@/components/PortfolioIntro.vue";
import ContactIntro from "@/components/ContactIntro.vue";
import DefaultFooter from "@/components/DefaultFooter.vue";
import DefaultNavbar from "@/components/DefaultNavbar.vue";
import apiClient from '@/axios-config';
export default defineComponent({
  name: "App",
  components: {
    DefaultNavbar,
    DefaultFooter, ContactIntro, PortfolioIntro, AboutIntro, HomeIntro, ResumeIntro
  },
  setup() {
    const userData = ref(null);

    const fetchUserData = () => {
      apiClient.get('/users')
          .then((response: { data: null; }) => {
            userData.value = response.data;
          })
          .catch((error: any) => {
            console.error(error);
          });
    };

    onMounted(() => {
      fetchUserData();
    });

    return {
      userData,
    };
  },


});

</script>
<style scoped>
@import "https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap";
@import "/src/assets/css/font-awesome.css";
@import "/src/assets/css/magnific-popup.css";

.component-spacing {
  padding: 27px 0;
}

.component-spacing2 {
  padding: 10px 0;
}



</style>
