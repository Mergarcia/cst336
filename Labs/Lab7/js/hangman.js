    // VARIABLES 
    var selectedWord= "";
    var selectedHint = "";
    var board = [];
    var remainingGuesses = 6;
    var words = [{ word: "snake", hint: "It's a reptile" },
                 { word: "monkey", hint: "It's a mammal" },
                 { word: "beetle", hint: "It's an insect"}];
 
// Creating an array of available letters
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
 
  //LISTENERS
  window.onload = startGame();
  
  $(".letter").click(function() {
      checkLetter($(this).attr("id"));
      disableButton($(this));
  });
  
  $(".replayBtn").on("click", function() {
      location.reload();
  });
  

$("#hintBtn").click( function() {
   $("#hintBtn").hide();        
   $("#hintText").text("Hint: " + selectedHint);
    remainingGuesses -= 1;
    updateMan();

});
  
  
  //FUNCTIONS
  function startGame() {
      pickWord();
      initBoard();
      createLetters();
      updateBoard();
  }

    
    function pickWord() {
        var randomInt = Math.floor(Math.random() * words.length);
        selectedWord = words[randomInt].word.toUpperCase();
        selectedHint = words[randomInt].hint;
        
        
    }
    
    //creates the letters inside the letters div
    function createLetters() {
        for (var letter of alphabet) {
            $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>");
        }
    }
    
    //calculates and updates the image for our stick man
    function updateMan() {
        $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
    } 
    
    //Ends the game by hiding game divs and displaying the win or loss divs
    function endGame(win) {
        $("#letters").hide();
        
        if(win) {
            $('#won').show();
        } else {
            $('#lost').show();
        }
    }
    
    //Checks to see if the selected letter exists in the selectedWord
    function checkLetter(letter) {
        var positions = new Array();
        
        // Put all the positions the letter exists in an array
        for (var i = 0; i < selectedWord.length; i++) {
            console.log(selectedWord)
            if(letter == selectedWord[i]) {
                positions.push(i);
            }
        }
         if(positions.length > 0) {
            updateWord(positions, letter);
            
            //Check to see if this is a winning guess
            if (!board.includes('_')) {
                endGame(true);
            }
        } else {
            remainingGuesses -= 1;
            updateMan();
        }
        
        if(remainingGuesses <= 0) {
            endGame(false);
        }
    }
    
    //update the current word then calls for a board update
    function updateWord(positions, letter) {
        for (var pos of positions) {
            board[pos] = letter;
        }
        
        updateBoard();
    }
    

    function updateBoard() {
        $("#word").empty();
        
        for (var i = 0; i < board.length; i++) {
            $("#word").append(board[i] + " ");
        }
        
        $("#word").append("<br />");
        

       // for (var letter of board) {
        //document.getElementById("word").innerHTML += letter + " ";
       }

  
    //Fill the board with underscores
    function initBoard() {
        for (var letter in selectedWord) {
            board.push("_");
        }
    }

 //Disables the button and changes the style to tell the user its disabled
    function disableButton(btn) {
        btn.prop("disabled", true);
        btn.attr("class", "btn btn-danger")
    }
    
    

