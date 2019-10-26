const contacts = document.querySelector('#contact');

eventListener();

function eventListener() {
    contacts.addEventListener('submit', readForm);
}

function readForm(e) {
    // console.log(e);
    e.preventDefault();

    const name = document.querySelector('#name').value;
    const number = document.querySelector('#number').value;
    const address = document.querySelector('#address').value;
    
    if(name === '' || number === '' || address === '') {
        areTheInputsEmpty();
    }
    else {
        continue;
    }
}

// Check if the text inputs are empty
function areTheInputsEmpty() {
    const notification = document.createElement('div');
    notification.textContent = "Error";

    contacts.insertBefore(notification, document.querySelector('form'));
}