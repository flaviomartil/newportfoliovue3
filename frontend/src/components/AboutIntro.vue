<template>
  <section class="section about" id="about">
    <div class="container">
      <div class="columns is-vcentered is-multiline">

        <!-- Coluna de texto -->
        <div class="column is-8-desktop is-12-tablet">
          <div class="content">
            <h3 class="title is-3 " style="color: #00d1b2;">Sobre Mim</h3>
            <h3 class="title is-2" style="color: #fff;">{{ about?.description }}</h3>
            <h4 class="is-subtitle" style="color: #fff;">{{ about?.subtitle }}</h4>
          </div>
        </div>
        <div class="column is-4-desktop is-12-tablet">
          <figure class="image">
            <img :src="about?.photo" style="height: 17.4rem; border-radius: 15px;" alt="Imagem de Introdução">
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
  background: #1e1e1e; /* Fundo escuro */
}

body {
  font-family: 'Roboto', sans-serif;
  background: #1e1e1e; /* Fundo escuro */
  color: #fff; /* Texto branco */
  font-size: 14px;
  line-height: 22px;
}

.about .content {
  padding: 20px 40px;
  border-radius: 10px; /* Arredondar bordas */
  background: #292929; /* Fundo mais escuro */
}

.is-3 {
  font-weight: 700;
  color: #00d1b2; /* Verde água */
}

.is-2 {
  color: #fff; /* Texto branco */
  font-size: 50px;
  font-weight: 900;
  margin-bottom: 30px;
}

.is-subtitle {
  color: #fff; /* Texto branco */
}

/* Estilos do Componente About */
.about .box-content {
  background: #1e1e1e; /* Fundo escuro */
  color: #fff; /* Texto branco */
  padding: 20px 40px;
  border-radius: 10px; /* Arredondar bordas */
}

.image img {

  border-radius: 15px; /* Arredondar a imagem */
}


</style>