<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY</title>
</head>
<body>
    <form action="https://www.sandbox.paypal.com/cgi-bin/websrc" method="post" target="blank">
        <input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="sb-ulkaw18064044@business.example.com" />
        <input type="hidden" name="item_name" value="laptop" />
        <input type="hidden" name="item_number" value="1" />
        <input type="hidden" name="amount" value="50" />
        <input type="hidden" name="no_shipping" value="0" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="hidden" name="lc" value="AU" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="return" value="http://localhost/sandesh/images/sajan/final.php" />
        <input type="hidden" name="notify_url" value="http://localhost/sandesh/images/sajan/final.php" />
        <button type="submit">PAY</button>
    </form>
</body>
</html>