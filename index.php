<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Checkout | E-Shopper</title>
        <script src="https://p-uat.kushkipagos.com/kushki/kushki/kushki.min.js"></script>
    </head><!--/head-->

    <body>
        <!--/header-->

         <!--/#cart_items-->

        <section id="payment">
            <div class="container">
                <div class="review-payment">
                    <h2>Pago seguro</h2>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- Kushki Snippet Begins -->
                        <button onclick="runCode()">Test</button>
                        <script lang="javascript">
                            function runCode() {
                              var kushki = new Kushki({merchantId: '10000001641080185390111217', inTestEnvironment: true});
                              var cardData = {
                                name: 'Jose',
                                number: '4242424242424242',
                                cvc: "123",
                                expiryMonth: '12',
                                expiryYear: '21'
                              };
                              var callback = function (response) {
                                console.log(response)
                              };
                              kushki.requestToken({
                                amount: '49.99',
                                isDeferred: false,
                                card: cardData
                              }, callback);
                            }

                        </script>

                        <!-- Kushki Snippet Ends -->
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer"><!--Footer-->

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2017 Kushki All rights reserved.</p>

                        
                        </span></p>
                    </div>
                </div>
            </div>

        </footer><!--/Footer-->
    </body>
</html>
