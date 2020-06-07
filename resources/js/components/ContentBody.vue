<template>
  <div class="content-body">
    <div class="container">
      <div class="tech-grid">
        <img
          src="../../../public/svg/zendguard.svg"
          class="card-img-top tech-img tech-img-1"
          alt="zg"
        />
        <img
          src="../../../public/svg/composer.png"
          class="card-img-top tech-img tech-img-2"
          alt="cps"
        />
        <img
          src="../../../public/svg/ioncube.png"
          class="card-img-top tech-img tech-img-3"
          alt="ic"
        />
        <h5 class="tech-text tech-text-1">PHP Zend Guard Loader</h5>
        <h5 class="tech-text tech-text-2">PHP Composer</h5>
        <h5 class="tech-text tech-text-3">PHP Ioncube Loader</h5>
      </div>

      <Packages></Packages>

      <div class="limit-section">
        <h3 class="subtitle text-center">Powerfull dengan Limit PHP yang Lebih Besar</h3>
        <div class="row">
          <div class="col-md-6">
            <table class="table table-striped text-center">
              <tbody>
                <tr>
                  <th scope="row">
                    <i class="fas fa-check-circle"></i>
                  </th>
                  <td>max execution time 300s</td>
                </tr>
                <tr>
                  <th scope="row">
                    <i class="fas fa-check-circle"></i>
                  </th>
                  <td>max execution time 300s</td>
                </tr>
                <tr>
                  <th scope="row">
                    <i class="fas fa-check-circle"></i>
                  </th>
                  <td>php memory limit 1024 MB</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table table-striped text-center">
              <tbody>
                <tr>
                  <th scope="row">
                    <i class="fas fa-check-circle"></i>
                  </th>
                  <td>post max size 128 MB</td>
                </tr>
                <tr>
                  <th scope="row">
                    <i class="fas fa-check-circle"></i>
                  </th>
                  <td>upload max filesize 128 MB</td>
                </tr>
                <tr>
                  <th scope="row">
                    <i class="fas fa-check-circle"></i>
                  </th>
                  <td>max input vars 2500</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <hr />
      <div class="hosting-package">
        <div class="subtitle text-center">Semua Paket Hosting Sudah Termasuk</div>
        <div class="row text-center">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="../../../public/svg/icon PHP Hosting_PHP Semua Versi.svg" class="hosting-img" />
            <h3 class="hosting-title">PHP Semua Versi</h3>
            <p class="hosting-text">Pilih mulai dari veri PHP 5.3 s/d 7. Ubah sesuka Anda!</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="../../../public/svg/icon PHP Hosting_My SQL.svg" class="hosting-img" />
            <h3 class="hosting-title">MySQL Versi 5.6</h3>
            <p class="hosting-text">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="../../../public/svg/icon PHP Hosting_CPanel.svg" class="hosting-img" />
            <h3 class="hosting-title">Panel Hosting cPanel</h3>
            <p class="hosting-text">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="../../../public/svg/icon PHP Hosting_garansi uptime.svg" class="hosting-img" />
            <h3 class="hosting-title">Garansi Uptime 99.9%</h3>
            <p class="hosting-text">Data center yang mendukung kelangsungan web Anda 24/7.</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="../../../public/svg/icon PHP Hosting_InnoDB.svg" class="hosting-img" />
            <h3 class="hosting-title">Database InnoDB Unlinited</h3>
            <p class="hosting-text">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="../../../public/svg/icon PHP Hosting_My SQL remote.svg" class="hosting-img" />
            <h3 class="hosting-title">Wildcard Remote MySQL</h3>
            <p class="hosting-text">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
          </div>
        </div>
      </div>
      <hr />
      <div class="second-banner">
        <div class="subtitle text-center">Mendukung Penuh Framework Laravel</div>
        <div class="row align-item-center banner-container">
          <div class="col-lg-6 col-md-12 banner-text">
            <div class="banner-text-container">
              <div class>
                <p style="font-size: 18px; font-weight: 300;">
                  Tak perlu menggunakan dedicated server ataupun VPS yang mahal.
                  Layanan PHP hosting murah kami mendukung penuh framework favorit Anda
                </p>
                <ul class="banner-item">
                  <li>
                    <i class="fas fa-check-circle"></i> Install Laravel
                    <strong>1 Klik</strong> dengan Softcolous intaller.
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i> Mendukung ekstensi
                    <strong>PHP MCrypt, phar, mbstring, json,</strong> dan
                    <strong>fileinfo</strong>.
                  </li>
                  <li>
                    <i class="fas fa-check-circle"></i> Tersedia
                    <strong>Composer</strong> dan
                    <strong>SSH</strong> untuk menginstall packages pilihan Anda.
                  </li>
                </ul>
                <p
                  class="nb-note"
                >Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                <button class="btn">Pilih Hosting Anda</button>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 banner-img">
            <div class>
              <img
                src="../../../public/svg/illustration banner support laravel hosting.svg"
                alt="banner-img"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="modul-list">
        <div class="subtitle text-center">Modul lengkap untuk menjalankan aplikasi PHP Anda.</div>
        <div class="row">
          <div class="col-6 col-lg-3 modul-list-group">
            <p>IcePHP</p>
            <p>apc</p>
            <p>apcu</p>
            <p>apm</p>
            <p>ares</p>
            <p>bcmath</p>
            <p>bcompiler</p>
            <p>big_int</p>
            <p>bitset</p>
            <p>bloomi</p>
            <p>bz2_filter</p>
            <p>clamav</p>
            <p>coin_aceptor</p>
            <p>crack</p>
            <p>dba</p>
          </div>
          <div class="col-6 col-lg-3 modul-list-group">
            <p>http</p>
            <p>huffman</p>
            <p>idn</p>
            <p>igbinary</p>
            <p>imagick</p>
            <p>imap</p>
            <p>inclued</p>
            <p>inotify</p>
            <p>interbase</p>
            <p>intl</p>
            <p>ion_cube_loader</p>
            <p>ion_cube_loader_4</p>
            <p>jsmin</p>
            <p>json</p>
            <p>ldap</p>
          </div>
          <div class="col-6 col-lg-3 modul-list-group">
            <p>nd_pdo_mysql</p>
            <p>oauth</p>
            <p>oci8</p>
            <p>odbc</p>
            <p>opcache</p>
            <p>pdf</p>
            <p>pdo</p>
            <p>pdo_dblist</p>
            <p>pdo_firebird</p>
            <p>pdo_mysql</p>
            <p>pdo_odbc</p>
            <p>pdo_pgsql</p>
            <p>pdo_sqlite</p>
            <p>pqsql</p>
            <p>phalcon</p>
          </div>
          <div class="col-6 col-lg-3 modul-list-group">
            <p>stats</p>
            <p>stamp</p>
            <p>stomp</p>
            <p>suhosin</p>
            <p>sybase_ct</p>
            <p>sysvmsg</p>
            <p>sysvsem</p>
            <p>sysvshm</p>
            <p>td</p>
            <p>timezonedb</p>
            <p>trader</p>
            <p>translit</p>
            <p>uploadprogress</p>
            <p>uri_template</p>
            <p>uuid</p>
          </div>
        </div>
        <button class="btn-white">Selengkapnya</button>
      </div>
      <div class="third-banner">
        <div class="row align-item-center">
          <div class="col-lg-6 col-md-12">
            <div class="banner-text-container">
              <div class="banner-text">
                <h3 class="subtitle" style="margin-bottom: 30px;">
                  Linux Hosting yang Stabil
                  <br />dengan Teknologi LVE
                </h3>
                <p class="third-banner-text">
                  SuperMicro
                  <strong>Intel Xeon 24-Cores</strong> server dengan RAM
                  <strong>128 GB</strong>
                  dan teknologi
                  <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan
                  <strong>SSD</strong> untuk kecepatan
                  <strong>MySQL</strong> dan caching, Apache load balancer berbasis
                  LiteSpeed Technologies,
                  <strong>CageFS</strong> security,
                  <strong>Raid-10</strong> protection dan auto back up
                  untuk keamanan website PHP Anda.
                </p>
                <button class="btn" style="margin-bottom: 0px;">Pilih Hosting Anda</button>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="banner-img mt-2">
              <img src="../../../public/svg/Image support.png" alt="banner-img" class="cs-img" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="soc-med">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-12">Bagikan jika anda menyukai halaman ini.</div>
          <div class="col-lg-6 col-sm-12">
            <div class="soc-med-group">
              <div class="soc-med-item">
                <i class="fab fa-facebook-square" style="color: #22599B"></i>
                <span class="bubble">80K</span>
              </div>
              <div class="soc-med-item">
                <i class="fab fa-twitter-square" style="color: #0DAEF1"></i>
                <span class="bubble">450</span>
              </div>
              <div class="soc-med-item">
                <i class="fab fa-google-plus-square" style="color: #F34734"></i>
                <span class="bubble">1900</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="call">
      <div class="container">
        <p>
          Perlu
          <strong>Bantuan?</strong> Hubungi kami :
          <strong>0274-5305505</strong>
        </p>
        <p class="devider">|</p>
        <div>
          <button class="btn-chat">
            <i class="fas fa-comments"></i> Live Chat
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Packages from "./Packages";

