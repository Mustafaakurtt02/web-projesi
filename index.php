<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anasayfa</title>
    <link rel="stylesheet" href="css/style.css" />
    <script
      src="https://kit.fontawesome.com/a3e62a09da.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <section id="menu">
      <div id="logo">Kişisel Web Sitem</div>
      <nav>
        <a href=""><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
        <a href=""><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
        <a href=""
          ><i class="fa-solid fa-user-graduate ikon"></i>Eğitim Bilgilerim</a
        >
        <a href=""><i class="fa-solid fa-city ikon"></i>Şehrimiz</a>
        <a href=""><i class="fa-solid fa-building ikon"></i>Mirasımız</a>
        <a href=""><i class="fa-solid fa-futbol ikon"></i>İlgi Alanlarım</a>
        <a href=""><i class="fa-solid fa-right-to-bracket ikon"></i>Login </a>
        <a href=""><i class="fa-solid fa-map-pin ikon"></i>iletişim</a>
      </nav>
    </section>
    <section id="anasayfa">
      <div id="black"></div>
      <div id="icerik">
        <h2>Osmancık</h2>
        <hr width="300" align="left" />
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio
          sequi pariatur illum alias? Necessitatibus eveniet accusamus,
          repudiandae, magnam repellat ab iste dolore eos aspernatur nam, illum
          aut! Quos, doloribus possimus, expedita aut natus nobis dolores id,
          aspernatur ex maiores quod.
        </p>
      </div>
    </section>
    <section id="hakkimizda">
      <h3>Hakkımızda</h3>
      <div id="container">
        <div id="sol">
          <h5 id="h5sol">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum
          </h5>
        </div>
        <div id="sag">
          <p id="psag">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione,
            laudantium dicta. Ullam dignissimos dicta velit quod deserunt fugit
            maxime accusamus!
          </p>
        </div>
        <img src="img/about.jpg" alt="" class="img-fluid mt100" />
        <p id="pson">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum
          nesciunt reiciendis quo ex eos! Tempora suscipit qui placeat
          temporibus ratione.
        </p>
      </div>
    </section>

    <div id="page-wrap">
      <div id="contact-info" class="vcard">
        <h3 id="egitimbilgilerim">Eğitim Bilgilerim</h3>
        <p>
          <b>isim soyisim:</b> <span class="isimsoyisim">Mustafa Kurt</span
          ><br />
          <b>Telefon Numarası:</b> <span class="tel">551 104 3045</span><br />
          <b>E-Mail Adresi:</b>
          <span class="email">mustafaakurtt02@gmail.com</span>
        </p>
      </div>

      <div id="objective">
        <p></p>
      </div>

      <div class="clear"></div>

      <dl>
        <dd class="clear"></dd>

        <dt>Eğitim</dt>
        <dd>
          <p>
            Cumhuriyet İlkokulu <br />
            Osmancık Ortaokulu <br />
            Osmancık Ömer Derindere Fen Lisesi <br />
            Sakarya Üniversitesi <br />
          </p>
        </dd>

        <dd class="clear"></dd>

        <dt>Yabancı Dil</dt>
        <dd>
          <p>İngilizce(orta seviye konuşma,yazma,okuma)</p>
        </dd>

        <dd class="clear"></dd>

        <dt>Yazılım Becerileri</dt>
        <dd>
          <p>Web front end devoloper,c++,c#,html,css,js,php</p>
        </dd>
        <dd class="clear"></dd>

        <dt>İlgi Alanları</dt>
        <dd>
          <p>
            Bilgisayar oynamak,yüzmek,basketbol oynamak,doğada hayatta kalmaya
            çalışmak,seyehat etmek.
          </p>
        </dd>

        <dd class="clear"></dd>
      </dl>

      <div class="clear"></div>
      <footer>copyright</footer>
    </div>
    <section id="iletisim">
      <div class="container">
        <h3 id="h3iletisim">İletişim</h3>
        <br />
        <div id="iletisimopak">
          <div id="formgroup">
            <div id="solform">
              <input
                type="text"
                name="isim"
                placeholder="AD SOYAD"
                required
                class="form-control"
              />
              <input
                type="text"
                name="tel"
                placeholder="telefon numarası"
                required
                class="form-control"
              />
            </div>

            <div id="sagform">
              <input
                type="email"
                name="mail"
                placeholder="email adresiniz"
                required
                class="form-control"
              />
              <input
                type="text"
                name="konu"
                placeholder="konu başlıgı"
                required
                class="form-control"
              />
            </div>
            <textarea
              name="mesaj"
              id=""
              placeholder="mesaj giriniz"
              cols="30"
              rows="10"
              required
              class="form-control"
            ></textarea>
            <input type="submit" value="gönder" />
          </div>
          <div id="adres">
            <h4 id="adresbaslik">Adres:</h4>
            <p class="adresp">Mehmet Akif Ersoy mahallesi</p>
            <p class="adresp">akyıldız caddesi</p>
            <p class="adresp">oguz bey sokak</p>
            <p class="adresp">no123</p>
            <p class="adresp">025162328</p>
            <p class="adresp">email:sanane@hotmail.com</p>
          </div>
        </div>
        <footer>
          <div id="copyright">20222 tüm hakları saklıdır</div>
          <div id="socialfooter">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-google-plus"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
          </div>
          <a href="#menu"><i class="fa-solid fa-arrow-up" id="up"></i></a>
        </footer>
      </div>
    </section>
  </body>
</html>
<?php

include("baglanti.php")




?>
