<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Oxfort</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/344429efc8.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/344429efc8.js" crossorigin="anonymous"></script>
    
</head>
<body>
   <nav>
        <ul>
            <li><a href="#home-section">HOME</a></li>
            <li><a href="#about-us">ABOUT US</a></li>
            <li><a href="#students-section">STUDENTS</a></li>
        </ul>
        
        <button>LOGIN</button>
   </nav>

   <div id="home-section">
        <div id="paragraph">
            <p>Selamat datang ke</p>
            
            <div id="univ-name">
                <p>Universitas</p>
                <p>Oxfort</p>
            </div>
            
            <p>Salah satu universitas ternama di Oxfortshine, Indonesia</p>
        </div>

        <div id="logo">
            <div id="baris1">
                 <img src="assets/logo/coke.png" alt="">
                 <img src="assets/logo/indofood.png" alt="">
                 <img src="assets/logo/unilever.png" alt="">
                 <img src="assets/logo/dailygroup.png" alt="">
            </div>
            <div id="baris2">
                 <img src="assets/logo/xiaomi.png" alt="">
                 <img src="assets/logo/subway.png" alt="">
                 <img src="assets/logo/samsung.png" alt="">
                 <img src="assets/logo/abc.png" alt="">
            </div>
         </div>
   </div>
   
   <div id="about-us">
        <h1>Siapakah Kami?</h1>
        <div id="about-us-content">
            <div id="left">
                <img src="assets/logo/univ logo.png" alt="logo univ" srcset="">
            </div>
            
            <div id="right">
                
                <p>Universitas Oxfort adalah universitas berbasis teknologi yang telah mendidik dan membimbing berbagai anak muda yang berbakat.<p>
                    
                <p>Dibangun pada tahun 1995, Universitas Oxfort telah membangun sistem pendidikan yang cocok untuk mengembangkan karakter para mahasiswa dan dikemas dalam kurikulum yang menarik dan dapat diikuti dengan mudah.</p>
                    
                <p>Ayo bergabung bersama kami. Jadilah generasi muda yang dapat memberikan inovasi teknologi terkini untuk bangsa Indonesia.</p>
                               
                <button>JOIN US</button>
            </div>
        </div>
   </div>

   <div id="students-section">
        <h1>Prospective Students</h1>

        <div id="student-list">
            @forelse ($students as $s)
                <div class="student">
                    <img src="storage/{{ $s->Foto }}" alt="{{ $s->Foto }}">
                    <p>{{ $s->NIM }}</p>
                    <p>{{ $s->Nama }}</p>

                    @if (Auth::user() && Auth::user()->role == 'admin')
                        <a href="/edit-student/{{ $s->id }}">Edit</a>
                        <form action="/delete-student/{{ $s->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    @endif
                </div>
            @empty
                <p>{{ "No student added." }}</p>
            @endforelse
        </div>
   </div>

   <footer>
        <div id="copyright">
            <p>
                © 2024 Bina Nusantara Computer Club, All Right Reserved.
            </p>
            <p>
                Created with ❤ by Research and Development BNCC
            </p>
        </div>
        
        <div id="footer-logo">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa-brands fa-x-twitter"></i>
        </div>
   </footer>



</body>
</html>