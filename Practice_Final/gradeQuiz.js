$(document).ready(function(){
    var score = 0;
    $("form").submit(function(event) {
        
        event.preventDefault();
        
        //Get answers
        var answer1 = $("input[name='question1']").val().trim();
        var answer2 = $("input[name='question2']:checked").val();
        var answer3 = $("input[name='question3']:checked").val();
        var answer4 = $("input[name='question4']:checked").val();
        var answer5 = $("input[name='question3']:checked").val();
        var answer6 = $("input[name='question4']:checked").val();
        var answer7 = $("input[name='question4']:checked").val();
        
        
        console.log(answer1);
        console.log(answer2);
        console.log(answer3);
        console.log(answer4);
        console.log(answer5);
        console.log(answer6);
        console.log(answer7);
        
        
        //Checks if answers are correct
        // Question 1
        if(answer1 == "1994") {
            correctAnswer($("#question1-feedback"));
        }
        else {
            incorrectAnswer($("#question1-feedback"))
        }
    
}