<?php

?>
<html>
    <head>
        <title>External app</title>
        <script type="text/javascript" src="placeholder.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <h3>It is time to communicate with the exposed API, all we need is the API key to be passed in the header</h3>
        <hr>
        <h4>1. Feature 1 - Placing an order</h4>
        <hr>
        <form name="order_form" id="order_form">
            <fieldset>
                <legend>Place Order</legend>
                <input type="text" name="name_of_food" required placeholder="Name of food"><br>
                <input type="number" name="number_of_units" id="number_of_units" required placeholder="Number of units"><br>
                <input type="number" name="unit_price" id="unit_price" required placeholder="Unit Price"><br><br>
                <input type="hidden" name="status" id="status" required placeholder="Order Placed"><br><br>
                <button class="btn btn-primary" type="submit"> Place Order></button>
            </fieldset>
        </form>

        <hr>
        <h4>2. Feature 2 - Checking order status</h4>
        <hr>
        <form name="order_status_form" id="order_status_form" method="post" action="<?=$_SERVER['PHP_SELF']?>">
            <fieldset>
                <legend>Check Order Status</legend>
                <input type="number" name="order_id" id="order_id" required placeholder="Order ID"><br><br>
                <button class="btn btn-warning" type="submit">Check Order Status></button>
            </fieldset>
        </form>
    </body>
</html>
