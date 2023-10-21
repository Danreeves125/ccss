let allWaves = document.querySelectorAll('#wave');
let windowX = window.innerWidth;

function getRandomArbitrary(min, max) {
    return Math.floor(Math.random() * (max - min) + min);
}

if(document.querySelector('#wave')) {
    allWaves.forEach(wave => {
        let myWave = wavify( wave, {
            height: getRandomArbitrary(60, 70),
            bones: windowX < 640 ? 2 : 3,
            amplitude: 40,
            color: wave.getAttribute('data-colour'),
            speed: .15
        });
    });
}
