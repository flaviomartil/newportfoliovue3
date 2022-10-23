<template>
  <div class="is-flex is-align-items-center is-justify-content-space-between">
    <CronometroTracker :tempoEmSegundos="tempoEmSegundos" />
    <botaoTracker
      @clicado="iniciar"
      :desabilitado="cronometroRodando"
      :texto-btn="'play'"
      :icone-tracker="'fas fa-play'"
    />
    <botaoTracker
      @clicado="finalizar"
      :desabilitado="!cronometroRodando"
      :texto-btn="'stop'"
      :icone-tracker="'fas fa-stop'"
    />
  </div>
</template>
<script lang="ts">
import { defineComponent } from "vue";
import botaoTracker from "@/components/BotaoTracker.vue";
import CronometroTracker from "@/components/CronometroTracker.vue";
import BotaoTracker from "@/components/BotaoTracker.vue";

export default defineComponent({
  name: "TemporizadorTracker",
  emits: ["aoTemporizadorFinalizado"],
  components: { BotaoTracker, CronometroTracker },
  data: () => {
    return {
      tempoEmSegundos: 0,
      cronometro: 0,
      cronometroRodando: false,
    };
  },
  methods: {
    iniciar() {
      this.cronometroRodando = true;
      this.cronometro = setInterval(() => {
        this.tempoEmSegundos += 1;
      }, 1000);
    },
    finalizar() {
      this.cronometroRodando = false;
      clearInterval(this.cronometro);
      this.$emit("aoTemporizadorFinalizado", this.tempoEmSegundos);
      this.tempoEmSegundos = 0;
    },
  },
});
</script>