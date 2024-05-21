<template>
  <section class="section" id="portfolio">
    <div class="container">
      <div class="content">
        <div class="section-title has-text-centered">
          <h3 class="title is-3">Meus Projetos</h3>
        </div>
        <div class="buttons is-centered">
          <button class="button is-white is-outlined" @click="filterByCategory('All')">Todos</button>
          <button class="button is-white is-outlined" @click="filterByCategory('Web')">Web</button>
          <button class="button is-white is-outlined" @click="filterByCategory('Desktop')">Desktop</button>
        </div>
        <div v-if="resumeData && resumeData.projects" class="columns is-multiline customColumn">
          <div class="column is-4 custom" v-for="item in filteredItems" :key="item.id">
            <div class="card rounded-card">
              <a :href="item.link" target="_blank" class="card-image">
                <figure class="image is-4by3">
                  <img :src="item.photo" :alt="item.description">
                </figure>
                <div class="overlay has-text-white">
                  <div class="overlay-content">
                    <h4 class="title is-4">{{ item.name }}</h4>
                    <p class="subtitle">{{ item.category }}</p>
                    <p>{{ item.description }}</p>
                    <span class="icon">
                      <i class="fas fa-link"></i>
                    </span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'PortfolioIntro',
  props: {
    resumeData: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      selectedCategory: 'All'
    };
  },
  computed: {
    filteredItems() {
      if (!this.resumeData || !this.resumeData.projects) {
        return [];
      }
      if (this.selectedCategory === 'All') {
        return this.resumeData.projects;
      } else {
        return this.resumeData.projects.filter(item => item.category.toLowerCase() === this.selectedCategory.toLowerCase());
      }
    }
  },
  methods: {
    filterByCategory(category) {
      this.selectedCategory = category;
    }
  }
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

#portfolio {
  padding: 40px 0;
  background: #1e1e1e;
  font-family: 'Roboto', sans-serif;
}

.section-title h3 {
  font-weight: 700;
  color: #00d1b2;
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

.customColumn {
  margin-left: -0.05rem !important;
  margin-right: 0.05rem !important;
  margin-top: -0.05rem !important;
}

.custom .is-4 {
  color: #00d1b2;
  font-size: 22px;
  font-weight: 300;
  margin-bottom: 20px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

h4 {
  font-size: 26px;
  color: #fff;
  font-weight: 700;
}

.rounded-card {
  border-radius: 15px;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  padding: 1.2%;
  background-color: #292929;
}

.rounded-card:hover {
  transform: scale(1.05);
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.rounded-card .card-image {
  position: relative;
}

.figure {
  border-radius: 15px;
}

 .content {
  padding: 20px 40px;
  border-radius: 10px; /* Arredondar bordas */
  background: #292929; /* Fundo mais escuro */
}

 .section .container {
   padding: 2.5% !important;
 }



.content figure:not(:last-child) {
  margin-bottom: 0em !important;
}

.content figure {
  margin-left: 0em !important;
  margin-right: 0em !important;
  text-align: center !important;
}

.overlay-content .title {
  color: #00d1b2 !important;
  margin: 0.5rem 0;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
  opacity: 0;
  transition: opacity 0.5s ease;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  padding: 1rem;
}

.rounded-card:hover .overlay {
  opacity: 1;
}

.overlay-content {
  text-align: center;
}

.overlay-content .title,
.overlay-content .subtitle,
.overlay-content p {
  margin: 0.5rem 0;
}

.overlay-content .icon {
  margin-top: 1rem;
}

.image img {
  border-radius: 15px;
  object-fit: cover;
  width: 100%;
  height: 100%;
}

.overlay-content .icon {
  color: #fff;
}
</style>