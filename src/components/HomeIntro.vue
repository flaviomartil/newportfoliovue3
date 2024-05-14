<template>
  <section class="section home-intro" id="homeIntro">
    <div class="container">
      <div class="columns is-vcentered is-multiline">

        <!-- Coluna de texto -->
        <div class="column is-8-desktop is-12-tablet">
          <div class="content">
            <p class="subtitle is-5">Eu sou Flávio Martil</p>
            <h1 class="title is-2">Desenvolvedor FullStack</h1>
            <button class="button is-primary">Contato</button>
          </div>
        </div>

        <!-- Coluna de imagem -->
        <div class="column is-4-desktop is-12-tablet">
          <figure class="image-right">
            <img src="../assets/images/intro-image.png" alt="Intro Image">
          </figure>
        </div>

      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'HomeIntro'
}
</script>

<style scoped>
.home-intro {
  padding: 27px 0;
  background: #262626;
}

.home-intro .content {
  padding: 40px;
  border-radius: 3px;
}




.home-intro .content .subtitle {
  font-family: 'Roboto', sans-serif;
  font-size: 26px;
  font-weight: 300;
  color: #fafafa;
  margin-bottom: 10px; /* Ajuste a margem conforme necessário */
  letter-spacing: 1px;
  text-transform: uppercase;
}

.home-intro .content .title {
  font-family: 'Roboto', sans-serif;
  font-size: 70px;
  font-weight: 900;
  background: -webkit-linear-gradient(right, #004d00, #008000);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 87px;
  margin-bottom: 20px; /* Ajuste a margem conforme necessário */
}

.home-intro .intro-content .intro-caption h2 {
  font-size: 70px;
  font-weight: 900;

}

.home-intro .content .button {
  background-image: linear-gradient(to left, #006400, #004d00);
  color: #fff;
  border: 0;
  border-radius: 2px;
  padding: 13px 20px;
  font-family: 'Roboto', sans-serif;
  font-weight: 700;
  font-size: 16px;
  overflow: hidden;
}

/* Correções adicionais e personalizações devem ser adicionar aqui */
</style>
