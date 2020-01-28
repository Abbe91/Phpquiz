let questions = document.getElementsByClassName('.theQu');
let myQuestions = [
    { 
        question: "Hur länge finns något i $_GLOBALS?",
        answers: [
            {
                answer: "För 1 timme",
                correct: false
            }, {
                answer: "För en dag",
                correct: false
            }, {
                answer: "Tills änvdare liver",
                correct: false
            }, {
                answer: "Tills användare tar bort den för webbläsare",
                correct: true
            }
        ] 
    }, {
        question: "Vad är $_POST och $_GET ?",
        answers: [
            {
                answer: "Det e bara a spel",
                correct: false
            }, {
                answer: "Graphic Designing",
                correct: false
            }, {
                answer: " Hämta data från en url och posta den på sidan",
                correct: true
            }, {
                answer: "Jag vet inte",
                correct: false
            }
        ] 
    }, 
]

function initSite(){
for(var i = 0; i< myQuestions.length; i++){
 console.log(myQuestions)

    }
}

