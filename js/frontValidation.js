
// Login validation script

const form = document.getElementById('formLogin');
const mensagem = document.getElementById('mensagem');

form.addEventListener('submit', (erroPreenchimento) => {
    erroPreenchimento.preventDefault();

    const email = document.getElementById('emailUsuario').value.trim();
    const password = document.getElementById('senhaUsuario').value.trim();

    if (email === '' || password === '') {
        mensagem.style.color = 'red';
        mensagem.innerHTML = 'Por favor, preencha todos os campos.';
    }
    else if( password.length < 8  ){
        mensagem.style.color = 'red';
        mensagem.innerHTML = 'A senha deve ter pelo menos 8 caracteres.';
    }
    else if( !email.includes('@') ){
        mensagem.style.color = 'red';
        mensagem.innerHTML = 'Por favor, insira um endereço de email válido.';
    }
    else {
        form.submit();
    }
})
