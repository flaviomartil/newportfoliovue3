<template>
  <div id="resume" class="resume section">
    <div class="container">
      <div class="box content">
        <div class="section-title has-text-centered">
          <h3 class="title is-3">My Resume</h3>
        </div>
        <carousel :autoplay="false" :display="true" :nav="false" :items="1" ref="carousel">
          <!-- Experience Section -->
          <div class="content">
            <div class="columns">
              <div class="column is-half">
                <div class="content-left">
                  <div class="title is-4">
                    <h3 class="title is-4">Experience</h3>
                    <h2>More than 6 years experience as a <span>Designer</span></h2>
                  </div>
                </div>
              </div>
              <div class="column is-half">
                <div class="timeline-content">
                  <ul class="timeline">
                    <li>
                      <h4 class="title is-5">Pentagon Design</h4>
                      <span>Graphic Designer (2017-2019)</span>
                    </li>
                    <!-- Adicione mais itens se necessário -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Education Section -->
          <div class="content">
            <div class="columns">
              <div class="column is-half">
                <div class="content-left">
                  <div class="title is-4">
                    <h3 class="title is-4">Education</h3>
                    <h2>Learning experience in a few <span>Professional Universities</span></h2>
                  </div>
                </div>
              </div>
              <div class="column is-half">
                <div class="timeline-content">
                  <ul class="timeline">
                    <li>
                      <h4 class="title is-5">National University</h4>
                      <span>Graphic Design Faculty (2016-2019)</span>
                    </li>
                    <!-- Adicione mais itens se necessário -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Skills Section -->
          <div class="content">
            <div class="columns">
              <div class="column is-half">
                <div class="content-left">
                  <div class="title is-4">
                    <h3 class="title is-4">Skill</h3>
                    <h2>With good <span>Personal</span> and <span>Professional Skills</span></h2>
                  </div>
                </div>
              </div>
              <div class="column is-half">
                <article class="message">
                  <div class="message-header" role="button" aria-expanded="true" aria-controls="personalSkill">
                    <p><i class="fas fa-circle"></i> Personal Skill</p>
                  </div>
                  <div id="personalSkill" class="message-body">
                    <ul class="personalSkill">
                      <li>
                        <div class="skill-title">
                          <span>Creativity</span>
                        </div>
                        <progress class="progress is-primary" value="85" max="100">85%</progress>
                      </li>
                      <!-- Adicione mais habilidades se necessário -->
                    </ul>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </carousel>
<!--        <CarouselDots :dots="dots" :activeIndex="activeDotIndex" @changeSlide="changeSlide" />-->
      </div>
    </div>
  </div>
</template>

<script>
import {defineComponent, onMounted, ref} from 'vue';
import carousel from 'vue-owl-carousel/src/Carousel';
import CarouselDots from './CarouselDots.vue';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

export default defineComponent({
  name: 'ResumeIntro',
  components: {
    carousel,
    // CarouselDots,
  },
  setup() {
    const activeDotIndex = ref(0);
    const dots = ref([0, 1, 2]); // Adapte conforme o número de slides

    const changeSlide = (index) => {
      const owl = this.$refs.carousel  // Acessa o DOM do owl-carousel
      console.log(owl);
      owl.trigger('to.owl.carousel', [index, 300]);
    };



    return {
      activeDotIndex,
      dots,
      changeSlide,
    };
  },
});
</script>


<style scoped>
/* Estilos previamente definidos */
.owl-carousel .owl-dots .owl-dot span {
  background: #999 !important;
}
.owl-carousel .owl-dots .owl-dot.active span,
.owl-carousel .owl-dots .owl-dot:hover span {
  background-color: #0088cc !important;
}
.owl-carousel-top .owl-next,
.owl-carousel-top .owl-prev {
  background-color: #0088cc !important;
}

h4 {
  font-size: 30px;
  color: #fff;
}

#resume .timeline::before {
  position: absolute;
  left: 7px;
}
#resume .timeline li::before {
  position: absolute;
  left: 0;
}

#resume {
  padding: 27px 0;
  background: #262626;
}

#resume .content {
  padding: 40px;
  border-radius: 3px;
}

.owl-carousel .owl-nav .owl-prev,
.owl-carousel .owl-nav .owl-next {
  display: none !important;
}

.box {
  background: #262626;
  color: #fff;
  padding: 40px;
  border-radius: 3px;
}

.is-3 {
  font-weight: 700;
  color: #90ee90;
}

.is-4 {
  color: #90ee90;
  font-size: 22px;
  font-weight: 300;
  display: inline-block;
  margin-bottom: 20px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.content h2:not(:first-child) {
  color: #fff;
  font-size: 50px;
  margin-top: 0em !important;
  font-weight: 900;
}

.section {
  padding: 27px 0;
  background: #262626;
}

.is-5 {
  font-weight: 700;
  margin-bottom: 15px;
  color: #fff;
  font-size: 22px;
}

.timeline {
  list-style: none;
  padding-left: 0;
}
.timeline li {
  margin-bottom: 15px;
}

.skill-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 5px;
}


</style>