<template>
  <BoxTracker>
    <div class="columns">
      <div class="column is-7">
        {{ tarefa.descricao || "Tarefa sem descrição" }}
      </div>
      <div class="column">
        <CronometroTracker :tempo-em-segundos="tarefa.duracaoEmSegundos" />
      </div>
    </div>
  </BoxTracker>
</template>
<script lang="ts">
import { defineComponent, PropType } from "vue";
import CronometroTracker from "@/components/CronometroTracker.vue";
import BoxTracker from "@/components/BoxTracker.vue";
import ITarefa from "@/interfaces/ITarefa";

export default defineComponent({
  name: "TarefaTracker",
  components: { CronometroTracker, BoxTracker },
  props: {
    tarefa: {
      type: Object as PropType<ITarefa>,
      required: true,
    },
  },
});
</script>
