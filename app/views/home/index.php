
<header class='header'>
    <div class='header__text-box'>
        <h1 class='heading-primary'>
            <span class='heading-primary--main'>With me</span>
            <span class='heading-primary--sub'>aventure-se com pessoas</span>
        </h1>
    </div>
    <svg width='100%' height='172' viewBox='0 0 100% 172' fill='none' class='wave'>
        <path>
            <animate repeatCount='indefinite' fill='freeze' attributeName='d' dur='10s'
            values='M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z;

            M0 86.3149C316 86.315 444 159.155 884 51.1554C1324 -56.8446 1320.29 34.1214 1538 70.4063C1814 116.407 2156 188.408 2560 86.315V232.317L0 232.316V86.3149Z;

            M0 53.6584C158 11.0001 213 0 363 0C513 0 855.555 115.001 1154 115.001C1440 115.001 1626 -38.0004 2560 53.6585V199.66L0 199.66V53.6584Z;
        
            M0 25.9086C277 84.5821 433 65.736 720 25.9086C934.818 -3.9019 1214.06 -5.23669 1442 8.06597C2079 45.2421 2208 63.5007 2560 25.9088V171.91L0 171.91V25.9086Z;' />
        </path>
    </svg>
</header>

<main>

    <section id='about' class='section-about'>
        <div class='u-center-text u-margin-bottom-big'>
            <h2 class='heading-secondary'>
                Incentivamos a conexão entre pessoas
            </h2>
        </div>

        <div class='section-about__content'>
            <div class='section-about__text'>
                <h3 class='heading-tertiary u-margin-bottom-small'>Encontre alguem para qualquer aventura a qualquer hora</h3>
                <p class='paragraph'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                    ducimus quam nisi exercitationem omnis earum qui Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque veritatis expedita laboriosam qui laudantium recusandae, 
                    impedit nihil quo sapiente iure consectetur tempora laborum quam ad maxime amet temporibus fugiat sed. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt praesentium, iste voluptates alias magnam nihil architecto! Recusandae repudiandae 
                </p>
            </div>

            <div class='section-about__cards'>
                <div class='feature-card'>
                    <svg class='feature-card__icon'>
                        <use xlink:href='./assets/images/sprite.svg#tent'></use>
                    </svg>
                    <h3 class='feature-card__text'>
                        Acampar
                    </h3>
                </div>
                <div class='feature-card'>
                    <svg class='feature-card__icon'>
                        <use xlink:href='./assets/images/sprite.svg#cheers'></use>
                    </svg>
                    <h3 class='feature-card__text'>
                        Bares
                    </h3>
                </div>
                <div class='feature-card'>
                    <svg class='feature-card__icon'>
                        <use xlink:href='./assets/images/sprite.svg#mask'></use>
                    </svg>
                    <h3 class='feature-card__text'>
                        Festas
                    </h3>
                </div>
                <div class='feature-card'>
                    <svg class='feature-card__icon'>
                        <use xlink:href='./assets/images/sprite.svg#airplane'></use>
                    </svg>
                    <h3 class='feature-card__text'>
                        Viagems
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section id='stories' class='section-stories'>
        <div class='bg-video'>
            <video class='bg-video__content' autoplay muted loop>
                <source src='./assets/videos/Cheering-Crowd.mp4' type='video/mp4'>
                Seu navegador não supporta esta feature!
            </video>
        </div>

        <div class='u-center-text u-margin-bottom-big'>
            <h2 class='heading-secondary'>
                Reviews dos nossos usuários
            </h2>
        </div>

        <div class='stories'>
            <div class='story'>
                <figure class='story__shape'>
                    <img src='./assets/images/nat-8.jpg' alt='Person on a tour' class='story__img'>
                    <figcaption class='story__caption'>Mary Smith</figcaption>
                </figure>
                <div class='story__text'>
                    <h3 class='heading-tertiary u-margin-bottom-small'>Eu fui no melhor acampamento de todos!</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>

            <div class='story'>
                <figure class='story__shape'>
                    <img src='./assets/images/nat-9.jpg' alt='Person on a tour' class='story__img'>
                    <figcaption class='story__caption'>Jack Wilson</figcaption>
                </figure>
                <div class='story__text'>
                    <h3 class='heading-tertiary u-margin-bottom-small'>WOW! With me me ajudou a conhecer uma galera incrivel!</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur libero repellat quis consequatur
                        ducimus quam nisi exercitationem omnis earum qui. Aperiam, ipsum sapiente aspernatur libero
                        repellat quis consequatur ducimus quam nisi exercitationem omnis earum qui.
                    </p>
                </div>
            </div>
        </div>

        <div class='u-center-text u-margin-top-huge'>
            <a class='button-text modal-trigger' href='#login' onclick="modalLogin()">Participe da nossa historia &rarr;</a>
        </div>
    </section>

    <section id='book' class='section-book'>
        <div class='book'>
            <div class='book__form'>
                <form action='#' class='form'>
                    <div class='u-margin-bottom-small'>
                        <h2 class='heading-secondary'>
                            Mande uma mensagem!
                        </h2>
                    </div>
    
                    <div class='form__group'>
                        <input type='text' class='form__input' placeholder='Nome' id='name' required>
                        <label for='name' class='form__label'>Nome</label>
                    </div>
    
                    <div class='form__group'>
                        <input type='email' class='form__input' placeholder='Email' id='email' required>
                        <label for='email' class='form__label'>Email</label>
                    </div>
    
                    <div class='form__group'>
                        <input type='text' class='form__input' placeholder='Mensagem' id='message' required>
                        <label for='message' class='form__label'>Mensagem</label>
                    </div>
    
                    <div class='form__group'>
                        <button class='button button--green'>Enviar &rarr;</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>
