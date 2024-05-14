<template>
  <loading v-model:active="isLoading"
           :can-cancel="false"
           :on-cancel="onCancel"
           :background-color="212121"
           :opacity="1"
           :is-full-page="fullPage"/>
  <div id="app" v-if="!isLoading">


  <main class="columns is-centered is-gapless is-multiline" :class="{'modo-escuro': modoEscuroAtivo}">
    <div class="column is-three-fifths conteudo">
      <DefaultNavbar />

      <NotificationsMessage/>

      <router-view></router-view>
    </div>
  </main>
    </div>

</template>

<script lang="ts">
import { defineComponent } from "vue";
import BarraLateral from "@/components/BarraLateral.vue";
import NotificationsMessage from "@/components/NotificationsMessage.vue";
import Navbar from "@/components/NabBar.vue";
import DefaultNavbar from "@/components/DefaultNavbar.vue";
import Loading from 'vue-loading-overlay';
import 'vue-loading-overlay/dist/css/index.css';
export default defineComponent({
  name: "App",
  created () {
    document.title = "Portfolio de Flávio Martil";
  },
  // eslint-disable-next-line vue/no-unused-components
  components: { NotificationsMessage, DefaultNavbar,  Loading },
  data() {
    return {
      modoEscuroAtivo: false,
      isLoading: true,
      fullPage: true
    };
  },
  mounted() {
    // Define um tempo para ocultar o loader após X segundos
    setTimeout(() => {
      this.isLoading = false;
    }, 1000); // 3000 ms -> 3 segundos
  },
  methods: {
    trocarTema (modoEscuroAtivo: boolean) {
    this.modoEscuroAtivo = modoEscuroAtivo
    },

    onCancel() {
      console.log('User cancelled the loader.')
    }
  },
});
</script>

<style>
.lista {
  padding: 1.25rem;
}
main {
  min-height: 100vh;
  --texto-primario: #fafafa;
  --barra-lateral: grey;
  font-size: 14px;
  line-height: 22px;
  background: #212121;
}

main.modo-escuro {
  --texto-primario: #ddd;
  --barra-lateral:#20222e;
}


body {
  font-family: 'Roboto', sans-serif;
  background: #212121;
  color: #fafafa;
  font-size: 14px;
  line-height: 22px;
}

.vl-overlay .vl-background  {
  background: #212121;
}

.vl-background {
  background: #212121;
}
.vl-overlay vl-active vl-full-page {
  font-family: 'Roboto', sans-serif;
  background: #212121 !important;
  color: #fafafa !important;;
  font-size: 14px;
  line-height: 22px;
}

.teste{
  font-family: 'Roboto', sans-serif;
  background: #212121 !important;
  color: #fafafa !important;;
  font-size: 14px;
  line-height: 22px;
}

svg {
  width: 128px;
  height: 55px;
  stroke: rgb(255, 255, 255);
}

.conteudo {
  background-color: var(--bg-primario);
}
</style>
