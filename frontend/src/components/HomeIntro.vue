<template>
  <section class="section home-intro" id="homeIntro">
    <div class="container">
      <div class="columns is-vcentered is-multiline">

        <!-- Coluna de texto -->
        <div class="column is-8-desktop is-12-tablet">
          <div class="content buttons ">
            <div v-for="home in resumeData?.components?.home" :key="home.id">
              <p v-if="home.subtitle == 'Sou Flávio Martil'" class="subtitle is-4 " style="color: #00d1b2;">{{ home.subtitle }}</p>
              <h2 v-else class="title is-2" style="color: #fff;">{{ home.subtitle }}</h2>
            </div>
            <button @click="scrollToSection('contact')" class="button is-white is-outlined">Contato</button>
          </div>
        </div>

        <!-- Coluna de imagem -->
        <div class="column is-4-desktop is-12-tablet image-column">
          <figure class="image-right">
            <img :src="resumeData?.personal_info.avatar" style="height: 17.4rem; border-radius: 15px;" alt="Imagem de Introdução">
          </figure>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'HomeIntro',
  props: {
    resumeData: {
      type: Object,
      required: true
    },
  },
  data: () => {
    return {
      modoEscuroAtivo: false,
      isNavbarExpanded: false,
    };
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll);
  },
  beforeUnmount() {
    window.removeEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll() {
      const currentScroll = window.pageYOffset;
      const navbar = this.$refs.navbar;
      const threshold = 100;

      this.isNavbarExpanded = currentScroll > threshold;
    },
    alterarTema() {
      this.modoEscuroAtivo = !this.modoEscuroAtivo;
      this.$emit("aoTemaAlterado", this.modoEscuroAtivo);
    },
    scrollToSection(id) {
      const targetSection = document.getElementById(id);
      const currentPosition = window.pageYOffset;
      const targetPosition = targetSection ? targetSection.offsetTop : 0;

      if (targetSection && currentPosition !== targetPosition) {
        this.smoothScroll(currentPosition, targetPosition);
      }
    },
    smoothScroll(start, end) {
      const duration = 1000;
      const startTime = performance.now();

      const easeInOutQuad = (t) => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;

      const scrollStep = (currentTime) => {
        const progress = Math.min((currentTime - startTime) / duration, 1);
        const ease = easeInOutQuad(progress);
        const scrollTo = start + (end - start) * ease;

        window.scrollTo(0, scrollTo);

        if (progress < 1) {
          requestAnimationFrame(scrollStep);
        }
      };

      requestAnimationFrame(scrollStep);
    }
  },
}
</script>

<style scoped>

.home-intro {
  background: #1e1e1e;
}
figure {
  padding-right: 2.0625rem;
}

.home-intro .content {
  padding: 20px 40px;
  border-radius: 10px;
  background: #292929;
}

.home-intro .content .subtitle {
  font-size: 26px;
  font-weight: 300;
  color: #00d1b2;
  margin-bottom: 10px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.home-intro .content .title {
  font-size: 50px;
  font-weight: 900;
  color: #fff;
  line-height: 87px;
  margin-bottom: 20px;
}

.buttons .button {
  border-color: #00d1b2;
  color: #00d1b2;
  transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
}

.buttons .button:hover,
.buttons .button.is-active {
  background-color: #00d1b2;
  color: #fff;
}


.home-intro .content .button {
  border-radius: 10px;
  padding: 13px 20px;
  font-weight: 700;
  font-size: 16px;
}

/* Adicionando estilo personalizado para a coluna de imagem */
.image-column {
  display: flex;
  align-items: center;
}

.home-intro .image-right {
  width: 100%;
  height: 100%;
}

.home-intro .image-right img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>