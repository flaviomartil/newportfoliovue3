<template>
  <div class="footer segments">
    <div class="container">
      <div class="box-content">
        <p>Copyright © All Right Reserved</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'DefaultFooter'
}
</script>

<style scoped>
.box-content {
  background: #262626;
  padding: 40px;
  border-radius: 3px;
}

.footer {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 27px auto; /* Se a sua navbar está dentro de um container, ajuste a margem */
  background: #262626;
  color: #fff;
  padding: 8px 40px;
  transition: all .5s ease;
  width: 100%; /* Descomente esta linha se a navbar não estiver esticando pela largura total */
}

body {
  font-family: 'Roboto', sans-serif;
  background: #212121;
  color: #fafafa;
  font-size: 14px;
  line-height: 22px;
}
.footer {
  text-align: center;
}
.footer p {
  margin-bottom: 0;
}
</style>