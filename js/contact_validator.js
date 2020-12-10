
// Event listener for when a user clicks on the submit button on the contact page
// will check for empty fields and warn user else will submit information
const form = document.querySelector('.contactForm');

form.addEventListener('submit', e => {
    e.preventDefault();

    const name = form.name.value;
    const phone = form.phone.value;
    const email = form.email.value;
    const message = form.message.value;

    if(name == ''){
        alert("Enter a Valid Name!");
        form.name.style.borderColor = "red";
        return false;
    }

    if(phone == ''){
        alert("Enter a Valid Phone Address!");
        form.phone.style.borderColor = "red";
        return false;
    }

    if(email == ''){
        alert("Enter a Valid Email Address!");
        form.email.style.borderColor = "red";
        return false;
    }

    if(message == ''){
        alert("Please enter a message!")
        form.email.style.borderColor = 'red';
        return false;
    }

    form.submit();
});