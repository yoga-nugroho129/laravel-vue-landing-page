<template>
  <div class="vue-navbar">
    <div class="container top-nav">
      <div class="promo">
        <a href="#">
          <i class="fas fa-tag promo-icon"></i>
          <span class="promo-text">Gratis 9 Ebook Cara Cerdas Menggunakan Domain [x]</span>
        </a>
      </div>
      <ul class="contact">
        <li>
          <a href="#">
            <i class="fas fa-phone-alt"></i>
            <span class="contact-text">0274-5305505</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-comments"></i>
            <span class="contact-text">Live-Chat</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-user-circle"></i>
            <span class="contact-text">Member Area</span>
          </a>
        </li>
      </ul>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container nav-container">
        <a class="navbar-brand" href="#">
          <img src="/images/niagahoster-logo.png" alt />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Hosting</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Domain</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Server</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Website</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Afiliasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Review</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
html {
  font-size: 100%;
}

img {
  width: 200px;
}

.container .top-nav {
  margin-bottom: 5px;
}

.top-nav {
  display: flex;
  justify-content: space-between;
  font-size: 12px;
  padding: 10px 0;
}

ul {
  margin-bottom: 0px;
}
.contact {
  display: flex;
  list-style-type: none;
}

a {
  color: #4c4c4c;
}

a:hover {
  color: #808080;
  text-decoration: none !important;
}

.nav-container {
  padding: 0;
}

@media only screen and (max-width: 475px) {
  .promo-icon {
    display: none;
  }
}

@media only screen and (max-width: 775px) {
  .contact-text {
    display: none;
  }

  .promo-text {
    font-size: 10px;
  }

  .top-nav {
    padding-left: 16px;
    padding-right: 16px;
  }
}

@media only screen and (max-width: 1000px) {
  .contact-text,
  .promo-text {
    font-size: 10px;
  }
}

.contact li {
  margin-left: 20px;
  text-align: right;
}

.navbar {
  border-top: 1px solid #f1f1f1;
  border-bottom: 1px solid #f1f1f1;
  padding-top: 0;
  padding-bottom: 0;
}

.navbar-collapse {
  justify-content: flex-end;
}

.nav-item a {
  padding: 8px 0 8px 16px !important;
}
</style>