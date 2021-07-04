<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prime game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        
        
        

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
        <div class="container">
            <form id="form_id">
                <div class="row"><h3>Enter a number between 1 to 10 :</h3> </div>
                <input type="text" id="textInput" value="" max="10" maxlength="2" minleght="1"/><br>&nbsp;
            </form>
            <input type="button" class="btn btn-success" id="buttonCreateTextbox" value="submit"> </button> 
           <br>
            <div id="divDynamicTexts"></div>

        </div>


<script type="text/javascript" language="javascript">
    


$(document).ready(function(){
    $('#buttonCreateTextbox').click(function () {
        let number = $('#textInput').val();
        $.ajax({
            url: "/AjaxCallController",
            data: {
                '_token' : "{{ csrf_token() }}",
                'number': number
            },
            dataType:"JSON",
            type:"post",
            success: function(res){
                $('#divDynamicTexts').html(res);
            }
        });
    });
    
    $(".testing").blur(function(){
        alert("This input field has lost its focus.");
    });
});

$('#textInput').keyup(function(){
  if ($(this).val() > 10){
    alert("No numbers above 10");
    $(this).val('');
  }
});

</script>
    </body>
</html>
