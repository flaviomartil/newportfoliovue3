<template>
  <nav ref="navbar" class="navbar" :class="{ 'is-expanded': isNavbarExpanded }">
    <div class="navbar-brand">
      <a href="#" class="navbar-item">
        <h2>FLÁVIO</h2>
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarMenu" class="navbar-menu">
      <div class="navbar-end">
        <a @click="scrollToSection('homeIntro')" class="navbar-item">Inicio</a>
        <a @click="scrollToSection('about')" class="navbar-item">Sobre</a>
        <a  @click="scrollToSection('resume')"  class="navbar-item">Currículo</a>
        <a  @click="scrollToSection('portfolio')"  class="navbar-item">Portfolio</a>
        <a   @click="scrollToSection('contact')"  class="navbar-item">Contato</a>
      </div>
    </div>
  </nav>

</template>

<script>
import AboutIntro from "@/components/AboutIntro.vue";
import HomeIntro from "@/components/HomeIntro.vue";
import ResumeIntro from "@/components/ResumeIntro.vue";
import contactIntro from "@/components/ContactIntro.vue";
import portfolioIntro from "@/components/PortfolioIntro.vue";
export default {
  name: 'DefaultNavbar',
  components: {

  },
  data: () => {
    return {
      modoEscuroAtivo: false,
      isNavbarExpanded: false,
    };
  },
  computed: {
    textoBotao() {
      if (this.modoEscuroAtivo) {
        return "Desativar modo escuro";
      }
      return "Ativar modo escuro";
    },
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
};
</script>

<style scoped>



a.navbar-item:hover {
  background: #262626;
  color: #fff;
}
/* Estilo scoped específico da navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #1e1e1e;
  color: #fff;
  padding: 8px 40px;
  transition: all .5s ease;
  width: 100%;
  box-shadow: 0px 5px 10px 3px rgba(0, 0, 0, 0.2);
  border-radius: 12px;
}
.navbar .navbar-brand h2 {
  font-weight: 900;
  background:  #00d1b2;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 36px /* Exemplo de tamanho de fonte ajustado */
}

.navbar.is-dark .navbar-brand>a.navbar-item :hover {
  background: -webkit-linear-gradient(right, #004d00, #008000);
}
.navbar .navbar-nav .nav-item .nav-link {
  color: #fff;
  font-weight: 500;
  letter-spacing: 1px;
  padding-left: 12px;
  padding-right: 12px;
  transition: all .4s
}
.navbar.fix {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 999;
  background: #1e1e1e;
  margin-top: 0;
  box-shadow: 0px 5px 10px 3px rgba(0, 0, 0, 0.2);
  transition: all .5s ease;
}

.navbar-item {
  color: #fff;
  font-weight: 500;
  letter-spacing: 1px;
  padding-left: 12px;
  padding-right: 12px;
  transition: all .4s
}

.is-expanded {
  background: #1e1e1e;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  margin: 0px auto;
  z-index: 10; /* Garante que a navbar esteja acima do conteúdo da página */
}

.navbar .navbar-menu .navbar-end .navbar-item:hover {
  color: #00d1b2;
}
/* Responsive Navbar */
@media (max-width: 768px) {
  .navbar {
    padding: 8px 30px;
  }
  .navbar.is-expanded .navbar-menu {
    display: block;
    background: #292929;
    position: absolute;
    top: 5rem;
    left: 0;
    width: 100%;
    z-index: 1;
  }
  .navbar .navbar-nav .nav-item .nav-link {
    padding-left: 0;
    color: #fafafa;
    font-weight: 500;
    letter-spacing: 1px;
    padding-left: 12px;
    padding-right: 12px;
    transition: all .4s ease;
  }
  .navbar.navbar-dark .navbar-toggler:focus {
    outline: 0;
  }
  .navbar .navbar-nav .nav-item .nav-link {
    padding-left: 0;
  }
}
</style>