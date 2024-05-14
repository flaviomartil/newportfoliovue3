<template>
  <main class="columns is-centered is-gapless is-multiline" :class="{'modo-escuro': modoEscuroAtivo}">
    <div class="column is-three-fifths conteudo">
      <DefaultNavbar />

      <NotificationsMessage/>

      <router-view></router-view>
    </div>
  </main>


</template>

<script lang="ts">
import { defineComponent } from "vue";
import BarraLateral from "@/components/BarraLateral.vue";
import NotificationsMessage from "@/components/NotificationsMessage.vue";
import Navbar from "@/components/NabBar.vue";
import DefaultNavbar from "@/components/DefaultNavbar.vue";
export default defineComponent({
  name: "App",
  created () {
    document.title = "Portfolio de Flávio Martil";
  },
  components: { NotificationsMessage, DefaultNavbar },
  data() {
    return {
      modoEscuroAtivo: false
    };
  },
  methods: {
    trocarTema (modoEscuroAtivo: boolean) {
    this.modoEscuroAtivo = modoEscuroAtivo
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

.conteudo {
  background-color: var(--bg-primario);
}
</style>
