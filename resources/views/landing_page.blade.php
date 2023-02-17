<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--paralax js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/parallax.js/parallax.js"></script>
</head>

<body onload="initClock()">
    <!-- header -->

    <header class="parallax-window" data-parallax="scroll">
        <div class="banner">
            <video autoplay loop muted style="">
                <source src="bk.mp4" >
            </video>
        </div>
        <nav>
            <h1 class="logo">
                <img src="../img/B.png" alt="img"></img>
            </h1>
            <div class="login">
            <a href="/login" class="btn-login">Login</a>
            </div>
        </nav>
        <div class="header-title">Inventory</div>
        <div class="header-bottom">
            <div class="datetime">
                <div class="date">
                    <span id="dayname">Hari</span>,
                    <span id="month">Bulan</span>
                    <span id="daynum">00</span>,
                    <span id="year">Tahun</span>
                </div>
                <div class="time">
                    <span id="hour">00</span>:
                    <span id="minutes">00</span>:
                    <span id="seconds">00</span>
                    <span id="period">AM</span>
                </div>
            </div>
        </div>
    </header>

    <!-- about -->
    <section id="#about">
        <h3 style="text-align: center; margin-top:40px;margin-bottom:40px;">About</h3>
        <div class="about-container">
            <div class="image-gallery">
                <div class="image-box">
                    <img src="../img/box.jpg" alt="image">
                </div>
                <div class="image-box">
                    <img src="../img/box2.jpg" alt="image">
                </div>
                <div class="image-box">
                    <img src="../img/box3.jpg" alt="image">
                </div>
                <div class="image-box">
                    <img src="../img/box4.jpg" alt="image">
                </div>
            </div>
            <div class="about-info">
                Jember 14 november 2022 a disaster occurred in tokyo which they called the dimensional crack that
                issued
                a lot of monster monsters and killed half of japan's citizens, among the monsters there was someone
                who
                was strongly suspected of causing the dimensional crack, he looked like a half-monster man who led
                all
                the monsters to kill all person.

                half a year before the incident....

                we are brought to the story of a 17-year-old orphan named Sihino Ogami who is in high school,

                but while at school he got a lot of bullies from his classmates in the form of sneers about his
                family
                who died because of corrupting state money,

                Shino could only accept all the insults and insults her neighbors made about her parents,

                in Shino's deepest heart, hatred began to grow and wanted to kill them all.

                unexpected
            </div>
        </div>
    </section>

    <!--dock-->

    <h3 style=" text-align: center; margin-top:15px;">Team</h3>
    <div class="outerdiv">
        <div class="innerdiv">
            <!-- div1 -->
            <div class="div1 eachdiv">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="../img/fauzi.jpg" alt="">
                    </div>
                    <div class="detbox">
                        <p class="name">Achmad Fauzi</p>
                        <p class="designation">Verified Graduate</p>
                    </div>
                </div>
            </div>
            <!-- div2 -->
            <div class="div2 eachdiv">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="../img/adit.jpg" alt="">
                    </div>
                    <div class="detbox">
                        <p class="name">Aditya Cahyo A.N</p>
                        <p class="designation">Verified Graduate</p>
                    </div>
                </div>
            </div>
            <!-- div4 -->
            <div class="div4 eachdiv">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="../img/yogi.jpg" alt="">
                    </div>
                    <div class="detbox">
                        <p class="name">Yogi Siswanto</p>
                        <p class="designation">Verified Graduate</p>
                    </div>
                </div>
            </div>
            <!-- div5 -->
            <div class="div5 eachdiv">
                <div class="userdetails">
                    <div class="imgbox">
                        <img src="../img/qirom.jpg" alt="">
                    </div>
                    <div class="detbox">
                        <p class="name">Qirom Muzaqqi</p>
                        <p class="designation">Verified Graduate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--dock12-->


    <!-- footer -->
    <footer style="font-size: 30px;font-weight:600;">
        Kelompok 3 <i class="fa fa-heart"></i>
    </footer>

    <script>
        @if (Session::has('alert'))
        toastr.error("{{ Session::get('alert') }}");
    @endif
    </script>
    <!--script jam-->
    <script type="text/javascript">
    function updateClock() {
        var now = new Date();
        var dname = now.getDay(),
            mo = now.getMonth(),
            dnum = now.getDate(),
            yr = now.getFullYear(),
            hou = now.getHours(),
            min = now.getMinutes(),
            sec = now.getSeconds(),
            pe = "AM"

        if (hou == 0) {
            hou = 12;
        }
        if (hou > 12) {
            hou = hou - 12;
            pe = "PM"
        }

        Number.prototype.pad = function(digits) {
            for (var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
        }

        var months = ["January", "Februry", "March", "April", "May", "June", "July", "Augest", "September",
            "October",
            "November", "December"
        ];
        var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Trushday", "Friday", "Saturday"];
        var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
        var values = [week[dname], month[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
        for (var i = 0; i < ids.length; i++)
            document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock() {
        updateClock();
        window.setInterval("updateClock()", 1);
    }
    </script>

</body>

</html>
