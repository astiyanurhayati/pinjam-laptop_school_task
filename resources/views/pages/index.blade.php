<x-page-layout title="home">
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
  </div>
  <nav class="navbar">
    <div class="max-width">
      <div class="logo"><a href="#">Wikrama</a></div>
      <ul class="menu">
        <li><a href="#home" class="menu-btn">Home</a></li>
        <li><a href="#about" class="menu-btn">About</a></li>
        <li><a href="#ingat" class="menu-btn">Ingat</a></li>
        <li><a href="{{url('/login')}}" class="menu-btn hijau">login</a></li>
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  
  <!-- HOME SECTION -->
  <section class="home" id="home">
    <div class="max-width">
      <div class="home-content">
        <div class="text-1">Selamat Datang Di Website</div>
        <div class="text-2"><span>P</span>injam <span>L</span>aptop</div>
        <div class="text-3">SMK Wikrama Bogor <span class="typing"></span></div>
        <a href="#about">Next</i></a>
      </div>
    </div>
  </section>
  
  
  <!-- ABOUT SECTION -->
  <section class="about" id="about">
    <div class="max-width">
      <h2 class="title">About</h2>
      <div class="about-content">
        <div class="column left">
          <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_nqpgigrz.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
        </div>
        <div class="column right">
          <div class="text">
          Butuh laptop?<span class="typing-2"></span>
          </div>
          <p>
          Tidak punya laptop atau laptop kamu kurang memadai? tenang saja, khusus siswa SMK Wikrama Bogor, kamu bisa meminjam laptop dengan kualitas laptop yang bagus disini
          </p>
          <a href="#ingat" >Next</a>
        </div>
      </div>
    </div>
  </section>
  
    <!-- INGAT SECTION -->
    <section class="ingat" id="ingat">
      <div class="max-width">
        <h2 class="title">Ingat</h2>
        <div class="ingat-content">
          <div class="column right">
            <div class="text">
            Baca dan Patuhi!
            </div>
            <p>
              <ul>
                <li>Jangan gunakan laptop dengan kasar</li>
                <li>Segera kembalikan laptop jika sudah selesai pemakaian</li>
                <li>Gunakan lapop untuk hal-hal penting</li>
              </ul>
            </p>
            <a href="{{route('form')}}" >Pinjam Sekarang</a>
          </div>
          <div class="column left">
            <lottie-player src="https://lottie.host/0f2bbe58-b259-43a5-8ab5-f50654625d0e/MYdru2tQYf.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
          </div>
        </div>
      </div>
    </section>
    

  
  <!-- CONTACT SECTION -->
  <section class="contact" id="contact">
    <div class="max-width">
      <h2 class="title">Contact</h2>
      <div class="contact-content">
        <div class="column left">
         
          <p>
           Jika ada yang kendala bisa hubungi kami melalui:
          </p>
          <div class="icons">
            <div class="row">
              <i class="fa-brands fa-whatsapp"></i>
              <div class="info">
                <div class="head">Whatsapp</div>
                <div class="sub-title">085694031604</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-map-marker-alt"></i>
              <div class="info">
                <div class="head">Address</div>
                <div class="sub-title">Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-envelope"></i>
              <div class="info">
                <div class="head">Email</div>
                <div class="sub-title">	prohumasi@smkwikrama.net</div>
              </div>
            </div>
          </div>
        </div>
        <div class="column right">
          <div class="text">Message me</div>
          <form action="#">
            <div class="fields">
              <div class="field name">
                <input type="text" placeholder="Name" required />
              </div>
              <div class="field email">
                <input type="email" placeholder="Email" required />
              </div>
            </div>
            <div class="field">
              <input type="text" placeholder="Subject" required />
            </div>
            <div class="field textarea">
              <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
            </div>
            <div class="button-area">
              <button type="submit">Send message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  <!-- FOOTER SECTION -->
  <footer>
    <span>Created By
      <a>Siti Astiya Nurhayati</a>
      | <span class="far fa-copyright"></span> 2022</span>
  </footer>
</x-page-layout>