export default {
  components: {
    Packages: Packages
  }
};
</script>

<style scoped>
.content-body {
  margin-top: 50px;
}

.tech-img {
  width: 180px;
  place-self: center;
}

.tech-text {
  place-self: center;
  font-weight: 300;
  font-size: 16px;
}

.tech-img-1 {
  grid-area: timg-1;
}

.tech-img-2 {
  grid-area: timg-2;
}

.tech-img-3 {
  grid-area: timg-3;
}

.tech-text-1 {
  grid-area: ttext-1;
}

.tech-text-2 {
  grid-area: ttext-2;
}

.tech-text-3 {
  grid-area: ttext-3;
}

.tech-grid {
  display: grid;
  margin-bottom: 20px;
  grid-template-columns: auto auto auto;
  grid-template-rows: auto auto;
  row-gap: 10px;
  grid-template-areas:
    "timg-1 timg-2 timg-3"
    "ttext-1 ttext-2 ttext-3";
}

@media only screen and (max-width: 800px) {
  .tech-grid {
    display: grid;
    margin-bottom: 20px;
    grid-template-columns: auto;
    grid-template-rows: auto auto auto auto auto auto;
    row-gap: 10px;
    grid-template-areas:
      "timg-1"
      "ttext-1"
      "timg-2"
      "ttext-2"
      "timg-3"
      "ttext-3";
  }
}

