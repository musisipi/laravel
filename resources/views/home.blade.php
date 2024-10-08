<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NurFakhri Personal Web</title>
    <link href="{{ asset('style.css?v2') }}" rel="stylesheet" type="text/css" >
    <style> 
        #loader { 
            border: 12px solid #f3f3f3; 
            border-radius: 50%; 
            border-top: 12px solid #444444; 
            width: 70px; 
            height: 70px; 
            animation: spin 1s linear infinite; 
        } 
         
        @keyframes spin { 
            100% { 
                transform: rotate(360deg); 
            } 
        } 
         
        .center { 
            position: absolute; 
            top: 0; 
            bottom: 0; 
            left: 0; 
            right: 0; 
            margin: auto; 
        } 
    </style> 
</head>

<body >
    <div id="loader" class="center"></div> 

    <div class="nav-bar">
        <div class="nav-container">
            <div class="brand">
                <a href="#">Nur Fakhri</a>
            </div>
            <nav>
                <div class="nav-mobile">
                    <a href="#" id="nav-toggle">
                        <span></span>
                    </a>
                </div>
                <ul class="nav-list">
                    <li ><a  href="#about">Biodata</a></li>
                    <li><a href="#portfolio">Galery</a></li>
                    <li><a href="#home">Home</a>
                </ul>
            </nav>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="index.js"></script>

   
<section id="home" class="hero"> 
    <div class="intro"> 
        <div class="headings"> 
            <h3 class="greet-heading">Hello, I'm</h3> 
            <h1 class="my-heading">Nur Fakhri</h1> 
            <h4 class="sub-heading"> 
                a student at SMK N 1 BANTUL. Major RPL
            </h4> 
        </div> 
        <div class="intro-buttons"> 
            <button class="btn common-btn"><a href="#portfolio">Hire me</a></button> 
            <button class="btn ghost-btn"><a href="login.html">Logout</a></button> 
        </div> 
    </div> 
</section> 

<div class="wave"></div>

<!-- Portfolio Section -->
<section class="portfolio" id="portfolio"> 
    <div class="portfolio-heading"> 
        <h1 class="my-heading text-center">Galery</h1> 
    </div> 
    <div class="portfolio-content"> 
        <div class="my-row"> 
            <div class="my-col"> 
                <div class="my-card port-card"> 
                    <div class="image"> 
                        <img src="image/1.jpg"
                            alt="Web Design Image"> 
                    </div> 
                    <h3 class="greet-heading blue-text">Smoking</h3> 
                    <p class="small-para blue-text">By Android</p> 
                </div> 
            </div> 
            <div class="my-col"> 
                <div class="my-card port-card"> 
                    <div class="image"> 
                        <img src="image/2.jpg"
                            alt="Web Development Image"> 
                    </div> 
                    <h3 class="greet-heading blue-text"> 
                        Akmal 
                    </h3> 
                    <p class="small-para blue-text">By Iphone</p> 
                </div> 
            </div> 
            <div class="my-col"> 
                <div class="my-card port-card"> 
                    <div class="image"> 
                        <img src="image/8.jpg" alt="SEO Image"> 
                    </div> 
                    <h3 class="greet-heading blue-text">Konser</h3> 
                    <p class="small-para blue-text">By Android</p> 
                </div> 
            </div> 
        </div> 
        <div class="my-row"> 
            <div class="my-col"> 
                <div class="my-card port-card"> 
                    <div class="image"> 
                        <img src="image/4.jpg"
                            alt="Content Writting Image"> 
                    </div> 
                    <h3 class="greet-heading blue-text"> 
                        Jathilan 
                    </h3> 
                    <p class="small-para blue-text">By Iphone</p> 
                </div> 
            </div> 
            <div class="my-col"> 
                <div class="my-card port-card"> 
                    <div class="image"> 
                        <img src="image/5.jpg"
                            alt="Wordpress Image"> 
                    </div> 
                    <h3 class="greet-heading blue-text"> 
                        Bukber 
                    </h3> 
                    <p class="small-para blue-text"> 
                        By Android 
                    </p> 
                </div> 
            </div> 
            <div class="my-col"> 
                <div class="my-card port-card"> 
                    <div class="image"> 
                        <img src="image/6.jpg"
                            alt="Video Editing Image"> 
                    </div> 
                    <h3 class="greet-heading blue-text"> 
                        My Veh 
                    </h3> 
                    <p class="small-para blue-text">By Iphone</p> 
                </div> 
            </div> 
        </div> 
    </div> 
</section> <br><br><br>

<!-- About Section -->
<section id="about" class="about"> 
    <div class="about-text"> 
        <h1 class="my-heading">About Me</h1> 
        <p class="lead-para"> 
           Seorang pelajar kelas XI di SMK N 1 BANTUL
           mengambil jurusan rekayasa perangkat lunak, memiliki
           pengalaman menjadi alumni tk sampai smp dan sebentar lagi 
           aku mendapatkan ktp ku sendiri hahahaha jadi warga legal
           gabisa nakal nakal lagi sekarang...
           
        </p> 
        <p> 
           Bagi saya menjadi seorang pelajar ada susah dan seneng nya,
           karena di dunia ini tidak ada yang cuma seneng" aja / sempurna.
           Yaaa enaknya ituu dapat kawan baruu dan engga enaknya kita harus belajar,
           walau begitu saya tidak terpaksa dengan adanya belajar, karena saya percaya
           dengan belajar kita bisa mewujudkan impian yang telah ku impikan. SEE YOU ON TOP
        </p> 
    </div> 
    <div class="about-image"> <br>
     


    </div> 
    <div class="container">
        <h1>Biodata Diri</h1>
        <img src="image/2.jpg" alt="Profile Picture" class="profile-pic">
        <dl class="biodata">
            <dt>Nama:</dt>
            <dd>Muhammad Nur Fakhri</dd>

            <dt>Tempat, Tanggal Lahir:</dt>
            <dd>Yogyakarta, 7 Agustus 2007</dd>

            <dt>Jenis Kelamin:</dt>
            <dd>Laki-laki</dd>

            <dt>Alamat:</dt>
            <dd>Jl. Parangtrits km 11, Manding Serut </dd>

            <dt>Email:</dt>
            <dd>nurfakhri445@gmail.com</dd>

            <dt>Telepon:</dt>
            <dd>085848607270</dd>
        </dl>
    </div>
</section> <br><br>



<!-- Footer section -->
<footer class="footer"> 
    <div class="footer-content text-center"> 
        <h4> 
            Copyright © 2024 All rights reserved 
        </h4> 
       
</footer> 

<script> 
    document.onreadystatechange = function() { 
        if (document.readyState !== "complete") { 
            document.querySelector( 
            "body").style.visibility = "hidden"; 
            document.querySelector( 
            "#loader").style.visibility = "visible"; 
        } else { 
            document.querySelector( 
            "#loader").style.display = "none"; 
            document.querySelector( 
            "body").style.visibility = "visible"; 
        } 
    }; 
</script> 

   
  
</body>
</html>