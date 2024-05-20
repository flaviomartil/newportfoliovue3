<template>
  <div class="custom-dots">
    <div class="dot" v-for="(dot, index) in dots" :key="index" :class="{ active: index === activeIndex }" @click="goToSlide(index)"></div>
  </div>
</template>

<script>
export default {
  name: 'CarouselDots',
  props: {
    dots: {
      type: Array,
      required: true
    },
    activeIndex: {
      type: Number,
      required: true
    }
  },
  methods: {
    goToSlide(index) {
      this.$emit('changeSlide', index);
    }
  }
}
</script>

<style scoped>
.custom-dots {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #ccc;
  margin: 0 5px;
  cursor: pointer;
}

.dot.active {
  background-color: #0088cc;
}
</style>