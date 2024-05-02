const inserir = document.querySelector('#inserir');

inserir.addEventListener('click', setResponsavel);

const idenficador = Math.floor(Math.random() * (1 + 99) + 10);

function setResponsavel() {

    const formResponsavel = document.querySelector("#form-responsavel")
    const CloneFormResponsavel = formResponsavel.cloneNode(true)
    CloneFormResponsavel.classList.add('form-responsavel-' + idenficador);
    const hr = document.createElement('hr')
    hr.setAttribute('class', 'row mt-2')

    const h5 = document.createElement('h5');
    h5.classList.add('text-laranja')
    h5.innerText = 'Responsável';

    const titulo = document.createElement('div');
    titulo.setAttribute('class', 'col-12 mt-2')
    titulo.appendChild(h5);

    // const excluir = document.createElement('div');
    // excluir.setAttribute('class', 'col-3');

    const spanExcluir = document.createElement('span');
    const divExcluir = CloneFormResponsavel.querySelector('#exluir');
    spanExcluir.innerHTML = '<i class="bi bi-x-octagon text-danger" style="font-size: 2em;cursor:pointer" onClick="excluirResponsavel(' + idenficador + ')"><span class="text-danger" style="font-size: 1em!important;"> Remover Responsável</span></i>';
    divExcluir.appendChild(spanExcluir);

    formResponsavel.append(titulo, hr, CloneFormResponsavel,)
}

function excluirResponsavel(idenficador) {
    if (confirm("Deseja excluir o Responsável?") == true) {
        console.log(this)
        const formResponsavel = document.querySelector('.form-responsavel-' + idenficador)
        formResponsavel.remove()
    } else {
        alert('asdf2');
    }
}

function setResponsavel2() {

    const divForm = document.querySelector('#responsavel');
    const inputsForm = divForm.getElementsByTagName("input")
    const divResponsavelList = document.querySelector("#responsavel-list")

    divResponsavelList.classList.add('row')

    const titulo = document.createElement('div');
    titulo.classList.add('col-12')
    titulo.classList.add('mt-2')

    const h5 = document.createElement('h5');
    h5.classList.add('text-laranja')
    h5.innerText = 'Responsável';

    titulo.appendChild(h5);
    divResponsavelList.appendChild(titulo);

    const hr = document.createElement('hr');
    divResponsavelList.appendChild(hr)
    divResponsavelList.classList.add('mt-2')

    for (let index = 0; index <= inputsForm.length; index++) {

        if (inputsForm[index].value == '') continue;

        const createLabel = document.createElement('label');
        const createInput = document.createElement('input');

        createLabel.innerHTML = renomeiaLabel(inputsForm[index].name);

        createInput.setAttribute('name', inputsForm[index].name);
        createInput.setAttribute('value', inputsForm[index].value);
        createInput.classList.add('form-control');

        const div = document.createElement('div');
        div.classList.add('col-3')

        div.appendChild(createLabel);
        div.appendChild(createInput);
        divResponsavelList.appendChild(div);
    }
}

function renomeiaLabel(name) {

    let newName = '';
    switch (name) {
        case 'parentesco':
            newName = 'Parentesco';
            break;
        case 'nome':
            newName = 'Nome';
            break;
        case 'cpf':
            newName = 'CPF';
            break;
        case 'rg':
            newName = 'RG';
            break;
        case 'dt_nascimento':
            newName = 'Data de Nascimento';
            break;
        case 'email':
            newName = 'E-mail';
            break;
        case 'telefone':
            newName = 'Telefone';
            break;
    }

    return newName;
}