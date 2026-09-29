<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV & Portofolio - Maula</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
      :root {
        --primary-green: #2ecc71;
        --light-green: #a8e6cf;
        --mint-gradient: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
      }
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        color: #333;
      }
      /* Custom Styling Hijau Muda */
      .hero-section {
        background: var(--mint-gradient);
        color: white;
        border-radius: 0 0 2rem 2rem;
        padding: 4rem 0;
      }
      .profile-img {
        width: 170px;
        height: 170px;
        object-fit: cover;
        border: 4px solid rgba(255, 255, 255, 0.8);
      }
      .card {
        border: none;
        border-radius: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.1) !important;
      }
      .text-custom-green {
        color: #27ae60 !important;
      }
      .btn-custom-green {
        background-color: #27ae60;
        color: white;
        border: none;
      }
      .btn-custom-green:hover {
        background-color: #219653;
        color: white;
      }
      .info-box {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(5px);
        border-radius: 0.75rem;
        padding: 0.75rem 1rem;
        font-size: 0.9rem;
      }
    </style>
  </head>
  <body>

    <!-- Bagian Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-white shadow-sm py-3">
      <div class="container">
        <a class="navbar-brand fw-bold text-custom-green" href="#"><i class="bi bi-code-slash"></i> Maula.CV</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item"><a class="nav-link active text-custom-green fw-semibold" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
            <li class="nav-item"><a class="nav-link" href="#tabel">Experience</a></li>
            <li class="nav-item"><a class="nav-link" href="#galery">Portfolio</a></li>
            <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
              <a class="btn btn-custom-green rounded-pill px-4" href="#contact">Contact Me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero / About Me Section -->
    <header class="hero-section text-center text-lg-start mb-5" id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-center mb-4 mb-lg-0">
            <img src="img/saya.jpg" class="profile-img rounded-circle shadow-lg mb-3" alt="Foto Profil Maula">
          </div>
          <div class="col-lg-8">
            <span class="badge bg-light text-success mb-2 px-3 py-2 rounded-pill fw-semibold">Portfolio & CV Pribadi</span>
            <h1 class="display-5 fw-bold mb-1">Hi, Saya Maula 👋</h1>
            <p class="text-white-50 mb-3 fw-medium">Pelajar & Web Development Enthusiast di SMKN 2 Kota Jambi</p>
            
            <!-- Kotak Informasi Pribadi -->
            <div class="row g-2 mb-4 text-white">
              <div class="col-md-6">
                <div class="info-box d-flex align-items-center">
                  <i class="bi bi-geo-alt-fill fs-5 me-2 text-warning"></i>
                  <span><strong>Alamat:</strong> Jl. Ps. Onderdil Kota Jambi</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box d-flex align-items-center">
                  <i class="bi bi-calendar-event-fill fs-5 me-2 text-warning"></i>
                  <span><strong>TTL:</strong> Jambi, 31 Januari 2010</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box d-flex align-items-center">
                  <i class="bi bi-telephone-fill fs-5 me-2 text-warning"></i>
                  <span><strong>No. HP/WA:</strong> 0896-3050-4526</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box d-flex align-items-center">
                  <i class="bi bi-envelope-at-fill fs-5 me-2 text-warning"></i>
                  <span><strong>Email:</strong> maulaalrevansya@gmail.com</span>
                </div>
              </div>
            </div>

            <div>
              <a href="#contact" class="btn btn-light text-success fw-semibold px-4 py-2 rounded-pill me-2 shadow-sm"><i class="bi bi-envelope-fill me-2"></i>Hire Me</a>
              <a href="#galery" class="btn btn-outline-light px-4 py-2 rounded-pill"><i class="bi bi-eye-fill me-2"></i>Lihat Karya</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Container -->
    <div class="container mb-5">
      
      <!-- Skills & Education Section (Dengan Persentase Level Skill) -->
      <section class="row mb-5 g-4" id="skills">
        <!-- Pendidikan -->
        <div class="col-md-4">
          <div class="card p-4 h-100 shadow-sm bg-white">
            <div class="card-body">
              <div class="text-custom-green fs-3 mb-3"><i class="bi bi-mortarboard-fill"></i></div>
              <h5 class="fw-bold mb-3">Pendidikan</h5>
              <p class="text-muted small mb-1">2022 - 2025</p>
              <p class="fw-semibold mb-1">SMPN 25 Kota Jambi</p>
              <p class="text-muted small"></p>
              <p class="text-muted small mb-1">2025 - Sekarang</p>
              <p class="fw-semibold mb-1">SMKN 2 Kota Jambi</p>
              <p class="text-muted small">Jurusan Pengembangan Perangkat Lunak dan GIM (PPLG).</p>
            </div>
          </div>
        </div>

        <!-- Keahlian dengan Progress Bar Persentase -->
        <div class="col-md-4">
          <div class="card p-4 h-100 shadow-sm bg-white">
            <div class="card-body">
              <div class="text-custom-green fs-3 mb-3"><i class="bi bi-cpu-fill"></i></div>
              <h5 class="fw-bold mb-3">Keahlian (Skills)</h5>
              
              <!-- Skill 1 -->
              <div class="mb-3">
                <div class="d-flex justify-content-between small fw-semibold mb-1">
                  <span>HTML5</span>
                  <span class="text-success">92%</span>
                </div>
                <div class="progress" style="height: 7px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 90%;"></div>
                </div>
              </div>

              <!-- Skill 2 -->
              <div class="mb-3">
                <div class="d-flex justify-content-between small fw-semibold mb-1">
                  <span>CSS3</span>
                  <span class="text-success">80%</span>
                </div>
                <div class="progress" style="height: 7px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 85%;"></div>
                </div>
              </div>

              <!-- Skill 3 -->
              <div class="mb-3">
                <div class="d-flex justify-content-between small fw-semibold mb-1">
                  <span>JavaScript</span>
                  <span class="text-success">72%</span>
                </div>
                <div class="progress" style="height: 7px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"></div>
                </div>
              </div>

              <!-- Skill 4 -->
              <div class="mb-3">
                <div class="d-flex justify-content-between small fw-semibold mb-1">
                  <span>Bootstrap 5</span>
                  <span class="text-success">88%</span>
                </div>
                <div class="progress" style="height: 7px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 88%;"></div>
                </div>
              </div>

              <!-- Skill 5 -->
              <div class="mb-1">
                <div class="d-flex justify-content-between small fw-semibold mb-1">
                  <span>UI/UX Design</span>
                  <span class="text-success">77%</span>
                </div>
                <div class="progress" style="height: 7px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 80%;"></div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Minat & Hobi -->
        <div class="col-md-4">
          <div class="card p-4 h-100 shadow-sm bg-white">
            <div class="card-body">
              <div class="text-custom-green fs-3 mb-3"><i class="bi bi-heart-fill"></i></div>
              <h5 class="fw-bold mb-3">Minat & Hobi</h5>
              <p class="text-muted">Senang mengeksplorasi kode pemrograman, merancang desain tampilan web yang estetik, dan mengikuti perkembangan teknologi.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Tabel Pengalaman / Proyek -->
      <section class="row mb-5" id="tabel">
        <div class="col-md-12">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold m-0">Daftar Pengalaman & Proyek</h3>
          </div>
          <div class="card shadow-sm p-3">
            <div class="table-responsive">
              <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th scope="col" class="py-3">No</th>
                    <th scope="col" class="py-3">Nama Proyek / Kegiatan</th>
                    <th scope="col" class="py-3">Peran / Keterangan</th>
                    <th scope="col" class="py-3 text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <td class="fw-semibold">Pembuatan Website Pariwisata</td>
                    <td><span class="badge bg-success-subtle text-success px-2 py-1">Front-End Developer (XI PPLG 2)</span></td>
                    <td class="text-center">
                      <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-pill me-1"><i class="bi bi-pencil"></i> Edit</a>
                      <a href="#" class="btn btn-outline-danger btn-sm px-3 rounded-pill"><i class="bi bi-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <td class="fw-semibold">Pembuatan Website Formulir</td>
                    <td><span class="badge bg-success-subtle text-success px-2 py-1">Front-End Developer (XI PPLG 2)</span></td>
                    <td class="text-center">
                      <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-pill me-1"><i class="bi bi-pencil"></i> Edit</a>
                      <a href="#" class="btn btn-outline-danger btn-sm px-3 rounded-pill"><i class="bi bi-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <tr>
                    <th>3</th>
                    <td class="fw-semibold">Pembuatan Website Kalkulator</td>
                    <td><span class="badge bg-success-subtle text-success px-2 py-1">Front-End Developer (XI PPLG 2)</span></td>
                    <td class="text-center">
                      <a href="#" class="btn btn-outline-success btn-sm px-3 rounded-pill me-1"><i class="bi bi-pencil"></i> Edit</a>
                      <a href="#" class="btn btn-outline-danger btn-sm px-3 rounded-pill"><i class="bi bi-trash"></i> Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

      <!-- Portofolio / Galeri Section -->
      <section class="row mb-5" id="galery">
        <div class="col-md-12 mb-4">
          <h3 class="fw-bold">Portofolio Pilihan</h3>
          <p class="text-muted">Beberapa hasil karya dan proyek yang pernah dikerjakan.</p>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="img/kerja1.png" class="card-img-top" alt="Proyek 1" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold">Proyek Website Pariwisata</h5>
              <p class="card-text text-muted small">Website informasi pariwisata interaktif yang responsif dan estetis menggunakan PHP serta CSS.</p>
              <a href="#" class="btn btn-custom-green rounded-pill mt-auto w-100">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="img/kerja2.png" class="card-img-top" alt="Proyek 2" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold">Sistem Formulir</h5>
              <p class="card-text text-muted small">Perancangan antarmuka formulir digital untuk memproses dan menampilkan data diri siswa secara rapi.</p>
              <a href="#" class="btn btn-custom-green rounded-pill mt-auto w-100">Lihat Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="img/kerja3.png" class="card-img-top" alt="Proyek 3" style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title fw-bold">Aplikasi Kalkulator Web</h5>
              <p class="card-text text-muted small">Aplikasi kalkulator interaktif berbasis web untuk melatih logika pemrograman dan antarmuka modern.</p>
              <a href="#" class="btn btn-custom-green rounded-pill mt-auto w-100">Lihat Detail</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact & Lokasi / Peta Section -->
      <section class="row mb-5" id="contact">
        <div class="col-md-12 mb-4">
          <h3 class="fw-bold">Get In Touch</h3>
          <p class="text-muted">Hubungi saya atau kunjungi lokasi sekolah.</p>
        </div>
        <div class="col-md-5 mb-4 mb-md-0">
          <div class="card shadow-sm p-4 bg-white">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-semibold">Email address</label>
                <input type="email" class="form-control rounded-pill px-3" id="exampleInputEmail1" placeholder="nama@email.com" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label fw-semibold">Pesan</label>
                <textarea class="form-control rounded-4 px-3 py-2" id="exampleInputPassword1" rows="4" placeholder="Tuliskan pesanmu di sini..."></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label text-muted small" for="exampleCheck1">Saya ingin mengirimkan pesan</label>
              </div>
              <button type="submit" class="btn btn-custom-green rounded-pill w-100 py-2 fw-semibold">Kirim Pesan</button>
            </form>
          </div>
        </div>
        <div class="col-md-7">
          <div class="card shadow-sm overflow-hidden h-100 p-2 bg-white">
            <div class="ratio ratio-16x9 rounded-3 overflow-hidden h-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2225719426897!2d103.61424367350288!3d-1.620532536079698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2589210b089b8f%3A0xe433001b7d83548a!2sBakso%20pentol%20jozz!5e0!3m2!1sid!2sid!4v1790678855200!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></https:>
            </div>
          </div>
        </div>
      </section>

    </div>
    <!-- End Container -->

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
      <div class="container">
        <p class="mb-1 fw-semibold">&copy; 2026 Maula Asadillah. All Rights Reserved.</p>
        <p class="text-white-50 small mb-0">Built with Bootstrap 5 & Passion.</p>
      </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>