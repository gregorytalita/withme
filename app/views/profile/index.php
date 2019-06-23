<section class='welcome__section'>
    <h1 class='heading-secondary'>
        Seu Perfil
    </h1>
</section>

<section class='profile u-margin-bottom-big u-margin-top-big'>
    <form class='col s12 profile__form' action='/profile/edit' method='POST'>
        <div class='event__form-fields'>
            <div class='profile__form-left'>
                <div class='row'>
                    <div class='avatar center-align'>
                        <img src='/assets/images/profile.jpeg' alt='Profile picture' class='circle profile__form-img'>
                    </div>
                </div>
                <div class='row'>
                    <div class='file-field input-field'>
                        <div class='btn'>
                            <span>Foto</span>
                            <input type='file'>
                        </div>
                        <div class='file-path-wrapper'>
                            <input class='file-path validate' type='text'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col s8'>
                <div class='row'>
                    <div class='input-field col s12'>
                        <input name='fullname' id='fullname' type='text' class='validate' value='<?=$data['fullname']?>' required>
                        <label for='fullname'>Nome completo</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <input name='email' id='email' type='email' class='validate' value='<?=$data['email']?>' required>
                        <label for='email'>Email</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s6'>
                        <input name='password' value='' id='password' type='password' class='validate' required>
                        <label for='password'>Nova Senha</label>
                    </div>
                    <div class='input-field col s6'>
                        <input name='passwordConfirm' id='password_confirm' type='password' class='validate' required>
                        <label for='password_confirm'>Confirme a senha</label>
                    </div>
                </div>
            </div>
        </div>
        <div class='event__form-submit'>
            <button class='button button--green' type='submit'>
                Salvar &rarr;
            </button>
        </div>
    </form>
</section>
