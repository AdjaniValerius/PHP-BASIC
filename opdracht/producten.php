<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PRODUCTEN</title>
  </head>
  <body>

  <?php 
  include 'menu.php'; 
  require 'includes/functions.php'; 
  ?>



    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
        
<?php 

?>

        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <?php 
            for( $i=0;$i<count($itemsProducten);$i++) {
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>".  $itemsProducten[$i] . "</td>";
                echo "<td>" . $itemsPrijs[$i] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer(#): </label><input type="text" name="productnummer"> 
    
    &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->

    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->

    <p>voor <?php echo getAmount(); ?> x het product: <?php echo $itemsProducten[ getProductNr() ]; ?> 
    betaal je: <?php echo totaalPrijs() ?></p>
        
    <p>je bent <?php getAge(); ?> je korting is:   <?php korting() ?>  </p>

    </form><!-- dit laten staan! -->

    <footer>
    <?php include 'footer.php';
    ?>
    </footer>

  </body>

</html>