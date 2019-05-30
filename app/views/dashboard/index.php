<section class='welcome__section'>
    <h1 class='heading-secondary'>
        Pronto para encontrar sua proxima aventura?
    </h1>
</section>

<section class='cards__section'>
    <?php 
        $array = $data['categories']; 

        for($i = 0; $i < count($array); $i ++) {
            echo "<div class='feature-card'>
                    <svg class='feature-card__icon'>
                        <use xlink:href='./assets/images/sprite.svg#tent'></use>
                    </svg>
                    <h3 class='feature-card__text'>";
            echo $array[$i]["name"];
            echo "</h3></div>";
        }
    ?>
</section>
