<template>
  <main class="columns is-gapless is-multiline" :class="{'modo-escuro': modoEscuroAtivo}">
    <div class="column is-one-fifth">
      <BarraLateral @aoTemaAlterado="trocarTema" />
    </div>
    <div class="column is-three-quarter conteudo">
      <NotificationsMessage/>
      <router-view></router-view>
    </div>
  </main>


</template>

<script lang="ts">
import { defineComponent } from "vue";
import BarraLateral from "@/components/BarraLateral.vue";
import NotificationsMessage from "@/components/NotificationsMessage.vue";

export default defineComponent({
  name: "App",
  components: { BarraLateral, NotificationsMessage },
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
  --bg-primario: #fff;
  --texto-primario: #000;
  --barra-lateral: grey;

}

main.modo-escuro {
  --bg-primario: #2d2f40;
  --texto-primario: #ddd;
  --barra-lateral:#20222e;
}

.conteudo {
  background-color: var(--bg-primario);
}
</style>
