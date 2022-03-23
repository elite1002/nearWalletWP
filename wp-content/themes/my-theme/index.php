<?php wp_enqueue_script('near-api-js'); ?>
    <main class="wrap">
        <head>
            <title></title>
            <script type="text/javascript"
                    src="https://cdn.jsdelivr.net/npm/near-api-js@0.41.0/dist/near-api-js.min.js"></script>
<!--            <script src="https://unpkg.com/buffer@6.0.3/index.js" type="text/javascript"></script>-->
        </head>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

          

            .container {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }

            .screen {
                position: relative;
                height: 600px;
                width: 360px;
                box-shadow: 0px 0px 24px #5C5696;
            }

            .screen__content {
                z-index: 1;
                position: relative;
                height: 100%;
            }

            .screen__background {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 0;
                -webkit-clip-path: inset(0 0 0 0);
                clip-path: inset(0 0 0 0);
            }


            .login {
                width: 320px;
                padding: 30px;
                padding-top: 156px;
            }

            .login__field {
                padding: 20px 0px;
                position: relative;
            }

            .login__icon {
                position: absolute;
                top: 30px;
                color: #7875B5;
            }

            .login__input {
                border: none;
                border-bottom: 2px solid #D1D1D4;
                background: none;
                padding: 10px;
                padding-left: 24px;
                font-weight: 700;
                width: 75%;
                transition: .2s;
            }

            .login__input:active,
            .login__input:focus,
            .login__input:hover {
                outline: none;
                border-bottom-color: #6A679E;
            }

            .login__submit {
                background: #fff;
                font-size: 14px;
                margin-top: 30px;
                padding: 16px 20px;
                border-radius: 26px;
                border: 1px solid #D4D3E8;
                text-transform: uppercase;
                font-weight: 700;
                display: flex;
                align-items: center;
                width: 100%;
                color: #4C489D;
                box-shadow: 0px 2px 2px #5C5696;
                cursor: pointer;
                transition: .2s;
            }

            .login__submit:active,
            .login__submit:focus,
            .login__submit:hover {
                border-color: #6A679E;
                outline: none;
            }

            .button__icon {
                font-size: 24px;
                margin-left: auto;
                color: #7875B5;
            }

            .social-login {
                position: absolute;
                height: 140px;
                width: 160px;
                text-align: center;
                bottom: 0px;
                right: 0px;
                color: #fff;
            }

            .social-icons {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .social-login__icon {
                padding: 20px 10px;
                color: #fff;
                text-decoration: none;
                text-shadow: 0px 0px 8px #7875B5;
            }

            .social-login__icon:hover {
                transform: scale(1.5);
            }
        </style>
        <script>
            let wallet = {}
            const init = async () => {
                const config = {
                    networkId: "testnet",
                    keyStore: new nearApi.keyStores.BrowserLocalStorageKeyStore(),
                    nodeUrl: "https://rpc.testnet.near.org",
                    walletUrl: "https://wallet.testnet.near.org",
                    helperUrl: "https://helper.testnet.near.org",
                    explorerUrl: "https://explorer.testnet.near.org",
                };

                const near = await nearApi.connect(config);
                wallet = new nearApi.WalletConnection(near);
                //localStorage.setItem('wallet', wallet);
            }
            init()

            const signIn = () => {
                console.log("sfadsf")
                wallet.requestSignIn(
                    "example-contract.testnet", // contract requesting access
                    "Example App", // optional
                    "http://mysite.ru/near-production/", // optional
                    "https://github.com/ozmitelll/app-test-near-2/blob/master/src/App.js" // optional
                );
            };

        </script>

        <body>

        <body>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login">
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <h3 style="color: black;">Connect NEAR Wallet</h3>
                        </div>
                        <button class="button login__submit" onclick="{signIn()}">
                            <span class="button__text">Log In Now</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                    </form>

                </div>
                <div class="screen__background">
                </div>
            </div>
        </div>
        </body>

        </body>
    </main>
<?php //get_footer(); ?>