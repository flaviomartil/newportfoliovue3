<template>
  <section class="section about" id="about">
    <div class="container">
      <div class="columns is-vcentered is-multiline">

        <!-- Coluna de texto -->
        <div class="column is-8-desktop is-12-tablet">
          <div class="content">
              <h3 class="title is-3">Sobre mim</h3>
              <h3 class="title is-2">{{ about?.description }}</h3>
              <p>Tecnologias Back-End: {{ about?.back_techs }}</p>
              <p>Tecnologias Front-End: {{ about?.front_techs }}</p>
            </div>
          </div>
        <div class="column is-4-desktop is-12-tablet">
          <figure class="image">
            <img src="{{about?.photo}}" style="
    height: 17.4rem;
" alt="Intro Image">
          </figure>
        </div>
        </div>
      </div>

  </section>
</template>

<script>
export default {
  name: 'AboutIntro',
  props: {
    about: {
      type: Object,
      required: true
    }
  }
};
</script>

<style scoped>
/* Estilos Gerais */

.about{
  padding: 27px 0;
  background: #262626;
}

figure {
  padding-right: 2.0625rem;
}

body {
  font-family: 'Roboto', sans-serif;
  background: #fafafa; /* Fundo branco */
  color: #212121; /* Texto preto */
  font-size: 14px;
  line-height: 22px;
}

.about .content {
  padding: 40px;
  border-radius: 3px;
}

.is-3 {
  font-weight: 700;
  color: #90ee90;
}

.content h3:not(:first-child) {
  margin-top: 0.4333em;
}

.about .content-left .content h2 {
  font-size: 50px;
  font-weight: 900;
  margin-bottom: 30px;
}

/* Estilos do Componente About */
.about .box-content {
  background: #fff; /* Fundo branco */
  color: #212121; /* Texto preto */
  padding: 40px;
  border-radius: 3px;
}

.is-2 {
  color: #fff;
  font-size: 50px;
  font-weight: 900;
  margin-bottom: 30px;
}

.about .content-right {
  background: url(../assets/images/about.png);
  background-size: cover;
  background-position: 50% 100%;
  height: 100%;
  border-radius: 0 3px 3px 0;
}
</style>