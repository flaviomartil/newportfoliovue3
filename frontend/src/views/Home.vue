<template>
  <div class="component-spacing2"></div>
  <default-navbar></default-navbar>
  <div class="component-spacing"></div>
  <HomeIntro :resumeData="resumeData"></HomeIntro>
  <div class="component-spacing"></div>
  <AboutIntro :about="aboutsData"></AboutIntro>
  <div class="component-spacing"></div>
  <ResumeIntro :resumeData="resumeData"></ResumeIntro>
  <div class="component-spacing"></div>
  <PortfolioIntro :projects=" projectsData"></PortfolioIntro>
  <div class="component-spacing"></div>
  <contact-intro :resumeData="resumeData"></contact-intro>
  <div class="component-spacing"></div>
  <DefaultFooter></DefaultFooter>
</template>

<script lang="ts">
import {ref, onMounted } from "vue";
import HomeIntro from "@/components/HomeIntro.vue";
import AboutIntro from "@/components/AboutIntro.vue";
import ResumeIntro from "@/components/ResumeIntro.vue";
import PortfolioIntro from "@/components/PortfolioIntro.vue";
import ContactIntro from "@/components/ContactIntro.vue";
import DefaultFooter from "@/components/DefaultFooter.vue";
import DefaultNavbar from "@/components/DefaultNavbar.vue";
import apiClient from '@/axios-config';

export default {
  name: 'App',
  components: {
    DefaultNavbar,
    HomeIntro,
    AboutIntro,
    ResumeIntro,
    PortfolioIntro,
    ContactIntro,
    DefaultFooter
  },

  setup() {

    interface Component {
      type: string;
      [key: string]: any;
    }


    interface ResumeData {
      experiences: any;
      education: any;
      skills:any;
      contact:any;
      components: {
        experiences: Component[];
        about: Component[];
        home: Component[];
        contact: Component[];
        education: Component[];
        projects: Component[];
        skills: Component[];
        personalInfo: Component[];
      };

    }

    const userData = ref<any>(null);
    const aboutsData = ref<any>(null);
    const resumeData = ref<{ experiences: any; education: any; components: any, skills:any, contact:any } | null>(null);
    const projectsData = ref<any>(null);

    const fetchUserData = () => {
      apiClient.get('/users')
          .then((response) => {
            const data = response.data.user;
            userData.value = data;
            aboutsData.value = data.abouts;

            const components: Component[]  = data.components;

            const filteredComponents = {
              experiences: components.filter((component: Component) => component.component === 'experiences'),
              about: components.filter((component: Component) => component.component === 'about'),
              home: components.filter((component: Component) => component.component === 'home'),
              contact: components.filter((component: Component) => component.component === 'contact'),
              education: components.filter((component: Component) => component.component === 'education'),
              projects: components.filter((component: Component) => component.component === 'projects'),
              skills: components.filter((component: Component) => component.component === 'skills')
            };

            const filteredSocial = [
              { type: 'linkedin', url: data.personal_info.linkedin },
              { type: 'instagram', url: data.personal_info.instagram },
              { type: 'facebook', url: data.personal_info.facebook },
              { type: 'whatsapp', url: data.personal_info.whatsapp },
              { type: 'email', url: 'mailto:' + data.personal_info.email }
            ];

            resumeData.value = {
              experiences: data.experiences,
              education: data.education,
              components: filteredComponents,
              skills: data.skills,
              contact: filteredSocial
            };

            projectsData.value = data.projects;
          })
          .catch((error) => {
            console.log(error);
          });
    };

    onMounted(() => {
      console.log('Component mounted.');
      fetchUserData();
    });

    return {
      userData,
      aboutsData,
      resumeData,
      projectsData
    };
  },
};

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
