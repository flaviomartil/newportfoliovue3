<template>
  <section id="contact" class="section">
    <div class="container">
      <div class="box">
        <div class="columns">
          <div class="column is-half">
            <h3 class="title is-3" style="color: #00d1b2;">Me contate</h3>
            <h2 class="subtitle is-created" v-for="contact in resumeData?.components?.contact" :key="contact.id" style="color: #fff;">{{ contact.subtitle }}</h2>
            <div class="social-links">

              <a v-for="(contact, index) in resumeData?.contact" :key="index" :href="contact.url" class="icon">
                <i class="fab fa-facebook-f" v-if="contact.type === 'facebook'"></i>
                <i class="fab fa-instagram" v-if="contact.type === 'instagram'"></i>
                <i class="fab fa-linkedin-in" v-if="contact.type === 'linkedin'"></i>
                <i class="fab fa-whatsapp" v-if="contact.type === 'whatsapp'"></i>
                <i class="fas fa-envelope" v-if="contact.type === 'email'"></i>
              </a>
            </div>
          </div>
          <div class="column is-half">
            <form action="contact-form.php" class="contact-form" id="contact-form" method="post">
              <div class="field is-horizontal">
                <div class="field-body">
                  <div class="field">
                    <p class="control is-expanded">
                      <input class="input form-control" type="text" placeholder="Nome" name="form-name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control is-expanded">
                      <input class="input form-control" type="text" placeholder="Sobrenome" name="form-last-name">
                    </p>
                  </div>
                </div>
              </div>
              <div class="field is-horizontal">
                <div class="field-body">
                  <div class="field is-expanded">
                    <p class="control is-expanded">
                      <input class="input form-control" type="email" placeholder="Email" name="form-email">
                    </p>
                  </div>
                  <div class="field is-expanded">
                    <p class="control is-expanded">
                      <input class="input form-control" type="text" placeholder="Assunto" name="form-subject">
                    </p>
                  </div>
                </div>
              </div>
              <div class="field">
                <p class="control">
                  <textarea class="textarea form-control" rows="5" placeholder="Mensagem" name="form-message"></textarea>
                </p>
              </div>
              <p class="control buttons">
                <button class="button is-white is-outlined">Enviar mensagem</button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ContactIntro',
  props: {
    resumeData: {
      type: Object,
      required: true
    }
  },
};
</script>

<style scoped>
::placeholder {
  color: #5C6369;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  font-family: 'Roboto', sans-serif;
}

.form-control {
  border: 0;
  border-bottom: 1px solid #525252;
  border-radius: 0;
  background: transparent;
  padding: 0;
  color: #fafafa;
}

.form-control:hover {
  border-color: #90ee90;
}

.form-control:focus {
  outline: 0;
  box-shadow: none;
  border-color: #90ee90;
}

#contact {
  background: #1e1e1e;
}

#contact .box {
  padding: 40px;
  border-radius: 10px;
  background: #292929;
}

.columns h3 {
  font-size: 1.75rem;
  font-weight: 700;
  color: #00d1b2;
  margin: auto;
}

#contact .content .subtitle {
  font-family: 'Roboto', sans-serif;
  font-size: 50px;
  font-weight: 900;
  color: #fafafa;
  margin-bottom: 10px;
  letter-spacing: 1px;
  text-transform: uppercase;
}

#contact .content .title {
  font-family: 'Roboto', sans-serif;
  font-size: 70px;
  font-weight: 900;
  background: -webkit-linear-gradient(right, #004d00, #008000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
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

.social-links .icon {
  margin-right: 10px;
}

.social-links .icon:last-child {
  margin-right: 0;
}

.social-links .icon i {
  font-size: 20px;
  transition: all .2s ease;
  color: #fff;
}

.social-links .icon:hover i {
  color: #00d1b2;
}

.field .input, .field .textarea {
  border-color: #525252;
  background-color: transparent;
}

.field .input:focus, .field .textarea:focus {
  border-color: #00d1b2;
}

.title:not(.is-spaced)+.subtitle {
  margin-top: 0rem !important;
}

.button.is-link {
  margin-top: 15px;
}

.is-created {
  font-size: 50px;
  font-weight: 900;
  margin-bottom: 50px;
  color: #fafafa;
}
</style>