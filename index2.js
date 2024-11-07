const chapter1 = document.getElementsByClassName("chapter1")[0];
const chapter2 = document.getElementsByClassName("chapter2")[0];
const chapter3 = document.getElementsByClassName("chapter3")[0];
const chapter4 = document.getElementsByClassName("chapter4")[0];
const chapter5 = document.getElementsByClassName("chapter5")[0];
const chapter6 = document.getElementsByClassName("chapter6")[0];
const chapter7 = document.getElementsByClassName("chapter7")[0];
const chapter8 = document.getElementsByClassName("chapter8")[0];
const quizcontainer = document.getElementsByClassName("quizcontainer")[0];
function quizDisplay1(){
    quizcontainer.style.display = 'inline';
    chapter1.style.display = 'none';
    chapter2.style.display = 'none';
    chapter3.style.display = 'none';
    chapter4.style.display = 'none';
    chapter5.style.display = 'none';
    chapter6.style.display = 'none';
    chapter7.style.display = 'none';
    chapter8.style.display = 'none';
}
function chapterdisplay1() {
    chapter1.style.display = 'inline';
    chapter2.style.display = 'inline';
    chapter3.style.display = 'none';
    chapter4.style.display = 'none';
    chapter5.style.display = 'none';
    chapter6.style.display = 'none';
    chapter7.style.display = 'none';
    chapter8.style.display = 'none';
    quizcontainer.style.display = 'none';
}
function chapterdisplay2() {
    chapter1.style.display = 'none';
    chapter2.style.display = 'none';
    chapter3.style.display = 'inline';
    chapter4.style.display = 'inline';
    chapter5.style.display = 'none';
    chapter6.style.display = 'none';
    chapter7.style.display = 'none';
    chapter8.style.display = 'none';
    quizcontainer.style.display = 'none';
}
function chapterdisplay3() {
    chapter1.style.display = 'none';
    chapter2.style.display = 'none';
    chapter3.style.display = 'none';
    chapter4.style.display = 'none';
    chapter5.style.display = 'inline';
    chapter6.style.display = 'inline';
    chapter7.style.display = 'none';
    chapter8.style.display = 'none';
    quizcontainer.style.display = 'none';
}
function chapterdisplay4() {
    chapter1.style.display = 'none';
    chapter2.style.display = 'none';
    chapter3.style.display = 'none';
    chapter4.style.display = 'none';
    chapter5.style.display = 'none';
    chapter6.style.display = 'none';
    chapter7.style.display = 'inline';
    chapter8.style.display = 'none';
    quizcontainer.style.display = 'none';
}
function chapterdisplay5() {
    chapter1.style.display = 'none';
    chapter2.style.display = 'none';
    chapter3.style.display = 'none';
    chapter4.style.display = 'none';
    chapter5.style.display = 'none';
    chapter6.style.display = 'none';
    chapter7.style.display = 'none';
    chapter8.style.display = 'inline';
    quizcontainer.style.display = 'none';
}

const quizData = [
    {
      question: 'What does HTML stand for?',
      options: ['Hyper Text Markup Language', 'Hyper Tool Multi Language', 'Hyperlinks and Text Markup Language', 'High-level Text Markup Language'],
      answer: 'Hyper Text Markup Language',
    },
    {
      question: 'Which of the following elements is used to create a hyperlink in HTML?',
      options: ['<link>', '<a>', '<href>', '<url>'],
      answer: '<a>',
    },
    {
      question: 'What is the correct HTML element for the largest heading?',
      options: ['<h6>', '<heading>', '<h1>', '<head>'],
      answer: '<h1>',
    },
    {
      question: 'How do you create an unordered list in HTML?',
      options: ['<ol>', '<list>', '<ul>', '<item>'],
      answer: '<ul>',
    },
    {
      question: '. Which attribute is used to specify an image source?',
      options: [
        'src',
        'href',
        'alt',
        'link',
      ],
      answer: 'src',
    },
  ];
  
  const quizContainer = document.getElementById('quiz');
  const resultContainer = document.getElementById('result');
  const submitButton = document.getElementById('submit');
  const retryButton = document.getElementById('retry');
  const showAnswerButton = document.getElementById('showAnswer');
  
  let currentQuestion = 0;
  let score = 0;
  let incorrectAnswers = [];
  
  function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }
  
  function displayQuestion() {
    const questionData = quizData[currentQuestion];
  
    const questionElement = document.createElement('div');
    questionElement.className = 'question';
    questionElement.innerHTML = questionData.question;
  
    const optionsElement = document.createElement('div');
    optionsElement.className = 'options';
  
    const shuffledOptions = [...questionData.options];
    shuffleArray(shuffledOptions);
  
    for (let i = 0; i < shuffledOptions.length; i++) {
      const option = document.createElement('label');
      option.className = 'option';
  
      const radio = document.createElement('input');
      radio.type = 'radio';
      radio.name = 'quiz';
      radio.value = shuffledOptions[i];
  
      const optionText = document.createTextNode(shuffledOptions[i]);
  
      option.appendChild(radio);
      option.appendChild(optionText);
      optionsElement.appendChild(option);
    }
  
    quizContainer.innerHTML = '';
    quizContainer.appendChild(questionElement);
    quizContainer.appendChild(optionsElement);
  }
  
  function checkAnswer() {
    const selectedOption = document.querySelector('input[name="quiz"]:checked');
    if (selectedOption) {
      const answer = selectedOption.value;
      if (answer === quizData[currentQuestion].answer) {
        score++;
      } else {
        incorrectAnswers.push({
          question: quizData[currentQuestion].question,
          incorrectAnswer: answer,
          correctAnswer: quizData[currentQuestion].answer,
        });
      }
      currentQuestion++;
      selectedOption.checked = false;
      if (currentQuestion < quizData.length) {
        displayQuestion();
      } else {
        displayResult();
      }
    }
  }
  
  function displayResult() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'inline-block';
    resultContainer.innerHTML = `You scored ${score} out of ${quizData.length}!`;
  }
  
  function retryQuiz() {
    currentQuestion = 0;
    score = 0;
    incorrectAnswers = [];
    quizContainer.style.display = 'block';
    submitButton.style.display = 'inline-block';
    retryButton.style.display = 'none';
    showAnswerButton.style.display = 'none';
    resultContainer.innerHTML = '';
    displayQuestion();
  }
  
  function showAnswer() {
    quizContainer.style.display = 'none';
    submitButton.style.display = 'none';
    retryButton.style.display = 'inline-block';
    showAnswerButton.style.display = 'none';
  
    let incorrectAnswersHtml = '';
    for (let i = 0; i < incorrectAnswers.length; i++) {
      incorrectAnswersHtml += `
        <p>
          <strong>Question:</strong> ${incorrectAnswers[i].question}<br>
          <strong>Your Answer:</strong> ${incorrectAnswers[i].incorrectAnswer}<br>
          <strong>Correct Answer:</strong> ${incorrectAnswers[i].correctAnswer}
        </p>
      `;
    }
  
    resultContainer.innerHTML = `
      <p>You scored ${score} out of ${quizData.length}!</p>
      <p>Incorrect Answers:</p>
      ${incorrectAnswersHtml}
    `;
  }
  
  submitButton.addEventListener('click', checkAnswer);
  retryButton.addEventListener('click', retryQuiz);
  showAnswerButton.addEventListener('click', showAnswer);
  
  displayQuestion();