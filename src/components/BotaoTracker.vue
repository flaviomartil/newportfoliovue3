<template>
  <button class="button" @click="clicado" :disabled="desabilitado">
    <span class="icon">
      <i :class="iconeTracker"> </i>
    </span>
    <span>{{ textoBtn }}</span>
  </button>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "BotaoTracker",
  emits: ["clicado"],
  props: {
    desabilitado: {
      type: Boolean,
      default: false,
    },
    iconeTracker: {
      type: String,
      default: "",
    },
    textoBtn: {
      type: String,
      default: "",
    },
  },
  methods: {
    clicado(): void {
      this.$emit("clicado");
    },
  },
});
</script>
