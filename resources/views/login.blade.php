<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="../css/login.css" />
</head>

<body>
    <section>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2 style="text-align: center;">Login</h2>
                    <marquee style="color: rgb(0, 0, 0); text-shadow: 2px 1px 2px #ffffff;">
                        <h3>~Login Dulu Broo...~</h3>
                    </marquee>
                    <form action="{{url ('login')}}" method="POST">
                        @method('post')
                        @csrf
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-groub">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-groub">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-groub">
                            <button type="submit"><a href="/">Back</a></button>
                            <button type="submit" value="login">Login</button>
                        </div>

                        <p class="forget">Forgot Password ?<a href="#">Click Here</a></p>
                        <p class="forget">Don't Have Account!<a href="/register">Click here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
