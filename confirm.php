
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="layout" content="main">
    </head>

    <body>     
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-md-9 col-md-offset-2 col-lg-9 text-center alert alert-confirmation">
                <h2>¡Gracias por su compra!</h2>

                
                
                    Su pago se realizó exitosamente. La entrega se realizará a la dirección registrada.<br/>

                    <p>
                        Se ha cobrado
                        $152.76
                        a su tarjeta.
                    </p>
                
                Su número de ticket es <strong><em style="font-size: 20px"><?php echo $transaccion->getTicketNumber(); ?></em></strong>
            </div>
        </div>


    </body>
</html>

