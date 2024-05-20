<template>
  <div id="resume" class="resume section">
    <div class="container">
      <div class="box content">
        <div class="section-title has-text-centered">
          <h3 class="title is-3">Meu currículo</h3>
        </div>
        <carousel :autoplay="false" :display="true" :nav="false" :items="1" ref="carousel">
          <!-- Experience Section -->
          <div class="content">
            <div class="title is-4">
              <h3 class="title is-4">Experiência</h3>
            </div>
            <div class="timeline">
              <div class="timeline-item"
                   v-for="(experience, index) in resumeData?.experiences"
                   :key="experience.id"
                   :class="{ 'is-left': index % 2 === 0, 'is-right': index % 2 !== 0 }">
                <div class="timeline-content">
                  <h4 class="title is-5">{{ experience?.company_name }} - {{ experience?.description }}</h4>
                  <p>
                    ({{ formatDate(experience?.started_in) }} - {{ experience?.finished_in ? formatDate(experience?.finished_in) : 'Atualmente' }})
                  </p>
                  <p>
                    Tecnologias Utilizadas: <span>{{ experience?.technologies }}</span>
                  </p>
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
                    <h3 class="title is-4">Educação</h3>
                    <h2 v-for="education in resumeData?.components?.education" :key="education.id">
                      {{ education.subtitle }}
                    </h2>
                  </div>
                </div>
              </div>
              <div class="column is-half">
                <div class="timeline-content"> <!-- Adicione a classe 'timeline-content' à div externa -->
                  <ul class=" education-timeline"> <!-- Adicione a classe 'education-timeline' -->
                    <li v-for="education in resumeData?.education" :key="education.id" style="margin-bottom: 20px;">
            <span>
              <h4 class="title is-5">{{ education.name }} - {{ education.institution }}</h4>
              {{ education.description }}<br>
              ({{ formatDate(education.started_in) }} -
              {{ education.finished_in ? formatDate(education.finished_in) : 'Atualmente' }})
              <br><br>
            </span>
                    </li>
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
                    <h3 class="title is-4">Skills</h3>
                    <h2 v-for="skills in resumeData?.components?.skills" :key="skills.id">{{ skills.subtitle }}</h2>
                  </div>
                </div>
              </div>
              <div class="column is-half">
                <article class="message">
                  <div class="message-header" role="button" aria-expanded="true" aria-controls="personalSkill">
                    <p><i class="fas fa-circle"></i> Skills Pessoais</p>
                  </div>
                  <div id="personalSkill" class="message-body">
                    <ul class="personalSkill" v-if="resumeData?.skills">
                      <li v-for="(skill, index) in resumeData.skills" :key="index">
                        <div class="skill-title">
                          <span>{{ skill.name }}</span>
                        </div>
                        <progress class="progress is-primary" :value="skill.progress" max="100">{{ skill.progress }}%</progress>
                      </li>
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
  props: {
    resumeData: {
      type: Object,
      required: true
    }
  },

  methods: {
    formatDate(dateString) {
      const options = {day: '2-digit', month: '2-digit', year: 'numeric'};

      // Verifica se a data é válida
      if (!dateString) return '';

      const date = new Date(dateString);

      // Formata a data no estilo desejado
      return new Intl.DateTimeFormat('pt-BR', options).format(date);
    },
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
#resume {
  padding: 27px 0;
  background: #262626;
}

.box {
  background: #262626;
  color: #fff;
  padding: 40px;
  border-radius: 3px;
}

.section-title h3 {
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

h4 {
  font-size: 30px;
  color: #fff;
}
@media screen and (min-width: 769px), print
.column.is-half, .column.is-half-tablet {
  flex: none;
  width: 49.9%;
}

.timeline {
  position: relative;
  padding: 20px 0;
  margin-top: 40px;
  display: table-row;
  flex-direction: column;
  min-height: calc(100vh - 120px); /* Definir altura mínima da timeline */
}

.timeline::after {
  content: '';
  position: absolute;
  width: 2px;
  background-color: #ddd;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -1px;
}

.timeline-item {
  position: relative;
  width: 45%;
  padding: 10px 40px;
  box-sizing: border-box;
}

.timeline-item.is-left {
  float: left;
  clear: left;
  text-align: center;
}

.timeline-item.is-right {
  float: right;
  clear: right;
  text-align: center;
}

.timeline-content {
  background-color: #f5f5f5;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  color: #444; /* Define a cor do texto para garantir que seja visível */
  position: relative;
  min-height: 7.7rem;
  max-height: 10.9rem;
}

.timeline-content h4 {
  margin-bottom: 5px;
  font-weight: bold;
  color: #333; /* Garantir que o texto do título seja visível */
}

.timeline-content p {
  margin-bottom: 5px;
  color: #555; /* Garantir que o texto do parágrafo seja visível */
}

/* Central Indicator Circle */
.timeline-item::after {
  content: '';
  position: absolute;
  width: 20px;
  height: 20px;
  left: 50%;
  background-color: #262626;
  border: 3px solid #ddd;
  top: 0.8rem;
  border-radius: 50%;
  z-index: 1;
  margin-left: -10px; /* half of width to center it */
}

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
.owl-carousel .owl-nav .owl-prev,
.owl-carousel .owl-nav .owl-next {
  display: none !important;
}
</style>