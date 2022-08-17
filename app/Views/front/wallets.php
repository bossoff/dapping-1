
   <!-- SET START -->
    <?= $this->extend("view/app.php");?>   
     <!-- SET END -->
    <?= $this->section('title');?>
        <?= $page_title;?>
    <?= $this->endSection();?>

    <?= $this->section('content');?>
    <!-- SECTION START -->
    
  <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        a {
            text-decoration: none;
            color: #64748B;
        }

        nav {
            padding: 30px 0px;
            position: sticky;
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
            font-family: sans-serif;
            color: #64748B;
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
            font-weight: 500;
            line-height: 40px;
            color: #64748B;
        }

        .header div {
            margin: 32px 32px 0px 32px;
        }

        .header p {
            font-size: 18px;
            line-height: 36px;
            font-weight: 100;
            color: #64748B;
            text-align: center;
            font-family: sans-serif;
        }

        .wallets {
            width: 60%;
            margin: 40px auto;
        }

        .wallets .wallet-img {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .wallet-img div {
            background-color: #fff;
            border: none;
            padding: 10px;
            box-shadow: 4px 10px 13px rgb(225 225 225);
            border-radius: 10px;
            align-self: center;
            margin: 15px;
            width: 20%;
            text-align: center;
        }
        .wallet-img div:hover {
            cursor: pointer;
            transform: translate(0px, -10px);
            transition: 1s;
        }

        .wallet-img div p {
            color: #64748B;
            margin-top: 5px;
            font-weight: 600;
        }

        .wallet-img img {
            max-width: -webkit-fill-available;
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

            .wallets {
                width: 80%;
            }

            .wallet-img div {
                width: 30%;
                text-align: center;
            }
        }
    </style>

    
        <main>
            <div class="header">
                <h1>Registry</h1>
                <div>
                    <p>Registry of all Apps and Wallets supporting WalletConnect Protocol</p>
                </div>
            </div>
            <div class="wallets">
                <div class="wallet-img">


                     <?php
                      if(!empty($dataListCoin)):
                          foreach ($dataListCoin as $listCoin):?>

                            <div>
                                <a type="button" data-id="<?=$listCoin->slug_id;?>" value="<?=$listCoin->image;?>">
                                    <input type="hidden" id="base_url" value="<?=base_url()?>/">
                                    <input type="hidden" id="dataname" value="<?=$listCoin->name;?>">
                                        <input type="hidden" id="coinImage" value="<?=$listCoin->image;?>">

                                    <img src="<?=base_url();?><?=$listCoin->image;?>" alt="<?=$listCoin->name;?>" alt="">
                                    <p><?=$listCoin->name;?></p>
                                </a>
                            </div>


                    <?php 
                          endforeach;
                      else:
                          echo "Data's are not available at this movement. Please try again.";
                      endif;
                    ?>     

                            
                </div>
        </main>
    

   <?= $this->endSection();?>