<template>
  <FormularioTracker @aoSalvarTarefa="salvarTarefa" />
  <div class="lista">
    <TarefaTracker
      v-for="(tarefa, index) in tarefas"
      :key="index"
      :tarefa="tarefa"
    />
    <BoxTracker v-if="listaEstaVazia">
      Você não está muito produtivo hoje :(
    </BoxTracker>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import FormularioTracker from "@/components/FormularioTracker.vue";
import TarefaTracker from "@/components/TarefaTracker.vue";
import ITarefa from "@/interfaces/ITarefa";
import BoxTracker from "@/components/BoxTracker.vue";

export default defineComponent({
  name: "App",
  components: { BoxTracker, FormularioTracker, TarefaTracker },
  data() {
    return {
      tarefas: [] as ITarefa[],
    };
  },
  methods: {
    salvarTarefa(tarefa: ITarefa) {
      this.tarefas.push(tarefa);
    },
  },
  computed: {
    listaEstaVazia(): boolean {
      return this.tarefas.length === 0;
    },
  },
});
</script>
