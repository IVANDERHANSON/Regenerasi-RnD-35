

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="m-5">
      <h1>Add Student</h1>


      <form action="/store-student" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="NIM" class="form-label">NIM</label>
          <input type="text" class="form-control" id="NIM" aria-describedby="emailHelp" value="{{ old('NIM') }}" name="NIM">
        </div>
        <div class="mb-3">
          <label for="Nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="Nama" aria-describedby="emailHelp" value="{{ old('Nama') }}" name="Nama">
        </div>
        <div class="mb-3">
          <label for="Foto" class="form-label">Foto</label>
          <input type="file" class="form-control" id="Foto" aria-describedby="emailHelp" value="{{ old('Foto') }}" name="Foto">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
     
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


