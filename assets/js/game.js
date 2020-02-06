const question = document.getElementById('question');
const choices = Array.from(document.getElementsByClassName('choice-text'));
const progressText = document.getElementById('progressText');
const scoreText = document.getElementById('score');
var progressBarFull = document.getElementById('progressBarFull');
let currentQuestion = {};
let acceptingAnswers = true;
//initialize score
let score = 0;
//initialize questionCounter
let questionCounter = 0;
let availableQuestions = [];

let questions = [
    {
        question: "Laquelle de ces planètes n'a pas d'anneaux?",
        choice1: "Saturne",
        choice2: "Jupiter",
        choice3: "Mars",
        answer: 3
    },
    {
        question: "Quelle est la planète la plus chaude du système solaire?",
        choice1: "Mercure",
        choice2: "Venus",
        choice3: "Uranus",
        answer: 2
    },
    {
        question: "Combien de planètes telluriques compte le système solaire?",
        choice1: "2",
        choice2: "4",
        choice3: "6",
        answer: 2
    },
];
//constants
const CORRECT_BONUS = 10; //how much does the correct answer worth
const MAX_QUESTIONS = 3; // how much questions can a quiz have
function startGame() {
    questionCounter = 0; // make sure the game starts at 0
    score = 0;
    availableQuestions = [...questions]; //spread each question of questions into an array ( " ... " is a spread operator)
    console.log(availableQuestions);
    getNewQuestion();
}

function getNewQuestion() {
        if (availableQuestions.length == 0 || questionCounter >= MAX_QUESTIONS){  // if there's no more available questions
            //go to the end page
            return window.location.assign('/endPage.php');
        }
        questionCounter++; //increment questionCounter
        progressText.innerText = `Question ${questionCounter}/${MAX_QUESTIONS}`;//displays how many available questions left
        progressBarFull.style.width = `${(questionCounter / MAX_QUESTIONS) * 100} %`; //update progress bar
        const questionIndex = Math.floor(Math.random()) * availableQuestions.length; //chose randomly a new question from availableQuestions
        currentQuestion = availableQuestions[questionIndex]; // gives a reference to the currentQuestion
        question.innerText = currentQuestion.question; //get the text of the question

        choices.forEach(choice => {
            const number = choice.dataset['number'];
            choice.innerText = currentQuestion['choice' + number];
        });
        availableQuestions.splice(questionIndex, 1);
        acceptingAnswers = true;

};
choices.forEach(choice => {
    choice.addEventListener('click', e => {  //e is a parameter for "event" argument
        if (!acceptingAnswers) return ;
        acceptingAnswers = false;
        const selectedChoice = e.target;
        const selectedAnswer = selectedChoice.dataset['number'];
        const classToApply = selectedAnswer == currentQuestion.answer ? 'correct' : 'incorrect';  //apply 'correct' or 'incorrect class wether if answer is correct or not
        if (classToApply === 'correct'){
            incrementScore(CORRECT_BONUS);
        }
        selectedChoice.parentElement.classList.add(classToApply);
        setTimeout(()=>{
            selectedChoice.parentElement.classList.remove(classToApply);
            getNewQuestion();
            },900)

        console.log(classToApply);

    });
    incrementScore = num =>{
        score += num;
        scoreText.innerText = score;
    }
});

startGame();