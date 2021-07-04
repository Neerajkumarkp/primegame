<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prime game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <form action="#">
            <div class="container">
                <div class="row"><h3>Enter a number between 1 to 10 :</h3> </div>
                <input type="text" id="textInput" value="" /> 
                <input type="text" id="firstnum" value="" />
                <input type="text" id="lastnum" value="" />
                 &nbsp;
<input type="button" id="buttonCreateTextbox" value="Create TestCases" onclick="CreateText();"/>
<br><br>
<div id="divDynamicTexts"></div>
            </div>
            
        </form>

      
        
        


<script type="text/javascript" language="javascript">
    $('#buttonCreateTextbox').click(function () {
        var text = '<input type="text#" id="textInput" value="" class="testing" required /> <br/><br>';
    
        for (var i = 0; i < $('#textInput').val(); i++) {
            $('#divDynamicTexts').append(text.replace('#', i));
        }
    })

    
    $(document).on('blur', ".testing", function(){		
	var acv= 	$('.testing').val();
        var test = acv.split(',');
        // alert(test[0]);
        // alert(test[1]);
        // take input from the user
const lowerNumber = parseInt(test[0]);
const higherNumber = parseInt(test[1]);

var primenumber = [];
var pushprin = [];
// looping from lowerNumber to higherNumber
for (let i = lowerNumber; i <= higherNumber; i++) {
    let flag = 0;

    // looping through 2 to user input number
    for (let j = 2; j < i; j++) {
        if (i % j == 0) {
            flag = 1;
            break;
        }
    }
    // if number greater than 1 and not divisible by other numbers
    if (i > 1 && flag == 0) {
        primenumber.push(i);
    }
}

var number1 = 0; 
var number2 = 0; 
$.each(primenumber, function(index, value){
    if(index == 0){
        number1 = value;
    }
    number2 = value;

})
console.log("number2", number2 - number1);


});	

    // program to print prime numbers between the two numbers






</script>
    </body>
</html>
