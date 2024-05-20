<template>
  <section class="section home-intro" id="homeIntro">
    <div class="container">
      <div class="columns is-vcentered is-multiline">

        <!-- Coluna de texto -->
        <div class="column is-8-desktop is-12-tablet">
          <div class="content">
          <div  v-for="home in resumeData?.components?.home" :key="home.id">
            <p v-if="home.subtitle == 'Sou Flávio Martil'" class="subtitle is-4">{{ home.subtitle }}</p>
            <h2 v-else class="title is-2">{{ home.subtitle }}</h2>
          </div>
            <button @click="scrollToSection('contact')" class="button is-primary">Contato</button>
          </div>
        </div>

        <!-- Coluna de imagem -->
        <div class="column is-4-desktop is-12-tablet image-column">
          <figure class="image-right">
            <img src="../assets/images/intro-image.png" alt="Intro Image">
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
      const threshold = 100; // Ajuste o valor conforme necessário

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
      const duration = 1000; // Duração da rolagem em milissegundos
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

.segments {
  padding: 27px 0;
}
.home-intro {
  padding: 27px 0;
  background: #262626;
}
figure {
  padding-right: 2.0625rem;
}

.home-intro .content {
  padding: 40px;
  border-radius: 3px;
}

.home-intro .content .subtitle {
  font-family: 'Roboto', sans-serif;
  font-size: 26px;
  font-weight: 300;
  color: #fafafa;
  margin-bottom: 10px; /* Ajuste a margem conforme necessário */
  letter-spacing: 1px;
  text-transform: uppercase;
}

.home-intro .content .title {
  font-family: 'Roboto', sans-serif;
  font-size: 50px;
  font-weight: 900;
  background: -webkit-linear-gradient(right, #004d00, #008000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 87px;
  margin-bottom: 20px; /* Ajuste a margem conforme necessário */
}

.home-intro .intro-content .intro-caption h2 {
  font-size: 70px;
  font-weight: 900;
}

.home-intro .content .button {
  background-image: linear-gradient(to left, #006400, #004d00);
  color: #fff;
  border: 0;
  border-radius: 2px;
  padding: 13px 20px;
  font-family: 'Roboto', sans-serif;
  font-weight: 700;
  font-size: 16px;
  overflow: hidden;
}

/* Adicionando estilo personalizado para a coluna de imagem */
.image-column {
  display: flex;
  align-items: center;
}

.home-intro .image-right {
  width: 100%;
  height: 100%; /* Ajuste a altura conforme necessário */
}

.home-intro .image-right img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Para cobrir o contêiner */
}
</style>