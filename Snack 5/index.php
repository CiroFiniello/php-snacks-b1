<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->
<?php 
$paragraph = "L'alba di un nuovo giorno portava con sé promesse di avventure e scoperte. Le montagne si ergevano maestose contro il cielo, avvolte in una luce dorata che sembrava renderle vive. Il canto degli uccelli riempiva l'aria, creando una melodia naturale che accompagnava i primi passi del mattino. Ogni respiro era un dono, un'opportunità di immergersi nella bellezza del mondo circostante. I fiori sbocciavano con colori vivaci, offrendo uno spettacolo visivo che risvegliava i sensi. Il vento leggero portava il profumo della terra bagnata, evocando ricordi di tempi passati. In lontananza, il fiume scorreva placido, il suo mormorio un costante richiamo alla tranquillità. Ogni elemento della natura sembrava in perfetta armonia, un promemoria della semplicità e della pace che spesso sfuggono nella frenesia quotidiana. Così, con il cuore pieno di gratitudine, si iniziava la giornata, pronti ad accogliere tutto ciò che essa avrebbe offerto";

$splittedParagraph = explode(".",$paragraph);
?>

<ul>
    <?php foreach ($splittedParagraph as $period ) { ?> 

        <li>
            <p>
                <?php echo $period; ?>
            </p>
        </li>


<?php } ?>
</ul>