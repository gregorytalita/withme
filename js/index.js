const modalElement = document.querySelector('.modal')
const modalBackdrop = document.querySelector('.modal__backdrop')
const nav = document.querySelector('nav')

// window.addEventListener('scroll', () => {
//     window.scrollY >= 500
//         ? nav.style.backgroundColor = '#13393a6b'
//         : nav.style.backgroundColor = 'transparent'
// })

document.addEventListener('DOMContentLoaded', function() {
    const sidenav = document.querySelectorAll('.sidenav')
    const sidenavInstance = M.Sidenav.init(sidenav)
})

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.querySelectorAll('.modal')
    const modalInstance = M.Modal.init(modal)
})

const loginModal = () => {
    if(modalElement.style.display === 'block'){
        modalElement.style.display = 'none'
        modalElement.style.opacity = 0 

        modalBackdrop.style.display = 'none'
        modalBackdrop.style.opacity = 0
        return 0
    }
    modalBackdrop.addEventListener('click', () => loginModal())
    modalElement.style.display = 'block'
    modalElement.style.opacity = 1
        
    modalBackdrop.style.display = 'block'
    modalBackdrop.style.opacity = 1 
}

const subscribe = () => {
    const modal = document.querySelector('.modal')
    const title = modal.querySelector('h1')
    title.innerText = 'Inscreva-se'

    const form = modal.querySelector('form')
    form.action = '/auth/register/'
    form.innerHTML = "<div class='form__group'>\
            <input name='fullname' type='text' class='form__input form__input--green' placeholder='Nome Completo' id='fullname-login' required>\
            <label for='fullname-login' class='form__label'>Nome completo</label>\
        </div>\
        <div class='form__group'>\
            <input name='email' type='email' class='form__input form__input--green' placeholder='Email' id='email-login' required>\
            <label for='email-login' class='form__label'>Email</label>\
        </div>\
        <div class='form__group'>\
            <input name='password' type='password' class='form__input form__input--green' placeholder='Senha' id='password' required>\
            <label for='password' class='form__label'>Senha</label>\
        </div>\
        <div class='form__group'>\
            <input name='confirmPassword' type='password' class='form__input form__input--green' placeholder='Confirme a senha' id='password_confirm' required>\
            <label for='password_confirm' class='form__label'>Confirme a senha</label>\
        </div>\
        <div class='modal__form--button-group'>\
            <div class='form__group u-margin-bottom-small u-margin-top-small u-center-text'>\
                <button type='submit' class='button button--green'>Cadastrar &rarr;</button>\
            </div>\
            <div class='form__group'>\
                <p class='paragraph u-margin-bottom-small u-center-text'> \
                    Já possui uma conta? \
                    <a onclick='modalLogin()'>Faça o Login!</a>\
                </p>\
            </div>\
        </div>"
}

const modalLogin = () => {
    const modal = document.querySelector('.modal')
    const title = modal.querySelector('h1')
    title.innerText = 'Login'

    const form = modal.querySelector('form')
    form.action = '/auth/login/'
    form.innerHTML = '<div class="form__group">\
                <input name="email" value="" type="email" class="form__input form__input--green" placeholder="Email" id="email-login" required>\
                <label for="email-login" class="form__label">Email</label>\
            </div>\
            <div class="form__group">\
                <input name="password" value="aaaaaa" type="password" class="form__input form__input--green" placeholder="Senha" id="password" required>\
                <label for="password" class="form__label">Senha</label>\
            </div>\
            <div class="modal__form--button-group">\
                <div class="form__group u-margin-bottom-small u-margin-top-small u-center-text">\
                    <button type="submit" class="button button--green">\
                        Entrar &rarr;\
                    </button>\
                </div>\
                <div class="form__group">\
                    <p class="paragraph u-margin-bottom-small u-center-text">\
                        Ainda não possui uma conta? <a onclick="subscribe()">Inscreva-se aqui!</a>\
                    </p>\
                    <p class="paragraph u-margin-bottom-small u-center-text">\
                        Esqueceu a senha? <a onclick="forgotPassword()">A gente ajuda a lembrar!</a>\
                    </p>\
                </div>\
            </div>'
}

const forgotPassword = () => {
    const modal = document.querySelector('.modal')
    const title = modal.querySelector('h1')
    title.innerText = 'Esqueci minha senha'

    const form = modal.querySelector('form')
    form.innerHTML = "<div class='form__group'><input type='email' class='form__input form__input--green' placeholder='Email' id='email-login' required><label for='email-login' class='form__label'>Email</label></div><div class='modal__form--button-group'><div class='form__group u-margin-bottom-small u-margin-top-small u-center-text'><button onclick='modalLogin()' class='button button--green'>Enviar &rarr;</button></div><div class='form__group'><p class='paragraph u-margin-bottom-small u-center-text'>Lembrou a senha? <a onclick='modalLogin()'>Faça o login!</a></p></div></div>"

}
