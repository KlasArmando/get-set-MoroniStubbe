<?php


$datum = date("d-m-Y");
$producten = $_POST['producten'];
$prijzen = $_POST['prijzen'];
$prijs = berekenPrijs($prijzen) ;
$prijsBTW = $prijs * 1.21;

function berekenPrijs($prijzen)
{
    $totaalPrijs = 0;
    foreach($prijzen as $prijs)
    {
        $totaalPrijs += $prijs;
    }
    return $totaalPrijs;
}


?>


Datum: <?=$datum?><br>
<?=$producten[0]?> Prijs: €<?=$prijzen[0]?><br>
<?=$producten[1]?> Prijs: €<?=$prijzen[1]?><br>
<?=$producten[2]?> Prijs: €<?=$prijzen[2]?><br>
Totaalprijs excl. BTW: <?=$prijs?><br>
Totaalprijs incl. BTW: <?=$prijsBTW?><br>