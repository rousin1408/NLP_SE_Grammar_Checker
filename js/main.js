var counted = document.getElementById('counted');
var counted1 = document.getElementById('counted1');
var input = document.getElementById('input');
var input1 = document.getElementById('input1');
var globalWordCounter = 0;
var WORD_LIMIT = 500;



input.addEventListener('keydown', function(e) {
  if (globalWordCounter > WORD_LIMIT && e.code !== "Backspace") {
    e.preventDefault();
    return alert("You have reached the word limit, You must be Premium Member to get Unlimited limit Word");
  }
//   else if(globalWordCounter > WORD_LIMIT1 && e.code !== "Backspace"){
//     e.preventDefault();
//     return alert("You have reached the word limit You must Login or Sign up to Get more limit word" );
    
    
    
//   }
});




input.addEventListener('keyup', function(e) {
  wordCounter(e.target.value);
});

function isWord(str) {
  var alphaNumericFound = false;
  for (var i = 0; i < str.length; i++) {
    var code = str.charCodeAt(i);
    if ((code > 47 && code < 58) || // numeric (0-9)
        (code > 64 && code < 91) || // upper alpha (A-Z)
        (code > 96 && code < 123)) { // lower alpha (a-z)
      alphaNumericFound = true;
      return alphaNumericFound;
    }
  }
  return alphaNumericFound;
}

function wordCounter(text) {
  var text = input.value.split(' ');
  var wordCount = 0;
  for (var i = 0; i < text.length; i++) {
    if (!text[i] == ' ' && isWord(text[i])) {
      wordCount++;
    }
  }
  globalWordCounter = wordCount;
  counted.innerText = wordCount;
  counted1.innerText = wordCount;
}
const modal = document.querySelector(".modal");
const trigger = document.querySelector(".trigger");
const closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", windowOnClick);

  
     