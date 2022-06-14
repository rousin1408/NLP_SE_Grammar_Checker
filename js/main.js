// var counted = document.getElementById('counted');
// var counted1 = document.getElementById('counted1');
// var input = document.getElementById('input');
// var input1 = document.getElementById('input1');
// var globalWordCounter = 0;
// var WORD_LIMIT = 500;



// input.addEventListener('keydown', function(e) {
//   if (globalWordCounter > WORD_LIMIT && e.code !== "Backspace") {
//     e.preventDefault();
//     return alert("You have reached the word limit, You must be Premium Member to get Unlimited limit Word");
//   }
// //   else if(globalWordCounter > WORD_LIMIT1 && e.code !== "Backspace"){
// //     e.preventDefault();
// //     return alert("You have reached the word limit You must Login or Sign up to Get more limit word" );
    
    
    
// //   }
// });




// input.addEventListener('keyup', function(e) {
//   wordCounter(e.target.value);
// });

// function isWord(str) {
//   var alphaNumericFound = false;
//   for (var i = 0; i < str.length; i++) {
//     var code = str.charCodeAt(i);
//     if ((code > 47 && code < 58) || // numeric (0-9)
//         (code > 64 && code < 91) || // upper alpha (A-Z)
//         (code > 96 && code < 123)) { // lower alpha (a-z)
//       alphaNumericFound = true;
//       return alphaNumericFound;
//     }
//   }
//   return alphaNumericFound;
// }

// function wordCounter(text) {
//   var text = input.value.split(' ');
//   var wordCount = 0;
//   for (var i = 0; i < text.length; i++) {
//     if (!text[i] == ' ' && isWord(text[i])) {
//       wordCount++;
//     }
//   }
//   globalWordCounter = wordCount;
//   counted.innerText = wordCount;
//   counted1.innerText = wordCount;
// }
function countword() {
 
  // Get the input text value
  var words = document
      .getElementById("word").value;

  // Initialize the word counter
  var count = 0;

  // Split the words on each
  // space character
  var split = words.split(' ');

  // Loop through the words and
  // increase the counter when
  // each split word is not empty
  for (var i = 0; i < split.length; i++) {
      if (split[i] != "") {
          count += 1;
      }
  }

    document.getElementById("show").innerHTML = count;


}
function wordLimit(inp){
  var limit = 200;
  var val = inp.value
  var words = val.split(/\s+/);
  var legal = "";
  for(i = 0; i < words.length; i++) {
      if(i < limit) {
          legal += words[i] + " ";
      }
      if(i >= limit) {
          inp.value = legal.trim();
          alert("You have reached the word limit You must Login or Sign up to Get more limit word" );
        inp.preventDefault();
      }
  }
}
function lengthRange(inputtxt, minlength, maxlength)
{  	
   var userInput = inputtxt.value;  
   if(userInput.length >= minlength && userInput.length <= maxlength)
      {  	
        return true;  	
      }
   else
      {  	
	alert("Please input between " +minlength+ " and " +maxlength+ " characters");  		
        return false;  	
      }  
}
//   }
// //   else if(globalWordCounter > WORD_LIMIT1 && e.code !== "Backspace"){
// //     e.preventDefault();
// //     return 


function wordLimit1(inp){
  var limit = 500;
  var val = inp.value
  var words = val.split(/\s+/);
  var legal = "";
  for(i = 0; i < words.length; i++) {
      if(i < limit) {
          legal += words[i] + " ";
      }
      if(i >= limit) {
          inp.value = legal.trim();
         alert("You have reached the word limit, You must be Premium Member to get Unlimited limit Word");
        inp.preventDefault();
      }
  }
}
// document.getElementById("word").addEventListener("keypress", function(evt){

//   // Get value of textbox and split into array where there is one or more continous spaces
//   var words = this.value.split(/\s+/);
//   var numWords = words.length;    // Get # of words in array
//   var maxWords = 200;

  
//   // If we are at the limit and the key pressed wasn't BACKSPACE or DELETE,
//   // don't allow any more input
//   if(numWords > maxWords){
   
//     alert("You have reached the word limit You must Login or Sign up to Get more limit word" );
//     evt.preventDefault(); // Cancel event
//   }
// });


function countword1() {
 
  // Get the input text value
  var words = document
      .getElementById("word1").value;

  // Initialize the word counter
  var count = 0;

  // Split the words on each
  // space character
  var split = words.split(' ');

  // Loop through the words and
  // increase the counter when
  // each split word is not empty
  for (var i = 0; i < split.length; i++) {
      if (split[i] != "") {
          count += 1;
      }
  }

    document.getElementById("show1").innerHTML = count;


}





// document.getElementById("word1").addEventListener("keypress", function(evt){

//   // Get value of textbox and split into array where there is one or more continous spaces
//   var words = this.value.split(/\s+/);
//   var numWords = words.length;    // Get # of words in array
//   var maxWords = 500;

  
//   // If we are at the limit and the key pressed wasn't BACKSPACE or DELETE,
//   // don't allow any more input
//   if(numWords > maxWords){
   
//     alert("You have reached the word limit You must Login" );
//     evt.preventDefault(); // Cancel event
//   }
// });



    
    
//   }



// const modal = document.querySelector(".modal");
// const trigger = document.querySelector(".trigger");
// const closeButton = document.querySelector(".close-button");

// function toggleModal() {
//     modal.classList.toggle("show-modal");
// }

// function windowOnClick(event) {
//     if (event.target === modal) {
//         toggleModal();
//     }
// }
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

  
     