    <?php helper("custom");?>
   <!--  <head> -->
  
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
     <link rel="icon" href="<?=base_url();?>/assets/images/logo.png">
    <title><?=ucwords(strtolower(settings('system_name')));?> :: <?= $this->renderSection('title').' - Trusted Platform';?></title>
    <style>
        * {
            margin: 0px;
            padding: opx;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        a {
            text-decoration: none;
            color: #64748B;
        }

        span {
            color: #3F83F8;
            font-weight: bold;
        }

        nav {
            opacity: 1;
            background-color: #fff;
            padding: 30px 0px;
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        nav ul {
            display: flex;
            padding-left: 0px;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
        }

        nav ul li {
            list-style: none;
            font-size: 1.5rem;
            font-weight: 600;
            line-height: 1.1;
            color: #64748B;
            font-family: sans-serif;
        }

        nav ul li img {
            width: 112px;
            height: 69px;
        }

        .header {
            display: flex;
            flex-direction: column;
            margin-top: 80px;
            align-items: center;
        }

        .header h1 {
            font-size: 36px;
            font-family: sans-serif;
            font-weight: 600;
            line-height: 40px;
            color: #64748B;
        }

        .header div {
            width: 90%;
            margin: 32px auto;
        }

        .header p {
            font-size: 30px;
            line-height: 36px;
            font-weight: 100;
            color: #64748B;
            text-align: center;
        }

        .header img {
            width: -webkit-fill-available;
        }

        article {
            display: flex;
            flex-direction: column;
            width: 75%;
            margin: 64px auto;
        }

        .about {
            margin-bottom: 40px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .about div {
            width: 45%;
        }

        .about h2 {
            font-size: 30px;
            font-family: sans-serif;
            font-weight: 100;
            line-height: 36px;
            color: #64748B;
        }

        .about p {
            margin-top: 18.4px;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 100;
            line-height: 24px;
            color: #64748B;
        }

        .funders {
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .funders h3 {
            font-size: 30px;
            font-weight: 100;
            font-family: sans-serif;
            line-height: 36px;
            color: #64748B;
        }

        .funders .fund-img {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .funders .fund-img div {
            width: 30%;
        }

        .funders img {
            margin: 48px 0px;
            width: 208px;
            height: 73px;
        }

        .contributors {
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contributors h3 {
            font-size: 30px;
            font-weight: 100;
            font-family: sans-serif;
            line-height: 36px;
            color: #64748B;
        }

        .contributors .contributors-img {
            margin-top: 30px;
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .contributors .contributors-img img {
            width: 112px;
            height: 112px;
        }

        .FAQ {
            width: 75%;
            margin: 40px auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .FAQ h3 {
            text-align: center;
            font-size: 30px;
            font-weight: 100;
            font-family: sans-serif;
            line-height: 36px;
            color: #64748B;
        }

        .FAQ div {
            margin-top: 32px;
        }

        .FAQ h4 {
            font-size: 24px;
            line-height: 32px;
            font-weight: 100;
            color: #64748B;
            font-family: sans-serif;
        }

        .FAQ p {
            margin-top: 18.4px;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 100;
            line-height: 24px;
            color: #64748B;
        }

        footer {
            margin: 64px auto;
        }

        footer .social {
            width: 45%;
            margin: 0px auto;
            display: flex;
            justify-content: space-between;
        }

        footer .social i {
            font-size: 25px;
            display: flex;
            color: #64748B;
        }

        footer .social i p {
            margin-left: 5px;

        }

        @media only screen and (max-width: 769px) {
            nav ul li img {
                width: 69px;
                height: 39px;
            }

            nav ul li {
                list-style: none;
                font-size: 16px;
                font-weight: 600;
                line-height: 1.1;
                color: #64748B;
                font-family: sans-serif;
            }

            article {
                width: 90%;
            }

            .about div {
                width: 100%;
            }

            .header img {
                width: 361px;
                height: 103px;
        }

            .funders .fund-img div {
                width: 40%;
            }

            .funders img {
                margin: 48px 0px;
                width: 144px;
                height: 51px;
            }

            .contributors-img div {
                margin-top: 30px;
                width: 30%;
            }

            .contributors .contributors-img {
                margin-top: 30px;
                display: flex;
                width: 100%;
                flex-wrap: wrap;
                flex-direction: row;
                justify-content: end;
            }

            .FAQ {
                width: 90%;
                margin: 40px auto;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .FAQ h3 {
                text-align: center;
                font-size: 25px;
                font-weight: 100;
                font-family: sans-serif;
                line-height: 36px;
                color: #64748B;
            }

            footer .social {
                width: 45%;
                margin: 0px auto;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            footer .social i {
                font-size: 25px;
                display: flex;
                color: #64748B;
                margin: 20px 0px;
            }
        }
    </style>
</head>

<body>
    <section class="container">
        <nav>
            <ul>
                <li><a href="https://github.com/">GitHub</a></li>
                <li><a href="https://docs.walletconnect.org/">Docs</a></li>
                <li><a href="<?=base_url();?>"><img src="<?=base_url();?>/assets/images/logo.png" alt="logo" srcset=""></a></li>
                <li><a href="<?=base_url();?>/wallets">Wallets</a></li>
                <li><a href="<?=base_url();?>">Apps</a></li>
            </ul>
        </nav>


   
   
    <?= $this->renderSection("content");?>
    <!-- Scripts -->


<footer>
            <div class="social">
                <a href="https://www.discord.com/">
                    <i class="fab fa-discord">
                        <p>Discord</p>
                    </i>
                </a>
                <a href="https://www.twitter.com/">
                    <i class="fab fa-twitter fa-lg">
                        <p>Twitter</p>
                    </i>
                </a>
                <a href="https://www.github.com/">
                    <i class="fab fa-github fa-lg">
                        <p>GitHub</p>
                    </i>
                </a>
                <a href="https://www.gmail.com/"><i class="fas fa-at fa-lg">
                        <p style="font-weight: 100;">Support</p>
                    </i></a>
            </div>
        </footer>
    </section>
     <?= $this->include('view/inc/js.php');?>

</body>
</html>


   
