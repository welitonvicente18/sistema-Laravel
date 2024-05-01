const inserir = document.querySelector('#inserir');

inserir.addEventListener('click', setResponsavel);

function setResponsavel() {

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