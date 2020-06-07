<template>
  <div class="packages">
    <div class="packages-headline">
      <h1 class="title">Paket Hosting Singapura yang Tepat</h1>
      <h3 class="subtitle">Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
    </div>
    <div class="packages-data row">
      <div class="col-lg-3 col-md-6 col-sm-12 text-center" v-for="item in packages" :key="item.id">
        <div class="package-item" :class="{'package-item-best-seller': item.bestSeller}">
          <div class="ribbon" v-if="item.bestSeller">
            <span>BEST SELLER!</span>
          </div>
          <div class="item-title" :class="{'item-title-best-seller': item.bestSeller}">
            <p>{{item.name}}</p>
          </div>
          <div class="item-price" :class="{'item-price-best-seller': item.bestSeller}">
            <p class="normal-price" v-html="item.normalPrice"></p>
            <p class="actual-price" v-html="item.actualPrice"></p>
          </div>
          <div class="item-user" :class="{'item-user-best-seller': item.bestSeller}">
            <p>
              <strong>{{item.users}}</strong> Pengguna Terdaftar
            </p>
          </div>
          <div class="item-details" v-for="detail in item.details" :key="detail.id">
            <p v-html="detail"></p>
          </div>
          <div class="item-btn">
            <button
              class="btn-white"
              :class="{'btn-best-seller': item.bestSeller}"
            >{{item.buttonText}}</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Packages",
  data() {
    return {
      packages: [
        {
          id: 1,
          name: "Bayi",
          normalPrice: "Rp 19.900",
          actualPrice:
            'Rp<span class="big-price">14</span>.900/<span class="per-price">bln</span>',
          users: "938",
          details: [
            "<strong>0.5X RESOURCE POWER</strong>",
            "<strong>500 MB</strong> Disk space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> Databases",
            "<strong>1</strong> Domain",
            "<strong>Instant</strong> Backup",
            "<strong>Unlimited SSL</strong> Gratis Selamanya"
          ],
          buttonText: "Pilih Sekarang",
          bestSeller: false
        },
        {
          id: 2,
          name: "Pelajar",
          normalPrice: "Rp 46.900",
          actualPrice:
            'Rp<span class="big-price">23</span>.450/<span class="per-price">bln</span>',
          users: "4.168",
          details: [
            "<strong>1X RESOURCE POWER</strong>",
            "<strong>Unlimited</strong> Disk space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>10</strong> Addon Domain",
            "<strong>Instant</strong> Backup",
            "<strong>Domain Gratis</strong> Selamanya",
            "<strong>Unlimited</strong> SSL Gratis Selamanya"
          ],
          buttonText: "Pilih Sekarang",
          bestSeller: false
        },
        {
          id: 3,
          name: "Personal",
          normalPrice: "Rp 58.900",
          actualPrice:
            'Rp<span class="big-price">38</span>.900/<span class="per-price">bln</span>',
          users: "10.017",
          details: [
            "<strong>2X RESOURCE POWER</strong>",
            "<strong>Unlimited</strong> Disk space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>10</strong> Addon Domain",
            "<strong>Instant</strong> Backup",
            "<strong>Domain Gratis</strong> Selamanya",
            "<strong>Unlimited SSL</strong> Gratis Selamanya",
            "<strong>Private</strong> Name Server",
            "<strong>SpamAssasin</strong> Mail Protect"
          ],
          buttonText: "Pilih Sekarang",
          bestSeller: true
        },
        {
          id: 4,
          name: "Bisnis",
          normalPrice: "Rp 109.900",
          actualPrice:
            'Rp<span class="big-price">65</span>.900/<span class="per-price">bln</span>',
          users: "3.552",
          details: [
            "<strong>3X RESOURCE POWER</strong>",
            "<strong>Unlimited</strong> Disk space",
            "<strong>Unlimited</strong> Bandwidth",
            "<strong>Unlimited</strong> POP3 Email",
            "<strong>Unlimited</strong> Databases",
            "<strong>10</strong> Addon Domain",
            "<strong>Magic Auto</strong> Backup & Restore",
            "<strong>Domain Gratis</strong> Selamanya",
            "<strong>Unlimited SSL</strong> Gratis Selamanya",
            "<strong>Private</strong> Name Server",
            "<strong>Prioritas</strong> Layanan Suport",
            '<i class="fas fa-star" style="color: #028fee;"></i> <i class="fas fa-star" style="color: #028fee;"></i> <i class="fas fa-star" style="color: #028fee;"></i> <i class="fas fa-star"  style="color: #028fee;"></i> <i class="fas fa-star" style="color: #028fee;"></i>',
            "<strong>SpamExpert</strong> Pro Mail Protect"
          ],
          buttonText: "Diskon 40%",
          bestSeller: false
        }
      ]
    };
  }
};
</script>

<style scoped>
.packages {
  margin: 70px 0;
}

.packages-headline {
  text-align: center;
}

.subtitle {
  font-weight: 500;
  font-size: 24px;
}

.col-lg-3,
.col-md-6,
.col-sm-12 {
  padding: 0 !important;
}

.package-item {
  margin-top: 50px;
  padding: 0;
  border: 0.1px solid #c2e7fa;
  transition-duration: 0.5s;
}

.package-item:hover {
  box-shadow: 0px 0px 29px 0px rgba(0, 171, 194, 1);
}

.package-item p {
  margin: 0;
  padding: 8px 0;
}

.item-title {
  border-bottom: 0.1px solid #c2e7fa;
  font-size: 24px;
  font-weight: 700;
}

.item-price {
  border-bottom: 0.1px solid #c2e7fa;
}

.normal-price {
  font-weight: 500;
  text-decoration: line-through;
}

.actual-price {
  font-weight: 500;
}

.item-price >>> .big-price {
  font-size: 36px;
  font-weight: 700;
  display: inline-block;
  vertical-align: middle;
}

.item-price >>> .per-price {
  font-weight: 300;
}

.item-user {
  border-bottom: 0.1px solid #c2e7fa;
}

.item-user,
.item-details {
  font-weight: 500;
  font-size: 14px;
}

/* BEST SELLER STYLE  */
.package-item-best-seller {
  border: 0.1px solid #00aaff;
}

.item-title-best-seller,
.item-price-best-seller {
  background-color: #028fee;
  color: white;
  border: none;
}

.item-user-best-seller {
  background-color: #037fde;
  color: white;
  border: none;
}

.btn-best-seller {
  background-color: #319df1;
  border-color: #319df1;
  color: white;
}

.btn-best-seller:hover {
  background-color: #0087ee;
  border-color: #0087ee;
}

/* RIBBON */

.ribbon {
  position: absolute;
  left: -5px;
  top: 45px;
  z-index: 1;
  overflow: hidden;
  width: 75px;
  height: 75px;
  text-align: right;
}
.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  width: 100px;
  display: block;
  background: #79a70a;
  background: linear-gradient(#54b459 0%, #54b459 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px;
  left: -21px;
}
.ribbon span::before {
  content: "";
  position: absolute;
  left: 0px;
  top: 100%;
  z-index: -1;
  border-left: 3px solid #54b459;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #54b459;
}
.ribbon span::after {
  content: "";
  position: absolute;
  right: 0px;
  top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #54b459;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #54b459;
}
</style>