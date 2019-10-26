const contacts = document.querySelector('#contact');

eventListener();

function eventListener() {
    contacts.addEventListener('submit', readForm);
}

function readForm(e) {
    // console.log(e);
    e.preventDefault();

    const name = document.querySelector('#name').value;
    console.log(name);

}