var wpcf7Elm = document.querySelector( '.wpcf7' );

document.addEventListener( 'wpcf7submit', function( event ) {
    Swal.fire({
        title: 'Thank you for you Enquiry',
        text: 'We will be in touch soon!',
        icon: 'success',
        confirmButtonText: 'Close',
    });

    console.log('form submitted');
}, false );

if(document.querySelector('.form__select')) {
    const choices = new Choices('.form__select',{
        placeholder: true,
    });

    const choicesJs = document.querySelectorAll('.form__select');
    choicesJs.forEach(choice => {
        let choices = new Choices(choice);
    });
}