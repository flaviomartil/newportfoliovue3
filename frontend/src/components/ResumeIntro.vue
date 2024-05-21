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
              <h3 class="title is-4 has-text-centered">Experiência</h3>
            </div>
            <div class="timeline">
              <div class="timeline-item"
                   v-for="(experience, index) in resumeData?.experiences"
                   :key="experience.id"
                   :class="{ 'is-left': index % 2 === 0, 'is-right': index % 2 !== 0 }">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                  <p class="heading">{{ formatDate(experience?.started_in) }} - {{ experience?.finished_in ? formatDate(experience?.finished_in) : 'Atualmente' }}</p>
                  <h4 class="title is-5">{{ experience?.company_name }}</h4>
                  <p>{{ experience?.description }}</p>
                  <p>
                    Tecnologias Utilizadas: <span>{{ experience?.technologies }}</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- Education Section -->
          <div class="content educationcont">
            <div class="title is-4">
              <h3 class="title is-4 has-text-centered">Educação</h3>
            </div>
            <div class="timeline">
              <div class="timeline-item"
                   v-for="(education, index) in resumeData?.education"
                   :key="education.id"
                   :class="{ 'is-left': index % 2 === 0, 'is-right': index % 2 !== 0 }">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                  <h4 class="title is-5">{{ education.name }}</h4>
                  <p class="heading">
                    {{ formatDate(education.started_in) }} -
                    {{ education.finished_in ? formatDate(education.finished_in) : 'Atualmente' }}
                  </p>
                  <h2>{{ education.subtitle }}</h2>
                  <p>{{ education.description }}</p>
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
      </div>
    </div>
  </div>
</template>

<script>
import { defineComponent, ref } from 'vue';
import carousel from 'vue-owl-carousel/src/Carousel';

export default defineComponent({
  name: 'ResumeIntro',
  components: {
    carousel,
  },
  props: {
    resumeData: {
      type: Object,
      required: true
    }
  },
  methods: {
    formatDate(dateString) {
      const options = { day: '2-digit', month: '2-digit', year: 'numeric' };

      if (!dateString) return '';

      const date = new Date(dateString);
      return new Intl.DateTimeFormat('pt-BR', options).format(date);
    },
  },
  setup() {
    const activeDotIndex = ref(0);
    const dots = ref([0, 1, 2]);

    return {
      activeDotIndex,
      dots,
    };
  },
});
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

#resume {
  padding: 40px 0;
  background: #1e1e1e;
  font-family: 'Roboto', sans-serif;
}

.box {
  background: #1e1e1e;
  color: #fff;
  padding: 50px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.section-title h3 {
  font-weight: 700;
  color: #00d1b2;
}

.is-4 {
  color: #00d1b2;
  font-size: 22px;
  font-weight: 400;
  margin-bottom: 20px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

h4 {
  font-size: 26px;
  color: #fff;
  font-weight: 700;
}

.timeline {
  display: flex;
  flex-direction: column;
  align-items: center;
  position: relative;
  padding: 20px 0;
  margin-top: 40px;
  min-height: 70vh; /* Garantir que ocupa a altura mínima correta */
}

.timeline::before {
  content: '';
  position: absolute;
  width: 2px;
  background-color: #00d1b2;
  top: 0;
  bottom: 0;
  left: 50%;
}

.timeline-item {
  position: relative;
  width: 50%;
  padding: 20px;
  box-sizing: border-box;
}

.timeline-item.is-left {
  align-self: flex-start;
  text-align: center;
}

.timeline-item.is-right {
  align-self: flex-end;
  text-align: center;
}

.timeline-content {
  background-color: #292929;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  position: relative;
}

.timeline-content h4 {
  margin-bottom: 10px;
  font-weight: bold;
  color: #00d1b2;
}

.timeline-content p {
  margin-bottom: 10px;
  color: #f5f5f5;
}

.timeline-item::after {
  content: '';
  position: absolute;
  width: 20px;
  height: 20px;
  left: 50%;
  background-color: #1e1e1e;
  border: 3px solid #00d1b2;
  top: 15px;  /* Ajuste conforme necessário */
  border-radius: 50%;
  z-index: 1;
  margin-left: -10px;
}

@media screen and (max-width: 768px) {
  .timeline-item {
    width: 100% !important;
    text-align: center;
    align-self: center;
    transform: translateX(0);
  }

  .timeline-item.is-right,
  .timeline-item.is-left {
    text-align: center;
  }

  .timeline::before {
    left: 50%;
  }
}

.owl-carousel .owl-dots .owl-dot span {
  background: #757575;
}

.owl-carousel .owl-dots .owl-dot.active span,
.owl-carousel .owl-dots .owl-dot:hover span {
  background-color: #00d1b2;
}

.owl-carousel-top .owl-next,
.owl-carousel-top .owl-prev {
  display: none !important;
}

.personalSkill .skill-title {
  color: #00d1b2;
}

.progress.is-primary {
  background-color: #00d1b2;
}

.content h2:not(:first-child) {
  color: #f5f5f5;
  font-size: 40px;
  font-weight: 900;
}

.section {
  padding: 40px 0;
  background: #1e1e1e;
}

.is-5 {
  font-weight: 700;
  color: #00d1b2;
}

.educationcont {
  margin-left: 4.1%;
}
</style>