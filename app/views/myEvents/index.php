<section class='welcome__section'>
    <h1 class='heading-secondary'>
        Seus eventos!!
    </h1>
</section>

<section class='events-section'>
    <?php 
        $array = $data['events']; 
        if(sizeof($array) > 0){
            for($i = 0; $i < count($array); $i ++) {
            ?>
                <div class="card event-card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="/assets/images/event-01.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            <?php echo $array[$i]["name"] ?>
                            <i class="material-icons right">more_vert</i>
                        </span>
                        <p><a href="/events/event/<?php echo $array[$i]['id']?>">Veja mais detalhes</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">
                            <?php echo $array[$i]["name"] ?>
                            <i class="material-icons right">close</i>
                        </span>
                        <p>
                            <?php echo $array[$i]['description']?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        <?php } ?> 
        <? if(sizeof($array) == 0){
            require './app/views/layout/error.php';
            }
        ?>
</section>
