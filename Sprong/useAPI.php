<html>
<head>
    <link href="./CSS/style.css" rel="stylesheet" type="text/css" />
    <title>Use of Sprong API</title>
</head>
<body>
    <?php

        $request = 'http://sprong.azurewebsites.net/Sprong/api.php/users';
        $response  = file_get_contents($request);
        $jsonobj  = json_decode($response);

        foreach($jsonobj->firstname->surname->email->usertype as $value)
        {
            echo("<p>" . "$value" . "</p>");
        }

    ?>

</body>
</html>