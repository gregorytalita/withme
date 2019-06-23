<section class='welcome__section'>
    <h1 class='heading-secondary'>
        <?php echo $data['event']['name'] ?>
    </h1>
</section>

<div class='event-presentation__section u-margin-bottom-big u-margin-top-big '>
    <div class="event-presentation" >
        <div class="event-presentation__details" style="min-width: 800px;  display: flex; flex-direction: column;"> 
            <div class="event-presentation__details-content">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <div class="event-presentation__details-header">
                            <img src="/assets/images/event-01.jpg" alt="Event picture" class="circle event-presentation__details-img">
                            <div>
                                <span class="title">
                                    <?php echo $data['event']['date']?>
                                </span>
                                <p>
                                    R$<?php echo $data['event']['price']?>
                                </p>
                            </div>
                        </div>
                        <?php 
                            if($data['subscribed'] == false){
                        ?>
                            <a href="/events/subscribe/<?php echo $data['event']['id'] ?>" class="secondary-content">
                                <i class="material-icons">add</i>
                            </a>
                        <?php } else { ?>
                            <a href="/events/unsubscribe/<?php echo $data['event']['id'] ?>" class="secondary-content">
                                <i class="material-icons">remove</i>
                            </a>
                        <?php } ?>
                    </li>
                    <li class="collection-item">
                        <div>
                            Descrição
                            <br/>
                            <?php echo $data['event']['description']?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            Horario
                            <a href="#!" class="secondary-content">
                                <?php echo $data['event']['time']?>
                            </a>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            Valor
                            <a href="#!" class="secondary-content">
                                R$ <?php echo $data['event']['price']?>
                            </a>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            Local
                            <a href="#!" class="secondary-content">
                                <?php echo $data['event']['place']?>
                            </a>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            Cidade
                            <a href="#!" class="secondary-content">
                                <?php echo $data['event']['city']?>
                            </a>
                        </div>
                    </li>
                    <li class="collection-item">
                        <div>
                            Local
                            <a href="#!" class="secondary-content">
                                <?php echo $data['event']['state']?>
                            </a>
                        </div>
                    </li>
                    <li class="collection-item">
                        Inscritos
                        <div class="secondary-content">
                            <?php 
                                foreach($data['subscriptions'] as $subscription){
                            ?> 
                                <img 
                                    src="/assets/images/profile.jpeg" 
                                    alt="Profile subscribed" 
                                    class="event-presentation__subscribed tooltipped"
                                    data-position="bottom" data-tooltip="<?php echo $subscription['fullname']?>"
                                >
                            <?php } ?>
                        </div>
                    </li>
                </ul>
            </div>
            <?php if($data['owner'] == true){?>
                <div style='display: flex; justify-content: space-between'> 
                    <a class='button-text'>Editar</a>
                    <a class='button-text' href='/events/deleteEvent/<?php echo $data["event"]["id"] ?>'>Excluir</a>
                </div>
            <? } ?>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const elems = document.querySelectorAll('.tooltipped')
        const instances = M.Tooltip.init(elems)
    })
</script>
