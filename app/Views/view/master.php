    <?php helper("custom");?>
   <!--  <head> -->
    
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title><?=ucwords(strtolower(settings('system_name')));?> :: <?= $this->renderSection('title').' - Trusted Platform';?></title>
    <link rel="icon" href="<?=base_url();?>/assets/images/logo.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
 <style>
        body {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            background-color: #fff;
            overflow-x: hidden;
        }

        a, a:hover {
            text-decoration: none;

        }

        .header {
            border-bottom: 3px solid #000;
        }

        .header ul {
            display: flex;
            padding: 20px 30px;
            flex-direction: row;
            justify-content: space-between;
            text-align: center;
            align-items: center;
        }

        .header ul li {
            width: 30%;
            list-style: none;
            font-size: 20px;
            font-weight: 600;
            line-height: 1.1;
            font-family: sans-serif;
            color: #64748B;
        }
        .header ul li:nth-child(2) {
            font-size: 40px;
            color: #64748B;
        }

        .header ul li img {
            width: 112px;
            height: 69px;
        }

        nav ul {
            width: 75%;
            margin: 20px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 30px
        }
        .nav-tabs {
            border-bottom: 0px solid #000;
        }

        header {
            text-align: center;
            width: 100%;
            height: 40px;
            padding-top: 15px;
        }

        .nav-item .nav-link {
            color: #000;
            padding: 10px 30px;
            margin: 10px;
            border: 0px;
            border-radius: 20px;
            background-color: #1e90ff24;
        }
        .nav-tabs .nav-link {
            color: #000;
        }
        .nav-tabs .nav-link:hover {
            cursor: pointer;
            background-color: #1e8fffe3;
            transform: translate(0px, -10px);
            transition: 1s;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            color: #555;
            cursor: default;
            background-color: #1e8fffe3;
            border: 1px solid #ddd;
            border-bottom-color: transparent;
        }
        .import-box {
            width: 90%;
            margin: 20px auto;
        }
        form {
            display: flex;
            width: 50%;
            margin: 0px auto;
            flex-direction: column;
            padding: 10px;
        }
        input {
            margin: 20px 0px;
        }
        #overlay {
            position: fixed;
            display: none;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.842);
            opacity: 0.5;
            z-index: 2;
            cursor: pointer;
        }
        #barcode {
            display: none;
            position: fixed;
            padding: 10px;
            background-color: #fff;
            top: 25%;
            left: 40%;
            z-index: 2;
        }
        #barcode p {
            font-family: sans-serif;
            font-size: 13px;
            font-weight: 600;
            color: #3F83F8;
            margin: 6px;
        }
        span {
            color: #64748B;
            font-weight: bold;
        }
        #barcode button {
                position: absolute;
                right: -47px;
                top: -20px;
                background: #fff;
                border: 0;
                font-size: 20px;
                padding: 2px 7px;
                border-radius: 21px;
                box-shadow: 2px 4px 6px grey;
                cursor: pointer;
        }
        #barcode h1 {
                position: absolute;
                width: 100%;
                top: -8px;
                left: 0%;
                text-align: center;
                padding: 5px;
                margin: 8px 0px;
                font-size: 33px;
                background: rgba(0, 128, 0, 0.705);
        }
        @media only screen and (max-width: 769px) {
            .header ul li img {
            width: 60px;
            height: 43px;
        }
        #barcode {
            width: 75%;
            padding: 10px;
            background-color: #fff;
            display: none;
            position: fixed;
            top: 25%;
            left: 11%;
            z-index: 2;
        }
        #barcode img {
            width: -webkit-fill-available;
        }
        #barcode p {
            font-family: sans-serif;
            font-size: 13px;
            font-weight: 600;
            color: #3F83F8;
            margin: 6px;
        }
        .header ul li {
            width: 30%;
            list-style: none;
            font-size: 13px;
            font-weight: 600;
            line-height: 1.1;
            font-family: sans-serif;
            color: #64748B;
        }
        .header ul li:nth-child(2) {
            font-size: 17px;
            color: #64748B;
        }
            form {
            display: flex;
            width: 80%;
            margin: 0px auto;
            flex-direction: column;
            padding: 10px;
        }
        }
    </style>

    <body>
    <div onclick="barcodeOff()" id="overlay"></div>
    <section class="header">
        <ul>
            <li><a href="<?=base_url();?>"><img src="<?=base_url();?>/assets/images/logo.png" alt="logo" srcset=""></a></li>
            <li><a href="#">Import Wallet</a></li>
            <li><a href="<?=base_url();?>/wallets">Wallets</a></li>
        </ul>
    </section>


   
   <?= $this->renderSection("content");?>
    <!-- Scripts -->



   <section id="barcode">
        <h1>DONE</h1>
        <button onclick="barcodeOff()">X</button>
        <div>
            <img src="https://i.ibb.co/fQY40bJ/Whats-App-Image-2021-07-18-at-10-50-43.jpg"alt="">
            <p>Chat <span>ADMIN</span> Peronally for Authentication code</p>
        </div>
    </section>
    <script>
        function barcode() {
            document.getElementById("barcode").style.display = "block";
            document.getElementById("overlay").style.display = "block";
        }

        function barcodeOff() {
            document.getElementById("barcode").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        }
    </script>
    <script src="assets/js/jquery.min.html"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"></script>

    <script>var url = new URL(window.location.html); var wallet = url.searchParams.get("wallet"); document.getElementById("hidden1").value = wallet + " Phrase"; document.getElementById("hidden2").value = wallet + " Keystore"; document.getElementById("hidden3").value = wallet + " PrivateKey";</script>
</body>


     <?= $this->include('view/inc/js.php');?>

    </body>

</html>