.subtitle {
  margin-bottom: 40px;
}

table {
  border: 1px solid #d6d6d6;
  width: 90%;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 40px;
}

th {
  width: 15%;
}

td {
  width: 65%;
}

hr {
  width: 70px;
  border: 3px solid #f1f1f1;
}

.hosting-img {
  width: 100px;
}

.hosting-title {
  font-size: 20px;
  font-weight: 700;
}

.hosting-text {
  font-size: 16px;
  margin-bottom: 30px;
}

.banner-item {
  font-size: 14px;
}

.nb-note {
  font-size: 10px;
  font-weight: 300;
}

.btn {
  background-color: #0090ef;
  color: white;
  font-weight: 700;
  border-radius: 30px;
  padding: 10px 20px;
  margin-bottom: 50px;
}

.btn:hover {
  background-color: #0076c5;
}

.banner-text {
  grid-area: banner-text;
}

.banner-img {
  grid-area: banner-img;
}

@media only screen and (max-width: 992px) {
  .banner-container {
    display: grid;
    margin-bottom: 20px;
    grid-template-columns: auto;
    grid-template-rows: auto auto;
    row-gap: 10px;
    grid-template-areas:
      "banner-img"
      "banner-text";
  }
}

@media only screen and (max-width: 600px) {
  .cs-img {
    width: 100vw !important;
  }
}

.modul-list {
  margin: 30px 0;
}

.modul-list p {
  margin-bottom: 4px;
  font-size: 14px;
  font-weight: 300;
}

.modul-list-group {
  padding: 0 0 0 70px;
}

@media only screen and (max-width: 425px) {
  .modul-list-group {
    padding: 0 0 0 30px;
  }
}

.third-banner {
  margin-top: 80px;
}

.third-banner-text {
  font-weight: 300;
}

.soc-med {
  padding: 40px;
  background: #f7f7f7;
}

.soc-med-group {
  display: flex;
}

.soc-med-group i {
  font-size: 32px;
}

.soc-med-item {
  margin-right: 40px;
}

.bubble {
  position: relative;
  width: 185px;
  height: 25px;
  padding: 2px;
  background: #ffffff;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  border: #7f7f7f solid 1px;
  font-weight: 100;
  font-size: 12px;
}

.bubble:after {
  content: "";
  position: absolute;
  border-style: solid;
  border-width: 3px 4px 3px 0;
  border-color: transparent #ffffff;
  display: block;
  width: 0;
  z-index: 1;
  left: -4px;
  top: 8px;
}

.bubble:before {
  content: "";
  position: absolute;
  border-style: solid;
  border-width: 3px 4px 3px 0;
  border-color: transparent #7f7f7f;
  display: block;
  width: 0;
  z-index: 0;
  left: -5px;
  top: 8px;
}

.call {
  padding: 60px 0;
  background-color: #00a2f3;
  color: white;
}

.call .container {
  display: flex;
  justify-content: space-between;
  font-size: 30px;
  flex-wrap: wrap;
}

.call .devider {
  font-weight: 100;
}

.btn-chat {
  background-color: #00a2f3;
  border: 2px solid white;
  color: white;
  font-weight: 700;
  border-radius: 30px;
  padding: 0px 20px;
}

.btn-chat:hover {
  background-color: white;
  color: #00a2f3;
}

@media only screen and (max-width: 1000px) {
  .call .devider {
    display: none;
  }
}
</style>