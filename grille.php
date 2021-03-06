<?php
 
// Configuration de la grille
 
$grid_width  = 7; // largeur de la grille
$grid_height = 14; // hauteur de la grille
$cell_width  = 100; // largeur d'une cellule
$cell_height = 100; // hauteur d'une cellule
$gutter      = 5;  // espacement des cellules
 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grid</title>
    <style type="text/css" media="screen">
    body {
        background-color: #efefef;
    }
 
    .grid .row {
        margin-left: -<?php echo $gutter?>px;
    }
 
    .grid .row:after {
        content: " ";
        visibility: hidden;
        display: block;
        height: 0;
        clear: both;
    }
 
    .grid .cell {
        display: block;
        float: left;
        margin-left: <?php echo $gutter?>px;
        margin-bottom: <?php echo $gutter?>px;
        width: <?php echo $cell_width?>px;
        height: <?php echo $cell_height?>px;
        border: 1px solid #ccc;
        border-top: none;
        border-left: none;
        cursor: pointer;
        background: white;
        -webkit-transition: background 200ms linear;
        -moz-transition: background 200ms linear;
        -ms-transition: background 200ms linear;
        -o-transition: background 200ms linear;
        transition: background 200ms linear;
    }
 
    .grid .cell:hover {
        background-color: DarkOrange;
    }
    </style>
    </head>
<body>
    <div class="grid">
    <?php for ($w=0; $w<$grid_width; $w++): ?>
        <div class="row">
        <?php for ($h=0; $h<$grid_height; $h++): ?>
            <span class="cell"></span>
        <?php endfor ?>
        </div>
    <?php endfor ?>
    </div>
</body>
</html>