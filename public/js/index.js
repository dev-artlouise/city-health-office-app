const btnSubmit = document.querySelector('#btn-submit');

btnSubmit.addEventListener('click', event => {
    event.preventDefault(event);
    swal('Hello World');
})