<template>
  <div id="resume" class="resume segments">
    <div class="container">
      <div class="box-content">
        <div class="section-title color-g">
          <h3>Minha experiência</h3>
        </div>
          <div class="content">
            <!-- my experience -->
            <div class="columns">
              <div class="column is-6">
                <div class="content-left">
                  <div class="title-resume">
                    <h3>Experiência</h3>
                    <h2>Mais de 8 anos como <span>Desenvolvedor</span></h2>
                  </div>
                </div>
              </div>
              <div class="column is-6">
                <div class="content-right">
                  <ul class="timeline">
                    <li>
                      <h4>Pentagon Design</h4>
                      <span>Graphic Designer (2017 - 2019)</span>
                    </li>
                    <li>
                      <h4>Animate Studio</h4>
                      <span>Graphic Designer (2015 - 2017)</span>
                    </li>
                    <li>
                      <h4>Cute Studio</h4>
                      <span>Graphic Designer (2014 - 2015)</span>
                    </li>
                    <li>
                      <h4>City Printing</h4>
                      <span>Graphic Designer (2013 - 2014)</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>




            <!-- end my experience -->
          </div>
        <div>
          <Carousel ref="carouselRef" :itemsToShow="1.5" :wrapAround="true" :transition="500">
            <Slide v-for="slide in slides" :key="slide">
              <div class="carousel__item">{{ slide }}</div>
            </Slide>
          </Carousel>

          <div class="slider-dots">
            <div class="dot" v-for="(slide, index) in slides" :key="index" @click="goToSlide(index)">
              {{ slide }}
            </div>
          </div>
        </div>
        </div>
      </div>
  </div>
</template>




<script>
// If you are using PurgeCSS, make sure to whitelist the carousel CSS classes
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

export default {
  name: 'ResumeIntro',
  components: {
    Carousel,
    Slide,
  },
}
</script>

<style scoped>
.image img {
  /* display: table-cell; */
  height: auto;
  width: 100%;
  align-items: center;
  margin-left: -2.1rem;
  height: 21.3rem;
}
.slider-dots {
  display: flex;
  align-items: center;
  justify-content: center;

  .dot {
    width: 13px;
    height: 13px;
    border: 1px solid #fff;
    border-radius: 50%;
    will-change: transform;
    transform: translateX(0);
    transition: transform .2s;

    &:not(:last-of-type) {
      margin-right: .3rem;
    }
  }
}


.pagination-controls {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.pagination-controls button {
  margin: 0 5px;
  padding: 10px 15px;
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  cursor: pointer;
}

.pagination-controls button:hover {
  background-color: #ddd;
}

.resume .content {
  padding: 40px;
  border-radius: 3px;
}

.section-title  {
  color: #90ee90;
  display: flex;
  justify-content: center; /* Centraliza horizontalmente o conteúdo dentro do div */
  align-items: center; /* Se precisar centralizar verticalmente também */
}
.section-title h3 {
  font-size: 1.75rem;
  font-weight: 700;
  color: #90ee90;
  margin: auto; /* Assegura que a margem em tudo ao redor é igual, o que também centraliza o elemento */
}

.resume {
  background: #262626;
  color: #fafafa;
}

.resume h1, .resume h2, .resume h3, .resume h4, .resume h5, .resume h6 {
  line-height: 110%;
  margin: 0;
  font-weight: 500;
  color: #fff;
}

.resume h2 {
  font-weight: 900;
}

.resume .resume .section-title h3 {
  font-weight: 700;
  color: #90ee90;
  justify-content: center;
}

.resume .section-title h3 {
  color: #90ee90;
  margin-bottom: 2.5rem;
  margin-top: 1.1428em;
  font-weight: 700;
}


.resume .title-resume h3 {
  color: #90ee90;
  font-size: 22px;
  font-weight: 300;
  display: inline-block;
  margin-bottom: 20px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.resume .title-resume h2 {
  font-size: 50px;
  font-weight: 900;
}

.resume .title-resume h2 span {
  color: #90ee90;
}

.resume .timeline {
  position: relative;
  list-style-type: none;
}

.resume .timeline::before {
  content: '';
  position: absolute;
  left: 0;
  width: 2px;
  height: 100%;
  background: #fff;
}

.resume .timeline > li {
  margin-bottom: 30px;
  padding-left: 30px;
}

.resume .timeline > li::before {
  content: '';
  background: #fff;
  display: inline-block;
  position: absolute;
  border-radius: 50%;
  left: -7px;
  width: 16px;
  height: 16px;
}

.resume .timeline > li h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 22px;
}

/* Você pode incluir outras regras específicas de CSS aqui */
/* Considere também incluir estilos de media queries para responsividade */
</style>