

// Login validation script
const formLogin = document.getElementById('formLogin');
const msgLogin = document.getElementById('msgLogin');

if (formLogin) {
    document.addEventListener('DOMContentLoaded', () => {
        function verificarCampos(){
            const botaoLogin = document.getElementById('btnLogin');
            const campos = document.querySelectorAll('input[required]');
            const preenchido = true;

            campos.forEach((campo) => {
                if (campo.value.trim() === '') {
                    preenchido = false;
                }
            });
            botaoLogin.disabled = !preenchido;
        }
        formLogin.addEventListener('input', verificarCampos);
        verificarCampos();
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
        });
    });
    
}



// User registration validation script
const formUsuario = document.getElementById('formUsuario');
const msgCadastro = document.getElementById('msgCadastro');

if (formUsuario){
    document.addEventListener('DOMContentLoaded', () => {
        // Enable/disable submit button based on required fields
        function verificarCampos(){
            const botaoCadastro = document.getElementById('btnCadastro');
            const campos = document.querySelectorAll('input[required]');
            const preenchido = true;

            campos.forEach((campo) => {
                if (campo.value.trim() === '') {
                    preenchido = false;
                }
            });
            botaoCadastro.disabled = !preenchido;
        }
        formUsuario.addEventListener('input', verificarCampos);
        verificarCampos();
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
    });
}


// Book registration validation script
const formLivro = document.getElementById('formLivro');
const msgLivro = document.getElementById('msgLivro');
if (formLivro){
    formLivro.addEventListener('submit', (erroPreenchimento) => {
        erroPreenchimento.preventDefault();
        
        const nomeLivro = document.getElementById('nomeLivro').value.trim();
        const autorLivro = document.getElementById('autorLivro').value.trim();
        const editoraLivro = document.getElementById('editoraLivro').value.trim();
        const publicacaoLivro = document.getElementById('publicacaoLivro').value.trim();
        const generoLivro = document.getElementById('generoLivro').value.trim();
        if (nomeLivro === '' || autorLivro === '' || editoraLivro === '' || publicacaoLivro === '' || generoLivro === '') {
            msgLivro.style.color = 'red';
            msgLivro.innerHTML = 'Por favor, preencha todos os campos.';
        }
        else {
            formLivro.submit();
        }
    });
}