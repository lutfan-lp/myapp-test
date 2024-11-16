<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Lutfan Syafiq-----Portofolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="/" class="portofolio">LUTFAN SYAFIQ</a>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#layanan">Service</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>

    <section class="port"  id="about">
        <div class="about">
            <!-- sekedar Batas -->
            <div class="batas">
                
            </div>
            <h1>About</h1>
            <!-- sekedar Batas -->
            <div class="batas">
                
            </div>
        </div>
        <div class="about-content">
            <img class="pp" src="img/mine1.jpg" alt="no image">
            <div class="bungkus-ket">
                <div class="keterangan">
                    <p>
                        Mahasiswa aktif Universitas
                        Annuqayah prodi Teknologi
                        Informasi semester IV, santri
                        PP. Annuqayah daerah
                        Latee. Mulai menyukai
                        dunia Komputer sejak masih
                        duduk di kelas XI SLTA. Masuk dunia komputer setelah masuk kuliah jurusan Teknologi Informasi (TI) di Universitas Annuqayah Guluk-Guluk Sumenep. 
                    </p>
                </div>
            </div>
            
            <div class="sosmed">
                <a href="#" target="_blank"><img src="img/wa-icon.png" alt=""></a>
                <a href="#" target="_blank"><img src="img/email-icon.png" alt=""></a>
                <a href="#" target="_blank"><img src="img/ig-icon.png" alt=""></a>
                <a href="#" target="_blank"><img src="img/tiktok-icon.png" alt=""></a>
                <a href="#" target="_blank"><img src="img/net-icon.png" alt=""></a>
            </div>
        </div>
    </section>

    <section class="port1">
        <div class="about" id="profile">
            <!-- sekedar Batas -->
            <div class="batas">
                
            </div>
            <h1>Profile</h1>
            <!-- sekedar Batas -->
            <div class="batas">
                    
            </div>
        </div>
        <div class="dapri">
            <img src="img/mine1.jpg" alt="">
            <div class="dapri-text">
                <ul>
                    <li>Nama Lengkap</li>
                    <li>Nama Panggilan</li>
                    <li>Tempat, tanggal lahir</li>
                    <li>Kebangsaan</li>
                    <li>Agama</li>
                    <li>Status Pernikahan</li>
                    <li>Kode Pos</li>
                </ul>
                <ul>
                    <li>: Lutfan Syafiq</li>
                    <li>: Isyaf</li>
                    <li>: Pamekasan, 07 Juli 2001</li>
                    <li>: Indonesia</li>
                    <li>: Islam</li>
                    <li>: Belum Nikah</li>
                    <li>: 6493</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="port" id="layanan">
        <div class="about">
            <!-- sekedar Batas -->
            <div class="batas">
                
            </div>
            <h1>Layanan</h1>
            <!-- sekedar Batas -->
            <div class="batas">
                    
            </div>
        </div>
        <div class="kotak">
            <div class="item">
                <a href="#"><img src="img/fronend.jpg" alt="">
                    <p>Front-End Developer</p>
                </a>
            </div>
            <div class="item">
                <a href="#"><img src="img/backend.jpg" alt="">
                    <p>Back-End Developer</p>
                </a>
            </div>
            <div class="item">
                <a href="#"><img src="img/desain.png" alt="">
                    <p>Design Grafis</p>
                </a>
            </div>
            <div class="item">
                <a href="#"><img src="img/fronend.jpg" alt="">
                    <p>Data Analist</p>
                </a>
            </div>
        </div>
    </section>

    <section class="port1" id="contact">
        <div class="about">
            <!-- sekedar Batas -->
            <div class="batas">
                
            </div>
            <h1>Contact</h1>
            <!-- sekedar Batas -->
            <div class="batas">
                    
            </div>
        </div>
        <div class="formulir">
            <h2 style="margin-bottom: 0;">Formulir Pelayanan</h2>

            <form action="form.html" method="post">
                <fieldset>
                    <legend>Silakan isi Formulir Pendaftaran Layanan Berikut:</legend>
                    <div class="isian">
                        <div class="isi-form">
                            <div class="tex-form">
                                Nama 
                            </div>
                            <div class="isi">
                                <input type="text" name="txt.nama" placeholder="nama lengkap" 
                                style="width: 400px; height: 40px; border: none; padding: 10px;"/>
                                <br>
                            </div>
                        </div>

                        <div class="isi-form">
                            <div class="tex-form">
                                Jenis Kelamin
                            </div>
                            <div class="isi">
                                <input type="radio" name="rd.lk" value="pria"> Laki-Laki <br>
                                <input type="radio" name="rd.pr" value="wanita"> Perempuan <br>
                            </div>
                        </div>

                        <div class="isi-form">
                            <div class="tex-form">
                                Profesi/Pekerjaan 
                            </div>
                            <div class="isi">
                                <select name="profesi" id="job" style="width: 400px; height: 40px; border: none; padding: 10px;">
                                    <option value="Guru">Guru/Dosen/Pengajar</option>
                                    <option value="Pelajar">Pelajar/Mahasiswa</option>
                                    <option value="Staf">Staf/Karyawan</option>
                                    <option value="dll">Lainnya</option>
                                </select>
                                <br>
                            </div>
                        </div>
                        
                        <div class="isi-form">
                            <div class="tex-form">
                                Jenis Layanan 
                            </div>
                            <div class="isi">
                                <input type="checkbox" name="ck.pelayanan" value="graphicDesign"> Web Development <br>
                                <input type="checkbox" name="ck.pelayanan" value="mobile"> Mobile App Development <br>
                                <input type="checkbox" name="ck.pelayanan" value="web"> Graphic Design <br>
                                <input type="checkbox" name="ck.pelayanan" value="db"> Database Management <br>
                            </div>
                        </div>

                        <div class="isi-form">
                            <div class="tex-form">
                                Email 
                            </div>
                            <div class="isi">
                                <input type="email" name="txt.email" placeholder="@gmail" 
                                style="width: 400px; height: 40px; border: none; padding: 10px;"/>
                                <br>
                            </div>
                        </div>
                         
                        <div class="isi-form">
                            <div class="tex-form">
                                Jam Layanan        
                            </div>
                            <div class="isi">
                                <input type="time" name="jam" style="height: 40px; width: 100px; border: none; padding: 10px;">
                                <br>
                            </div>
                        </div>
                        
                        <div class="isi-form">
                            <div class="tex-form">
                                Deskripsi Layanan 
                            </div>
                            <div class="isi">
                                <textarea name="desc" id="deskripsi" cols="40" rows="5" style="width: 400px; border: none; padding: 10px;"></textarea>
                            </div>
                        </div>

                        <div class="isi-form">
                            <div class="tex-form">
                                <output></output>
                                <input type="submit" value="Kirim" style="background-color: green; 
                                    color :white; width: 100px; height: 50px; border: none;">
                            </div>
                        </div>

                    </div>
                </fieldset>

            </form>
        </div>
    </section>
    
    <footer>
        <p>Hak Cipta &copy; 2024 <a href="/home">Lutfan Syafiq</a> web kelas TI-B('22)</p>
        <div>
            <video width="300px" controls>
            <source src="img/Rayon LTQ.mp4" type = "video/mp4">
        </video>
        <h2><a href="https://www.youtube.com/@ltqmurajaah8118">@LTQ_Murajaah : )</a></h2>
    </div>
    </footer>
</body>
</html>