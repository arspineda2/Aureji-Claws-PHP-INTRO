<!-- PINEDA, ANGEL RAPHAELLE S. | WD 201 | PHP INTRO ACT Started: Nov 28 | -->
<?php 
include 'header.php'; //HEADER 
$po1 = 1300; //VARIABLES 
$po2 = 1000; //$name = value
$po3 = 1000; //Numeric Data Type
?>

    <section class="pressons">
        <div class="box container">
            <img src="Amethyst.png" alt="Amethyst Fang">
            <p><b>Amethyst Fang</b></p>
            <p><em><?php echo $po1; ?> php </em></p> <!--How PHP write to browser or display text-->
        </div>
        <div class="box container">
            <img src="svt.png" alt="SVT Thunder">
            <p><b>SVT Thunder</b></p>
            <p><em><?php echo $po2; ?> php </em></p>
        </div>
        <div class="box container">
            <img src="blue.png" alt="Blue Deep Sea">
            <p><b>Blue Deep Sea</b></p>
            <p><em><?php echo $po3; ?> php </em></p>
        </div>
    </section>

<?php
include 'footer.php'; //FOOTER
?>