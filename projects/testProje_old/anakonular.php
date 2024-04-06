<?php
declare(strict_types = 1);
//echo "Merhaba" . PHP_EOL;
//echo "<br>";
//$name     = "Sercan";
//$lastname = "özen";
//
//echo $name . " " . $lastname;
//echo "<br>";


//echo strlen($name);
//echo strtoupper($lastname);
//echo mb_strtoupper($lastname);

//define("SAYI", 25);


//function topla($sayi1, $sayi2)
//{
//    return $sayi1 + $sayi2;
//}

//echo topla(sayi4: 20);

//echo topla($sayi1, $sayi2);

function carp()
{
    global $sayi1, $sayi2;

    return $sayi1 * $sayi2;
}

//echo carp();
//print_r($GLOBALS);

//echo $GLOBALS['name'];

//$isimYazdir = function ($name, $lastname) use ($dizi)
//{
//    echo $name . ' ' . $lastname;
//    print_r($dizi);
//};

//$isimYazdir("Aydın", "Küçükoğlu");


//$sayi1 = 1; // Integer
//$name     = "Sercan"; //String
//$lastname = "özen";
//$sayi2 = 25.5; // Double
//$dizi = ['Ankara', "Adana", "Ardahan"];
//
//$isActive = true; // Boolean
//$isActive = false;
//$status = null;
//
////echo ($sayi2 > 29 ? ($sayi1 > 5 ? "İşlem Başarılı" : "Küçük Başarısız") : "küçük");
//$gun = 1;
//switch ($gun)
//{
//    case 1:
//        echo "Pazartesi";
//        break;
//    case 2:
//        echo "Salı";
//        break;
//    case 3:
//        echo "Çarşamba";
//        break;
//    default:
//        echo "Beklenen gün gelmedi";
//        break;
//}
// echo match ($gun)
// {
//     1 => "Pazartesi",
//     2 => "Salı",
//     3 => "Çarşamba",
//     default => "Geçersiz gün"
// };


$person = [
    'name'     => "Ahmet",
    "lastname" => "Yılmaz",
    "address"  => [
        "city"     => "Van",
        "district" => "İlçe"
    ]
];

//$dizi2 = [1,2,3,4,5,6,7, ['Sercan', "Ahmet", 'mehmet'], 2, 3,5,6];

$sayilar1 = [5, 10, 15, 20, 25];
$sayilar2 = [50, 20, 40, 35, 75];


//foreach ($address as $key => $value)
//{
//    echo $key . ":" . $value . "<br>";
//}

//for ($i=0; $i < count($sayilar1); $i++)
//{
//    echo $i+1 . ". eleman: " . $sayilar1[$i] . "<br>";
//}
//$i=0;
//while($i <= 10)
//{
//    echo $i . "<br>";
//    $i++;
//}

//function topla(int|float $sayi1, int $sayi2): int
//{
//    return $sayi1 + $sayi2;
//}
//
//function cikarma(int|float $sayi1, int $sayi2): void
//{
//    $sonuc =  $sayi1 + $sayi2;
//}
//
//echo topla(20.8, 5);


//$string = "215";
//$sayi = (int)$string;
//$sayi = 12;
//
//$text = (string)$sayi;
//var_dump($text);

// Array To String
//$address = [
//  "İstanbul",
//  "Kağıthane"
//];
//
//$longAddress = implode(" - ", $address); // array to string
//
//$shortAddress = explode(" - ", $longAddress); // String to array
////echo $longAddress;
//
//print_r($shortAddress);

$persons = [
    [
        "name"     => "Ali",
        "lastname" => "Yılmaz",
        "age"      => "30",
        "address"  => [
            "city"     => "İstanbul",
            "district" => "Beşiktaş"
        ]
    ],
    [
        "name"     => "Ayşe",
        "lastname" => "Kara",
        "age"      => "25",
        "address"  => [
            "city"     => "Ankara",
            "district" => "Çankaya"
        ]
    ],
    [
        "name"     => "Mehmet",
        "lastname" => "Can",
        "age"      => "28",
        "address"  => [
            "city"     => "İzmir",
            "district" => "Konak"
        ]
    ]
];

function printPersonDetail(array $items, string $prefix = "")
{
    foreach ($items as $key => $value)
    {
        if (is_array($value))
        {
            printPersonDetail($value, $prefix . $key . ' -> ');
        }
        else
        {
            echo $prefix . $key . ": " . $value . "<br>";
//            echo $prefix . "$key: $value<br>";
        }
    }
    echo "<br>";
}

//printPersonDetail($persons);



$jsonData = json_encode($persons);

//echo "Json Veri: " . $jsonData;
$decodeData = json_decode($jsonData);
print_r($decodeData);

//print_r($jsonData);







