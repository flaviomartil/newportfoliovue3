<template>
  <button class="button" @click="finalizar" :disabled="!cronometroRodando">
      <span class="icon">
        <i class="fas fa-stop"> </i>
      </span>
    <span>stop</span>
  </button>
</template>

<script lang="ts">
import {defineComponent} from "vue";

export default defineComponent({
name: 'Botao',
props: {
  disabled: {
    type: Boolean,
    default: false
  },
  icone: {
    type: String,
    default: ''
  },
},
});
</script>