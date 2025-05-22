const form = document.getElementById('agenda-form');
const lista = document.getElementById('agenda-lista');

let compromissos = [];

form.addEventListener('submit', function(event) {
    event.preventDefault();
    
    const titulo = document.getElementById('titulo').value;
    const data = document.getElementById('data').value;

    const compromisso = {
        id: Date.now(),
        titulo,
        data
    };

    compromissos.push(compromisso);
    atualizarLista();

    form.reset();
});

function atualizarLista() {
    lista.innerHTML = '';

    compromissos.forEach(compromisso => {
        const li = document.createElement('li');
        li.className = 'item';
        
        const texto = document.createElement('span');
        texto.textContent = `${compromisso.titulo} - ${new Date(compromisso.data).toLocaleString()}`;

        const actions = document.createElement('div');
        actions.className = 'actions';

        const btnEditar = document.createElement('button');
        btnEditar.textContent = '✏️';
        btnEditar.onclick = () => editarCompromisso(compromisso.id);

        const btnExcluir = document.createElement('button');
        btnExcluir.textContent = '🗑️';
        btnExcluir.onclick = () => excluirCompromisso(compromisso.id);

        actions.appendChild(btnEditar);
        actions.appendChild(btnExcluir);

        li.appendChild(texto);
        li.appendChild(actions);

        lista.appendChild(li);
    });
}

function editarCompromisso(id) {
    const compromisso = compromissos.find(c => c.id === id);
    const novoTitulo = prompt('Editar título:', compromisso.titulo);
    const novaData = prompt('Editar data (aaaa-mm-ddThh:mm):', compromisso.data);

    if (novoTitulo && novaData) {
        compromisso.titulo = novoTitulo;
        compromisso.data = novaData;
        atualizarLista();
    }
}

function excluirCompromisso(id) {
    compromissos = compromissos.filter(c => c.id !== id);
    atualizarLista();
}
