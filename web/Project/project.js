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

        }
        else {

        }
    }
}

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