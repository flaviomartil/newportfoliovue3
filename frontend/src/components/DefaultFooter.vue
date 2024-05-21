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
  background: #1e1e1e;
  padding: 40px;
  border-radius: 12px;
}

.footer {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 27px auto;
  background: #1e1e1e;
  color: #fff;
  padding: 8px 40px;
  transition: all .5s ease;
  width: 100%;
  box-shadow: 0px 5px 10px 3px rgba(0, 0, 0, 0.2);
  border-radius: 12px;
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