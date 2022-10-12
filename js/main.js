document.querySelector(".btn").addEventListener('click', function(){
    Swal.fire(
    'Congratulation',
    'You Become Premium Now',
    'success'
    )
    });
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

  
     