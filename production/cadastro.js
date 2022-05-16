'use strict'

const openModal = () => document.getElementById('modal')
    .classList.add('active')

const closeModal = () => document.getElementById('modal')
    .classList.remove('active')

const tempClient = {
    nome: "Vasconcelos",
    email: "Vasconcelos@gmail.com",
    celular: "87996820140",
    cidade: "Petrolina",
    cpf: "07958118457",
    estado:"petrolina",
    contrato: "2000"
}
    const getLocalStorage = () => JSON.parse(localStorage.getItem('db_client')) ?? []     
    const setLocalStorage = (dbClient) => localStorage.setItem("db_client", JSON.stringify (dbClient))
  
    //CRUD - create read update delete

    //CRUD DELETE
    const deleteClient = (index) => {
        const dbClient = readClient()
        dbClient.splice(index,1)
        setLocalStorage(dbClient)
    }

    //CRUD - UPDATE
    const updateClient = (index, client) => {
        const dbClient = readClient()
        dbClient[index] = client
        setLocalStorage(dbClient)
    }
    
    //CRUD  - READ
    const readClient = () => getLocalStorage()

    //CRUD - CREATE
    const createClient = (client) => {
        const dbClient = getLocalStorage()
        dbClient.push(client)
        setLocalStorage(dbClient)
    }

    const isValidFields = () => {
        return document.getElementById('form').reportValidity()
    } 
    //INTERACAO COM O LAYOUT
    const clearFields = ( ) => {
        const fields = document.querySelectorAll('.modal-field')
        fields.forEach(field => field.value = "")
    }
    const saveClient = ()=> {
        if(isValidFields()){
            const client = {
                nome: document.getElementById('nome').value,
                email: document.getElementById('email').value,
                celular: document.getElementById('celular').value,
                cidade: document.getElementById('cidade').value,
                estado: document.getElementById('estado').value,
                cpf: document.getElementById('cpf').value,
                contrato: document.getElementById('contrato').value
            }
            createClient(client)
            updateTable()
            closeModal()
        }
    }

const createRow = (client) => {
    const newRow = document.createElement('tr')
    newRow.innerHTML = `
    <td>${client.nome}</td>
    <td>${client.email}</td> 
    <td>${client.celular}</td>
    <td>${client.cidade}</td>
    <td>${client.cpf}</td>
    <td>${client.contrato}</td>
    <td>
        <button type="button" class="button green">editar</button>
        <button type="button" class="button red">excluir</button>
    </td>
    `
    document.querySelector('#tbClient>tbody').appendChild(newRow)
}

const clearTable = () => {
    const rows = document.querySelectorAll('#tbClient>tbody tr')
    rows.forEach(row => row.parentNode.removeChild(row))
}

const updateTable = () => {
    const dbClient = readClient()
    clearTable()
    dbClient.forEach(createRow)
}
updateTable()



//eventos
/*
document.getElementById('cadastrarCliente')
    .addEventListener('click', openModal)

document.getElementById('modalClose')
    .addEventListener('click', closeModal)

document.getElementById('salvar')
    .addEventListener('click', saveClient)

document.querySelector('#tbClient>tbody')
        .addEventListener('click', editDelete)
        */