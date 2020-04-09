<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $saxeli = $_POST["saxeli"];
    $gvari = $_POST["gvari"];
    $dabTarigi = $_POST["dabTarigi"];
    $Pnomeri = $_POST["Pnomeri"];
    $misamarti = $_POST["misamarti"];
    $regTarigi = $_POST["regTarigi"];
    $mobiluri = $_POST["mobiluri"];
    $damInfo = $_POST["damInfo"];

    if(strlen($saxeli) > 2 && strlen($saxeli) <20){
        $Ssaxeli = $saxeli;
    }else
    $Ssaxeli = "სახელი არასწორია სცადედ ხელახლა";

    if(strlen($gvari) > 3 && strlen($gvari) <50){
        $Sgvari = $gvari;
    }else
    $Sgvari = "გვარი არასწორია სცადედ ხელახლა";

    if(strlen($Pnomeri) > 10 && strlen($Pnomeri) <12 && is_numeric($Pnomeri)){
        $SPnomeri = $Pnomeri;
    }else
    $SPnomeri = "პირადი ნომერი არასწორია სცადედ ხელახლა";

    if(strlen($Pnomeri) > 0 && strlen($misamarti) <70){
        $Smisamarti = $misamarti;
    }else
    $Smisamarti = "მისამართი არასწორია სცადედ ხელახლა";

    echo 
"<table border = '1' width = '00'>
    <tr border = '1' >
    <td bprder = '1'>სახელი
    </td>
    <td bprder = '1' width = '400'>$Ssaxeli
    </tr>
    <tr border = '1'>
    <td bprder = '1'>გვარი
    </td>
    <td bprder = '1'>$Sgvari
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>დაბადების თარიღი
    </td>
    <td bprder = '1'>$dabTarigi
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>პირადი ნომერი
    </td>
    <td bprder = '1'>$SPnomeri
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>მისამართი
    </td>
    <td bprder = '1'>$Smisamarti
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>რეგისტრაციის თარიღი
    </td>
    <td bprder = '1'>$regTarigi
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>მობილური
    </td>
    <td bprder = '1'>$mobiluri
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>დამატებითი ინფორმაცია
    </td>
    <td bprder = '1'>$damInfo
    </td>
    </tr>
    </table>";
    ?>
</body>
</html>