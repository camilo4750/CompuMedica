
var typed = new Typed('#typed', {
strings:[
   'COMPUMEDICA',
   'No somos los unicos, pero nos esforzamos por ser los mejores.'
],
typeSpeed: 50,
backSpped: 50,
loop: true
});

var typed_2 = new Typed('#typed_2', {
    strings:[
        'Chef Profesional',
        'Colombiana y Ganadora de 5 estellas'
    ],
    typeSpeed: 50,
    backSpped: 50,
    loop: true
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
        anchor.addEventListener('click',function(e){
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollintoView({
                behavior: 'smooth'
            });
        });
    });