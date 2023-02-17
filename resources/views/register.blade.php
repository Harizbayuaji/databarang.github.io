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
                    <h2 style="text-align: center;">Register</h2>
                    <marquee style="color: rgb(0, 0, 0); text-shadow: 2px 1px 2px #ffffff;">
                        <h3>~Register Dulu Baru Login...~</h3>
                    </marquee>
                    <form action="{{url ('/registerStore')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-groub">
                            <input type="text" name="name" placeholder="Nama">
                        </div>
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
                            <button type="submit"><a href="/login">Back</a></button>
                            <button type="submit" value="submit">Submit</button>
                        </div>
                        <p class="forget">You Have Account!<a href="/login">Click here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>



</html>
