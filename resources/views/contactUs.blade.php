<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactUs.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="left">
            <a href=""><img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/shoe-store-logo-design-template-da7acb3f6546068cbc2272814166e8a4_screen.jpg?ts=1635317713" alt=""></a>
        </div>
        <div class="right">
            <a href="/home">Home</a>
            <a href="/product">Product</a>
            <a href="#">Contact Us</a>
            <a href="/login" class="login">Login</a>
        </div>
    </nav>

    <div class="containerContactUs">
        <div class="card w-50" style="width: 18rem;" id="contactUs">
            <div>
                <h1>Contact Us</h1>
            </div>
            <div class="image">
                <img src="{{ asset('asset/Store.jpg') }}" class="card-img-top" alt="...">
            </div>
            <div class="card-body w-100">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="floatingTextarea">Message</label>
                        <textarea class="form-control" placeholder="Your message..." id="floatingTextarea"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>