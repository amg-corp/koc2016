<html>
    <head>
        <title> Non-Seamless-kit</title>
    </head>
    <body>
    <center>

        <?php include('Crypto.php') ?>
        <?php
        error_reporting(0);

        $merchant_data = '';
        $working_key = 'B97CC1E8B6026848D07FB0F7F8D474DF'; //Shared by CCAVENUES
        $access_code = 'AVGC63DB85AE14CGEA'; //Shared by CCAVENUES

        foreach ($_POST as $key => $value) {
            echo $key . '=' . $value . ' - ';
            $merchant_data.=$key . '=' . $value . '&';
        }

        $encrypted_data = encrypt($merchant_data, $working_key); // Method for encrypting the data.
        ?>
        <form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
        <?php
        echo "<input type=hidden name=encRequest value=$encrypted_data>";
        echo "<input type=hidden name=access_code value=$access_code>";
        ?>
        </form>
    </center>
    <script language='javascript'>document.redirect.submit();</script>
</body>
</html>

