<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="gambar/logo pemweb (1).png">
    <link rel="stylesheet" type="text/css" href="/css/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,800;1,400&family=Vollkorn:ital,wght@0,400;0,500;1,400;1,600&display=swap" rel="stylesheet">
    <title> Register </title>

    <style>
input[type="text"],
input[type="password"],
input[type="email"]
 {
        border-radius: 5px;
        width: 250px; /* Atur lebar kotak */
        height: 40px; /* Atur tinggi kotak */
        background-color:#fff; /* Warna latar belakang */
        border-radius: 10px;
        font-family: 'Poppins'
}

    input[type="submit"]
            {
                background-color: #C82840;
                color: white;
                margin-left: 20px;
                width: 150px;
                height: 50px;
                border-radius: 20px;
                border: none;
                border-radius: 30px;
                height: 50px;
                width: 150px;
                overflow: hidden;
                position: relative;
                font-family: "Dela Gothic One";
                font-size: 15px;
                border: none;
                cursor: pointer;
                line-height: normal;
            }

            input[type="submit"]:hover {
                background-color: #a92e41;
                transition: background-color 0.3s;
            }

    </style>
</head>
<body>

    <div class="container">
        <div class="kotak">
            <div class="gambar">

                <img src="/gambar/logo pemweb.png"widht="120px" height="120px"  alt="logo vitality">
            </div>
            <form action="register" method = "post">
                @csrf
            <div class="kolom mt-20" >
                <input type="text"  name="name" class="form-control @error('name')
                is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

        {{-- <div class="error-message">{{ $message }}</div> --}}

            </div>
            <div class="kolom" >
                <input type="email" name="email" class="form-control @error('email')
                is-invalid @enderror" id="email"  placeholder="Email" required value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                   {{$message}}
                </div>
                @enderror
            </div>

            <div class="kolom" >
                <input type="password"  name="password"  class="form-control
                @error('password')
                is-invalid @enderror" id="password"   placeholder="Kata Sandi" required>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="tombol mt-20">
                <input type="submit" value="SUBMIT">
            </div>
        </form>
        <div class="center-button">
            <p>Sudah punya akun?<br>
            <a href="login"> Silahkan Log in! </p>
        </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
