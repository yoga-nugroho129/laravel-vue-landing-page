<template>
  <div class="banner">
    <div class="container">
      <div class="row align-item-center">
        <div class="col-lg-6 col-md-12">
          <div class="banner-text-container">
            <div class="banner-text">
              <h1 class="title">PHP Hosting</h1>
              <h3 class="subtitle">
                Cepat, handal, penuh dengan
                <br />modul PHP yang Anda butuhkan
              </h3>
              <ul class="banner-item">
                <li>
                  <i class="fas fa-check-circle"></i> Solusi PHP untuk performa query yang lebih cepat.
                </li>
                <li>
                  <i class="fas fa-check-circle"></i> Konsumsi memory yang lebih rendah.
                </li>
                <li>
                  <i class="fas fa-check-circle"></i> Support PHP 5.3, PHP 5.3, PHP 5.5, PHP 5.6, PHP 7.
                </li>
                <li>
                  <i class="fas fa-check-circle"></i> Fitur enkripsi IonCube dan Zend Guard Loaders.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="banner-img">
            <img src="../../../public/svg/illustration banner PHP hosting-01.svg" alt="banner-img" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.banner {
  border-bottom: 1px solid #f1f1f1;
  padding: 20px 0;
}

.container {
  padding-left: 0;
  padding-right: 0;
}

.row {
  justify-content: space-between;
}

.banner-text-container {
  width: 100%;
  display: block;
}

.banner-img {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: flex-end;
}

img {
  width: 30rem;
}

@media only screen and (max-width: 995px) {
  .banner-img {
    display: flex;
    justify-content: center;
  }

  img {
    width: 35rem;
  }
}

@media only screen and (max-width: 600px) {
  .banner-text .title,
  .banner-text .subtitle {
    font-size: 20px;
  }

  .row {
    padding-left: 16px;
    padding-right: 16px;
  }

  .banner-img {
    display: flex;
    justify-content: center;
  }

  img {
    width: 24rem;
  }
}

@media only screen and (max-width: 475px) {
  .banner-item {
    font-size: 12px;
  }

  .banner-img {
    display: flex;
    justify-content: center;
  }

  img {
    width: 22rem;
  }
}
</style>