<template>
  <div id="resume" class="section">
    <div class="container">
      <div class="box content">
        <div class="section-title has-text-centered">
          <h3 class="title is-3">My Resume</h3>
        </div>
        <carousel :autoplay="true" :nav="false" :dots="false" dots-container:=".owl-dots" :items="1">

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
                      <span>Graphic Designer (2017 - 2019)</span>
                    </li>
                    <li>
                      <h4 class="title is-5">Animate Studio</h4>
                      <span>Graphic Designer (2015 - 2017)</span>
                    </li>
                    <li>
                      <h4 class="title is-5">Cute Studio</h4>
                      <span>Graphic Designer (2014 - 2015)</span>
                    </li>
                    <li>
                      <h4 class="title is-5">City Printing</h4>
                      <span>Graphic Designer (2013 - 2014)</span>
                    </li>
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
                      <span>Graphic Design Faculty (2016 - 2019)</span>
                    </li>
                    <li>
                      <h4 class="title is-5">City University</h4>
                      <span>Science Faculty (2012 - 2015)</span>
                    </li>
                    <li>
                      <h4 class="title is-5">International University</h4>
                      <span>Technical Information (2010 - 2012)</span>
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
                    <h3 class="title is-4">Skill</h3>
                    <h2>With good <span>Personal</span> and <span>Professional Skills</span></h2>
                  </div>
                </div>
              </div>
              <div class="column is-half">
                <div class="content-right">
                  <div class="accordion is-accordion">
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
                          <li>
                            <div class="skill-title">
                              <span>Innovation</span>
                            </div>
                            <progress class="progress is-primary" value="80" max="100">80%</progress>
                          </li>
                          <li>
                            <div class="skill-title">
                              <span>Communication</span>
                            </div>
                            <progress class="progress is-primary" value="90" max="100">90%</progress>
                          </li>
                          <li>
                            <div class="skill-title">
                              <span>Teamwork</span>
                            </div>
                            <progress class="progress is-primary" value="95" max="100">95%</progress>
                          </li>
                        </ul>
                      </div>
                    </article>

                    <article class="message">
                      <div class="message-header" role="button" aria-expanded="false" aria-controls="proSkill">
                        <p><i class="fas fa-circle"></i> Professional Skill</p>
                      </div>
                      <div id="proSkill" class="message-body" style="display: none;">
                        <ul class="pro-skill">
                          <li>
                            <div class="skill-title">
                              <span>Graphic Design</span>
                            </div>
                            <progress class="progress is-primary" value="98" max="100">98%</progress>
                          </li>
                          <li>
                            <div class="skill-title">
                              <span>HTML & CSS</span>
                            </div>
                            <progress class="progress is-primary" value="90" max="100">90%</progress>
                          </li>
                          <li>
                            <div class="skill-title">
                              <span>JavaScript</span>
                            </div>
                            <progress class="progress is-primary" value="80" max="100">80%</progress>
                          </li>
                          <li>
                            <div class="skill-title">
                              <span>PHP</span>
                            </div>
                            <progress class="progress is-primary" value="75" max="100">75%</progress>
                          </li>
                          <li>
                            <div class="skill-title">
                              <span>Photography</span>
                            </div>
                            <progress class="progress is-primary" value="70" max="100">70%</progress>
                          </li>
                        </ul>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="owl-dots">
            <div class="owl-dot dotsyles"></div>
            <div class="owl-dot dotsyles"></div>
            <div class="owl-dot dotsyles"></div>
          </div>

        </carousel>
      </div>

    </div>
  </div>
</template>

<script>
import { defineComponent } from "vue";
import carousel from 'vue-owl-carousel/src/Carousel'
export default defineComponent({
  name: "ResumeIntro",
  components: {
    carousel
  },
  mounted() {
    document.querySelectorAll('.message-header').forEach((header) => {
      header.addEventListener('click', function() {
        const content = this.nextElementSibling;
        const isActive = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isActive);
        content.style.display = isActive ? 'none' : 'block';
      });
    });
  }
});
</script>

<style scoped>

.owl-dots{
  width: 100%;
  text-align: center;
}
.dotsyles{
  width: 10px;
  height: 10px;
  border: 1px solid red;
  background: red;
  display: inline-block;
}
.dotsyles:hover{
  cursor: pointer;
  background: green;
  border: 1px solid green;
}
h4{
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

#resume{
  padding: 27px 0;
  background: #262626;
}

#resume .content {
  padding: 40px;
  border-radius: 3px;
}

.owl-carousel .owl-nav .owl-prev, .owl-carousel .owl-nav .owl-next {
  display: none !important;
}


.box {
  background: #262626; /* Fundo branco */
  color: #fff; /* Texto preto */
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

.section{
  padding: 27px 0;
  background: #262626;
}

.is-5{
    font-weight: 700;
    margin-bottom: 15px;
  color: #fff; /* Texto preto */
    font-size: 22px;
}

.timeline {
  list-style: none;
  padding-left: 0;
}
.timeline li {
  margin-bottom: 15px;
}



.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
  background: -webkit-linear-gradient(#fe6e00, #eb9859);
}
.owl-theme .owl-nav [class*=owl-]:hover {
  background: -webkit-linear-gradient(#fe6e00, #eb9859);
  color: #FFF;
  text-decoration: none;
}

.skill-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 5px;
}
</style>