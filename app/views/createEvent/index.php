<section class='welcome__section'>
    <h1 class='heading-secondary'>
        Evento? Bora!
    </h1>
</section>

<section class='event u-margin-bottom-big u-margin-top-big'>
    <form class='col s12 event__form' action='./my-events.html'>
        <div class='event__form-fields'>
            <div class='event__form-left'>

                <div class='row'>
                    <div class='avatar center-align'>
                        <img src='./assets/images/none.png' alt='event picture' class='circle event__form-img'>
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

                <div class='row'>
                    <div class='input-field col s6'>
                        <input type='text' id='date' class='datepicker'>
                        <label for='date'>Escolha o dia</label>
                    </div>
                    <div class='input-field col s6'>
                        <input type='text' id='time' class='timepicker'>
                        <label for='time'>Escolha a hora</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s6'>
                        <input id='price' type='number' class='validate'>
                        <label for='price'>Preço</label>
                    </div>
                    <div class='input-field col s6'>
                        <input id='vacancies' type='number' class='validate'>
                        <label for='vacancies'>Vagas</label>
                    </div>
                </div>
            </div>

            <div class='col s8'>
                
                <div class='row'>
                    <div class='input-field col s12'>
                        <input id='event_name' type='text' class='validate'>
                        <label for='event_name'>Nome do evento</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s12'>
                        <textarea id='description' class='materialize-textarea' data-length='120'></textarea>
                        <label for='description'>Descrição</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s12'>
                        <select id='event_type'>
                            <option value='' disabled selected>Tipo de evento</option>
                            <option value='1'>Option 1</option>
                            <option value='2'>Option 2</option>
                            <option value='3'>Option 3</option>
                        </select>
                        <label for='event_type'>Escolha o tipo de evento</label>
                    </div>
                </div>

                <div class='row'>
                    <div class='input-field col s6'>
                        <select id='event_type'>
                            <option value='' disabled selected>Estado do evento</option>
                            <option value='1'>Option 1</option>
                            <option value='2'>Option 2</option>
                            <option value='3'>Option 3</option>
                        </select>
                        <label for='event_type'>Estado</label>
                    </div>
                    <div class='input-field col s6'>
                        <select id='event_type'>
                            <option value='' disabled selected>Cidade do evento</option>
                            <option value='1'>Option 1</option>
                            <option value='2'>Option 2</option>
                            <option value='3'>Option 3</option>
                        </select>
                        <label for='event_type'>Cidade</label>
                    </div>
                </div>
                <div class='row'>
                    <div class='input-field col s12'>
                        <input id='place' type='text' class='validate'>
                        <label for='place'>Local</label>
                    </div>
                </div>
            </div>
        </div>

        <div class='event__form-submit'>
            <button class='button button--green' type='submit'>
                Enviar &rarr;
            </button>
        </div>
    </form>
</section>
