<?php

class Curl {

    public $api = "https://api.api-ninjas.com/v1/quotes?category=success";
    public $key = "+Pk+4v6oFWn/MjYqIlAgIg==im0ODDHu4XiWHlbU";


    public function get(){

        $ch = curl_init();
        curl_setopt($ch , CURLOPT_URL ,$this->api);
        curl_setopt($ch , CURLOPT_RETURNTRANSFER ,1);
        curl_setopt($ch , CURLOPT_HTTPHEADER ,[
            'X-Api-Key: ' . $this->key
        ]);

        $response = curl_exec($ch);


        $result = json_decode($response , true);

        $x = "<b>" . $result [0]['quote'] . "</b><br>" . "<p style='font-size: 30px;''>\"" .$result [0]['author']. "\"</p>";

        return $x;

    }
}

$api = new Curl();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script></script>
    <style>
        html{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        div{
            margin-top: 400px;
        }
        .p2{
            font-size: 40px;
        }
    </style>
</head>
<body>

    <div>
        <p class="p2"><?php echo $api->get(); ?></p>
    </div>

</body>
</html>