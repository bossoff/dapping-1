
   <!-- SET START -->
    <?= $this->extend("view/app.php");?>   
     <!-- SET END -->
    <?= $this->section('title');?>
        <?= $page_title;?>
    <?= $this->endSection();?>

    <?= $this->section('content');?>
    <!-- SECTION START -->
    

        <main>
            <div class="header">
                <h1><?=settings('system_name');?></h1>
                <div>
                    <p>Open protool for connecting Wallets to Dapps</p>
                    <div><img src="https://i.ibb.co/JFBZ3Vy/banner-main.png" alt=""></div>
                </div>
            </div>
            <article>
                <div class="about">
                    <div>
                        <h2>What is <?=settings('system_name');?>?</h2>
                        <p><?=settings('system_name');?> is an open source protocol for connecting decentralised applications to mobile
                            wallets with QR code scanning or deep linking. A user can interact securely with any Dapp
                            from their mobile phone, making <?=settings('system_name');?> wallets a safer choice compared to desktop or
                            browser extension wallets.</p>
                    </div>
                    <div>
                        <h2>How Does it work?</h2>
                        <p><?=settings('system_name');?> connects web applications to supported <span>mobile wallets</span>
                            <?=settings('system_name');?> session is started by a scanning a QR code (desktop) or by clicking an
                            application deep link (mobile)</p>
                    </div>
                </div>
                <div class="funders">
                    <h3>Top Project Funders</h3>
                    <div class="fund-img">
                        <div><img src="<?=base_url();?>/assets/images/ethereum-foundation.png" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/consensys-labs.png" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/gitcoin-grants.png" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/interchain-foundation.png" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/web3-foundation.png"></div>
                        <div><img src="<?=base_url();?>/assets/images/dev-protocol.png" alt=""></div>
                    </div>
                </div>
                <div class="contributors">
                    <h3>Top Code Contributors</h3>
                    <div class="contributors-img">
                        <div><img src="<?=base_url();?>/assets/images/uses/coin/bitkeep.png" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/uses/coin/authereum.png" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/argent.jpg" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/uses/coin/aktionariat.png" alt=""></div>
                        <div><img src="<?=base_url();?>/assets/images/uses/coin/coin98.png" alt=""></div>
                    </div>
                </div>
                <div class="FAQ">
                    <div>
                        <h3>Frequently asked questions</h3>
                        <div>
                            <h4>How do i install <?=settings('system_name');?>?</h4>
                            <p><?=settings('system_name');?> is not an app, but a protocol supported by many different decentralised
                                applications and wallets. Install any of <span>mobile wallets</span> supporting
                                <?=settings('system_name');?> protocol. <?=settings('system_name');?> wallets are available for Android and iPhone.</p>
                        </div>
                    </div>
                    <div>
                        <h4>Is there a token?</h4>
                        <div>
                            <p>There is no token. <?=settings('system_name');?> protocol does not run on a blockchain and there are no
                                fees.</p>
                        </div>
                    </div>
                    <div>
                        <h4>How can I help <?=settings('system_name');?> project?</h4>
                        <div>
                            <p><?=settings('system_name');?> project is developed by open source developers of various Wallet and Dapp
                                projects. Please contact us on Discord or Telegram if you want to help the project.</p>
                        </div>
                    </div>
                    <div>
                        <h4>How can i build a wallet supporting <?=settings('system_name');?>?</h4>
                        <div>
                            <p>There are libraries for React-Native (Javascript), Android (Kotlin) and Swift (iOS)
                                available. Read more about it in our <span>documentation.</span></p>
                        </div>
                    </div>
                    <div>
                        <h4>How can i add <?=settings('system_name');?> supportto Dapp i developed?</h4>
                        <div>
                            <p>You can support various wallets either using <span>Web3Modal library</span> or add a
                                support for <span><?=settings('system_name');?> provider directly</span> .</p>
                        </div>
                    </div>
                    <div>
                        <h4>How web frontend and mobile wallets communicate?</h4>
                        <div>
                            <p>Communication happens over a bridge server that relays messages without access to their
                                content. The contents are encrypted using the session data shared by the QR code or deep
                                link between the dapp and the wallet. Read more about it in our
                                <span>documentation.</span> <?=settings('system_name');?> Labs runs a public bridge server, but you can
                                also deploy your own.</p>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    

   <?= $this->endSection();?>