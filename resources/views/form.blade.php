<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Arkatama_Azqia</title>
</head>

<body style="background-color:#e5e7eb">
    <!-- Form -->
    <div class="container ml-5 mr-5 mt-5">
        <img src="https://arkatama.id/wp-content/themes/arkatama/assets/images/site-logo.png"
            class="w-full cursor-pointer max-h-[2rem]" alt="Logo">
        <div class="mt-5 align-center">
            <h3><strong>Form Arkatama</strong></h3>
        </div>
        <form action="add" method="POST">
            @csrf
            <div class="mb-3 mt-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="age" class="form-label">Umur :</label>
                <input type="number" class="form-control" id="age" placeholder="Enter your age" name="age">
            </div>
            <div class="mb-3 mt-3">
                <label for="city" class="form-label">Kota :</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>