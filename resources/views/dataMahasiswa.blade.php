
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="m-5">
        <a href="/add-mahasiswa">Add Mahasiswa</a><br><br>
        
        @forelse ($mahasiswas as $m)
            <div class="card" style="width: 18rem;">
                <img src="storage/{{ $m->Foto }}" class="card-img-top" alt="{{ $m->Foto }}">
                <div class="card-body">
                    <p>NIM: {{ $m->NIM }}</p>
                    <p>Nama: {{ $m->Nama }}</p>
                    <div class="text-center">
                      <a href="/edit-mahasiswa/{{ $m->id }}"><button class="btn btn-primary">Edit</button></a>
                      
                      <br><br>
                      <form action="/delete-mahasiswa/{{ $m->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                      
                    </div>
                </div>
            </div><br>
        @empty
            <p>Data is emtpy.</p>
        @endforelse
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
