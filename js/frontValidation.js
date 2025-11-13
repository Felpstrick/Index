
// Login validation script

const formLogin = document.getElementById('formLogin');
const msgLogin = document.getElementById('msgLogin');

if (formLogin) {
    formLogin.addEventListener('submit', (erroPreenchimento) => {
        erroPreenchimento.preventDefault();
    
        const emailLogin = document.getElementById('emailLogin').value.trim();
        const senhaLogin = document.getElementById('senhaLogin').value.trim();
    
        if (emailLogin === '' || senhaLogin === '') {
            msgLogin.style.color = 'red';
            msgLogin.innerHTML = 'Por favor, preencha todos os campos.';
        }
        else if( senhaLogin.length < 8  ){
            msgLogin.style.color = 'red';
            msgLogin.innerHTML = 'A senha deve ter pelo menos 8 caracteres.';
        }
        else if( !emailLogin.includes('@') ){
            msgLogin.style.color = 'red';
            msgLogin.innerHTML = 'Por favor, insira um endereço de email válido.';
        }
        else {
            formLogin.submit();
        }
    })
}

const formUsuario = document.getElementById('formUsuario');
const msgCadastro = document.getElementById('msgCadastro');

if (formUsuario){
    formUsuario.addEventListener('submit', (erroPreenchimento) => {
        erroPreenchimento.preventDefault();
        console.log('Validating form...');
    
        const nomeUsuario = document.getElementById('nomeUsuario').value.trim();
        const emailUsuario = document.getElementById('emailUsuario').value.trim();
        const senhaUsuario = document.getElementById('senhaUsuario').value.trim();
        const confirmarSenhaUsuario = document.getElementById('confirmarSenhaUsuario').value.trim();
    
        if (nomeUsuario === '' || emailUsuario === '' || senhaUsuario === '' || confirmarSenhaUsuario === '') {
            msgCadastro.style.color = 'red';
            msgCadastro.innerHTML = 'Por favor, preencha todos os campos.';
        }
        else if( senhaUsuario.length < 8  ){
            msgCadastro.style.color = 'red';
            msgCadastro.innerHTML = 'A senha deve ter pelo menos 8 caracteres.';
        }
        else if( senhaUsuario !== confirmarSenhaUsuario ){
            msgCadastro.style.color = 'red';
            msgCadastro.innerHTML = 'As senhas não coincidem.';
        }
        else if( !emailUsuario.includes('@') ){
            msgCadastro.style.color = 'red';
            msgCadastro.innerHTML = 'Por favor, insira um endereço de email válido.';
        }
        else {
            formUsuario.submit();
        }
    });
}
