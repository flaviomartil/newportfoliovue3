<template>
  <section class="section" id="portfolio">
    <div class="container">
      <div class="content">
        <div class="section-title has-text-centered">
          <h3 class="title is-3 ">Meus Projetos</h3>
        </div>
        <div class="buttons is-centered">
          <button class="button is-white is-outlined" @click="filterByCategory('All')">Todos</button>
          <button class="button is-white is-outlined" @click="filterByCategory('Web')">Web</button>
          <button class="button is-white is-outlined" @click="filterByCategory('Desktop')">Desktop</button>
          <button class="button is-white is-outlined" @click="filterByCategory('Mobile')">Mobile</button>
        </div>
        <div class="columns is-multiline">
          <!-- Repeating image container for each portfolio item -->
          <div class="column is-4" v-for="item in filteredItems" :key="item.id">
            <div class="portfolio-image">
              <img :src="item.imgSrc" :alt="item.altText">
              <div class="overlay">
                <div class="portfolio-caption">
                  <div class="caption-title">
                    <h4 class="title is-4">{{ item.title }}</h4>
                  </div>
                  <div class="caption-subtitle">
                    <span>{{ item.category }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import portfolioImage1 from '../assets/images/portfolio1.jpg';
import portfolioImage2 from '../assets/images/portfolio2.jpg';
export default {
  name: 'PortfolioIntro',
  data() {
    return {
      selectedCategory: 'all',
      portfolioItems: [
        { id: 1, imgSrc: portfolioImage1, altText: 'Item 1', title: 'Classic Minimalist Door', category: 'Web' },
        { id: 2, imgSrc: portfolioImage2, altText: 'Item 2', title: 'Green Succulent Plants', category: 'Web' },
        { id: 3, imgSrc: portfolioImage1, altText: 'Item 1', title: 'Classic Minimalist Door', category: 'Web' },
        { id: 4, imgSrc: portfolioImage2, altText: 'Item 2', title: 'Green Succulent Plants', category: 'Web' },
        { id: 5, imgSrc: portfolioImage1, altText: 'Item 1', title: 'Classic Minimalist Door', category: 'Web' },
        { id: 6, imgSrc: portfolioImage2, altText: 'Item 2', title: 'Green Succulent Plants', category: 'Web' },
      ],
    };
  },
  computed: {
    filteredItems() {
      if (this.selectedCategory === 'Web') {
        return this.portfolioItems;
      } else {
        return this.portfolioItems.filter(item => item.category.toLowerCase() === this.selectedCategory.toLowerCase());
      }
    }
  },
  methods: {
    filterByCategory(category) {
      this.selectedCategory = category;
    }
  },
};
</script>

<style scoped>
@keyframes slide-down {
  from {
    transform: translateY(-101%);
  }
  to {
    transform: translateY(0%);
  }
}

#portfolio {
  padding: 40px;
  background: #262626;
}

.portfolio-image {
  position: relative;
}
.resume .content {
  padding: 40px;
  border-radius: 3px;
}

.overlay {
  display: flex;
  align-items: flex-end;
  justify-content: center;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  transition: opacity 0.5s ease;
}

.portfolio-image:hover .overlay {
  opacity: 1;
}

.portfolio-caption {
  text-align: center;
  padding: 1rem;
}

.portfolio-caption .caption-title,
.portfolio-caption .caption-subtitle {
  overflow: hidden;
  display: block;
}

.portfolio-caption .caption-title h4,
.portfolio-caption .caption-subtitle span {
  animation: slide-down 0.6s cubic-bezier(0.45, 0.81, 0.83, 0.18) forwards;
  opacity: 0;
}

.portfolio-caption .caption-title h4 {
  animation-delay: 0.1s;
}

.portfolio-caption .caption-subtitle span {
  animation-delay: 0.5s;
}

.button.is-white.is-outlined {
}

.button.is-white.is-outlined:hover {
  background-color: #90ee90;
  color: #363636;
}

.portfolio .resume .section-title h3 {
  font-weight: 700;
  color: #90ee90;
  justify-content: center;
}

.section-title .title {
  color: #90ee90;
}
</style>