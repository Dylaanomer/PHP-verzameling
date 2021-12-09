var AOTchars_random = [
    "eren",
    "mikasa",
    "jean",
    "historia",
    "erwin",
    "levi",
    "zeke",
    "grisha",
    "kenny",
    "annie",
    
]

let answer = '';
let maxWrong = 5;
let mistakes = 0;
let guessed = [];
let wordStatus = null;

function randomWord () {
    answer = AOTchars_random[Math.floor(Math.random() * AOTchars_random.length )];
    
    
}

function generateButtons() {
    let buttonsHTML = 'abcdefghijklmonpqrstuvwxyz'.split('').map(letter =>
        `
        <button
           class="btn btn-lg btn-primary m-2"
           id='` + letter + `'
           onClick="handleGuess('` + letter + `')"
        >
           ` + letter + `

        </button>
        
        `).join('');

    document.getElementById('toetsenboord').innerHTML = buttonsHTML;
}

function handleGuess(chosenLetter) {
    guessed.indexOf(chosenLetter) === -1 ? guessed.push(chosenLetter) : null;
    document.getElementById(chosenLetter).setAttribute('disabled', true);
    
   

    if (answer.indexOf(chosenLetter) >= 0) {
        guessedWord();
        checkIfGameWon();
    }  else if (answer.indexOf(chosenLetter) === -1) {
        mistakes++;
        updateMistakes();
        checkIfGameLost();
        updateHangmanPicture();
    }
}

function updateHangmanPicture() {
    document.getElementById('hangmanPic').src = './images/' + mistakes + '.png';
}

function checkIfGameWon() {
    if (wordStatus === answer) {
        document.getElementById('toetsenboord').innerHTML = 'Gewonnen';
        document.getElementById('hangmanPic').src = './images/winner.png';

    }
}

function checkIfGameLost() {
    if (mistakes === maxWrong) {
        document.getElementById('wordSpotlight').innerHTML = 'De antwoord was: ' + answer;
        document.getElementById('toetsenboord').innerHTML = 'Loser';
        
    }
}

function guessedWord() {
    wordStatus = answer.split('').map(letter =>(guessed.indexOf(letter) >= 0 ? letter : " _ ")).join('');

    document.getElementById('wordSpotlight').innerHTML = wordStatus;
}

function updateMistakes() {
    document.getElementById('mistakes').innerHTML = mistakes;
}

function reset() {
    mistakes = 0;
    guessed = [];
    document.getElementById('hangmanPic').src = './images/galgje.png';

    randomWord();
    guessedWord();
    updateMistakes();
    generateButtons();
}

document.getElementById('maxWrong').innerHTML = maxWrong;


randomWord ();
generateButtons();
guessedWord();
