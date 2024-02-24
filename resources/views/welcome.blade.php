<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="regen.css">
</head>
<body>
    <nav>
        <ul>
            <li>HOME</li>
            <li>ABOUT US</li>
            <li>STUDENTS</li>
        </ul>
        <button>LOGIN</button>
    </nav>

    <div id="home">
        <h3>Selamat datang ke</h3>
        <h1>Universitas <br> Oxfort</h1>
        <h3>Salah satu universitas ternama <br> di Oxfortshine, Indonesia</h3>
        <div id="sponsor">
            <img src="asset/cocacola.svg" alt="">
            <img src="asset/indofood.svg" alt="">
            <img src="asset/Unilever.svg" alt="">
            <img src="asset/dailygroup.svg" alt="">
            <img src="asset/mi.svg" alt="">
            <img src="asset/subway.svg" alt="">
            <img src="asset/samsung.svg" alt="">
            <img src="asset/abc.svg" alt="">
        </div>
    </div>
    <div id="about">
        <h1>Siapakah Kami?</h1>
        <div id="about2">
            <div id="logo">
                <h1>Universitas<br>Oxfort</h1>
                <img src="asset/logo.svg" alt="">
            </div>
            <div id="intro">
                <p>Universitas Oxfort adalah universitas berbasis teknologi yang telah mendidik dan membimbing berbagai anak muda yang berbakat.</p>
                <p>Dibangun pada tahun 1995, Universitas Oxfort telah membangun sistem pendidikan yang cocok untuk mengembangkan karakter para mahasiswa dan dikemas dalam kurikulum yang menarik dan dapat diikuti dengan mudah.</p>
                <p>Ayo bergabung bersama kami. Jadilah generasi muda yang dapat memberikan inovasi teknologi terkini untuk bangsa Indonesia.</p>
                <button>Join Us</button>
            </div>
        </div>
    </div>
    <div id="students">
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
                <p>No student added.</p>
            @endforelse

        </div>
    </div>
    <div id="footer">
        <p>© 2024 Bina Nusantara Computer Club, All Right Reserved.
        <br>Created with ❤ by Research and Development BNCC</p>
        <div id="sosmed">
            <img src="asset/ig.svg" alt="">
            <img src="asset/fb.svg" alt="">
            <img src="asset/x.svg" alt="">
        </div>
    </div>
</body>
</html>