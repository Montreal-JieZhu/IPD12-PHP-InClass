<?php
/**
 * gents.php
 * 
 * content for the gents page
 * 
 * @version 1.2 2018-04-16
 * @package Smithside Auction KD
 * @copyright (c) 2018, Jie Zhu
 * @license GNU General Public Source
 * @since release 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Home | Smithside Auctions 2018</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>
<?php
    // get the lot information
    $arrData = array(
        array("image" =>'naval-19-173.jpg',
        "name"=>"naval officer's formal tailcoat, 1840s",
        "description" =>"Black wool broadcloth, double breast front, missing 3 of 18 raised round gold buttons w/ 
                crossed cannon barrels &amp; \"Ordnance Corps\" text, silver sequin &amp; tinsel embroidered emblem 
                on each square cut tail, quilted black silk lining, very good;",
            "price" =>5700.00),
        
        array("image" =>'gents-striped-8-26.jpg',
        "name"=> "Striped cotton tailcoat, america, 1835-1845",
        "description" => "Orange and white pin-striped twill cotton, double breasted, turn down collar, waist seam, 
                self-fabric buttons, inside single button pockets in each tail, (soiled, faded, cuff edges
                frayed) good.",
            "price" =>20700.00),
        array("image" =>'gents-black-8-27.jpg',
        "name"=>"Black Broadcloth Tailcoat, 1830-1845",
        "description" =>"Fine thin wool broadcloth, double breasted, notched collar, horizontal front and side waist seam,
                slim long sleeves with notched cuffs, curved tails, black silk satin lining quilted in diamond pattern,
                padded and quilted chest, black silk covered buttons, (buttons worn) excellent.",
            "price" =>3450.00));   
    
    // counter variable for counting row
    $counter = 3;
?>

<h1>Product Category: Gents</h1>

<ul class="ulfancy">    
    <!--Using php for loop to dynamically generate list item-->
    <?php    
    for($rownum=0;$rownum<$counter;$rownum++){
        $rowStyle = "row".($rownum%2);
        $bigImagePath = 'images/'.$arrData[$rownum]['image'];
        $smallImagePath = 'images/thumbnails/'.$arrData[$rownum]['image'];
        $headerTwo = ucwords($arrData[$rownum]['name']);
        $description =  htmlspecialchars($arrData[$rownum]['description']);
        $itemNum = $rownum+1;
        $itemPrice = number_format($arrData[$rownum]['price'], 2);
        include 'gentsItem.php';                
    }      
    ?>    
</ul>


