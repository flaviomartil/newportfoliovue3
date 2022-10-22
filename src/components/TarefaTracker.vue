<template>
  <div class="box has-text-weight-bold">
    <div class="columns">
      <div class="columns is-7">
        Descrição da tarefa
      </div>
      <div class="column">
        <CronometroTracker />
      </div>
    </div>
  </div>
</template>
<script lang="ts">
import {defineComponent} from "vue";
import CronometroTracker from "@/components/CronometroTracker.vue";

export default  defineComponent({
  name: 'TarefaTracker',
  components: {CronometroTracker}
})
</script>