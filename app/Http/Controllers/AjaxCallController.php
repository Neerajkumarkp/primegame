<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxCallController extends BaseController
{
    public function TextBox(Request $request){
        $number = $request->number;

        $html = "<table>";
        for($i = 1; $i <= $number; $i++) {
            $html .= '<tr style="padding:5px;"><td><input type="text" id="'.($i+$i).'" placeholder="Enter left value"> &nbsp;&nbsp;<input type="text" id="'.($i+$i+$i).'" placeholder="Enter right value"> &nbsp;&nbsp;<button class="btn btn-success" onclick="function_'.$i.'($(this))">Submit</button></td>&nbsp;&nbsp;&nbsp;&nbsp;<td><span style="
    padding: 37px;font-weight:bold;font-size:25px;
" id="'.($i+$i+$i+$i+$i).'"></span></td></tr>';  
        }
        $html .= "</table><script>";

        for($j = 1; $j <= $number; $j++) {
            $tot = ($j+$j+$j);
            $tot1 = ($j+$j);
            $tot2 = ($j+$j+$j+$j+$j);
            // $attr = "input[]";
            $html .= "function function_$j(This){ 
                var lowerNumber = $('#$tot1').val(); 
                var higherNumber = $('#$tot').val(); 
                var primenumber = [];
                var pushprin = [];
                for (let i = lowerNumber; i <= higherNumber; i++) {
                    let flag = 0;
                    for (let j = 2; j < i; j++) {
                        if (i % j == 0) {
                            flag = 1;
                            break;
                        }
                    }
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

                });
                var num3 = number2 - number1;
                $('#$tot2').html(num3);
            }";
        }
        $html .= "</script>";
        return response()->json($html,200);

    }
}
