const contacts = document.querySelector('#contact');
const contactsList = document.querySelector('#contactsList tbody');

eventListener();

function eventListener() {
    contacts.addEventListener('submit', readForm);

    // Listener to delete
    contacts.addEventListener('click', deleteContact);
}

function readForm(e) {
    // console.log(e);
    //e.preventDefault();

    const name = document.querySelector('#name').value;
    const number = document.querySelector('#number').value;
    const address = document.querySelector('#address').value;
    const action = document.querySelector('#action').value;
    
    if(name === '' || number === '' || address === '') {
        areTheInputsEmpty("Please fill out all the inputs", "Error");
    }
    else {
        // Validation to Ajax
        const contactInfo = new FormData();
        contactInfo.append('name', name);
        contactInfo.append('number', number);
        contactInfo.append('address', address);
        contactInfo.append('action', action);

        console.log(...contactInfo);

        if(action === 'create') {
            const dataCreate = addToDB(contactInfo);
            dataCreate.then(data => {
                console.log(data);
            });
        }
        else {

        }
    }
}

// Add to Database through Ajax
function addToDB(data) {
    return fetch(
        'contactsModel.php',
        {
            method: 'POST',
            body: data
        }
    )
    .then(response => {
        if(response.ok) {
            console.log(response)
            return response.text();
        } else {
            console.log("Problem with insertion data")
        }
    })
}

// Delete Contacts
function deleteContact() {
    console.log('Click!');
}

// Edit and delete items in database

// function editAndDelete(data) {
//     const xhr = new XMLHttpRequest();

//     xhr.open('POST', 'contactsModel.php', true);

//     xhr.onload = function() {
//         if (this.status === 200) {

//             const buttonContainer = document.createElement('td');

//             // Edit button  

//             const editIcon = document.createElement('i');
//             editIcon.classList.add('small', 'material-icons');

//             const editConnection = document.createElement('a')
//             editConnection.appendChild(editIcon);
//             editConnection.href = 'editContact.php?id=${response.data.}';

//         }
//     }

//     xhr.send(data);
// }

// Check if the text inputs are empty
function areTheInputsEmpty(message, type) {
    const notification = document.createElement('div');
    notification.classList.add(type, 'notification', 'shadow',);
    notification.textContent = message;

    // Add the Error
    contacts.insertBefore(notification, document.querySelector('form div'));

    // Hide the error message
    setTimeout(() => {
        notification.classList.add('visible');
        
        setTimeout(() => {
            notification.classList.remove('visible');
            
            setTimeout(() => {
                notification.remove();
            }, 500)
        }, 3000)
    }, 100);
}