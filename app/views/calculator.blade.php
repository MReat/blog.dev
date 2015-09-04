@extends('layouts.master')
@include('layouts.navbar')

@section('style')
<link rel="stylesheet" href="/css/calculator.css">
@stop

@section('title')
Calculator
@stop

@section('aside')
@stop

@section('content')

	<form>
		<div class="display">

			<input type="text" name="box1" id="box1" value="" readonly></input>
			<input type="text" name="operator" id="operator" value="" readonly></input>
			<input type="text" name="box2" id="box2" value="" readonly></input>
		
		</div>



		<div class="keys" id="keys">
			<div class="row1">
				<button class="number" type="button" id="btn7" value="7">7</button>
				<button class="number" type="button" id="btn8" value="8">8</button>
				<button class="number" type="button" id="btn9" value="9">9</button>
				<button class="operation" name="plus" type="button" id="btnPlus" value="+">+</button>
			</div>

			<div class="row2">
				<button class="number" type="button" id="btn4" value="4">4</button>
				<button class="number" type="button" id="btn5" value="5">5</button>
				<button class="number" type="button" id="btn6" value="6">6</button>
				<button class="operation" type="button" id="btnMinus" value="-">-</button>
			</div>

			<div class="row3">
				<button class="number" type="button" id="btn1" value="1">1</button>
				<button class="number" type="button" id="btn2" value="2">2</button>
				<button class="number" type="button" id="btn3" value="3">3</button>
				<button class="operation" type="button" id="btnMultiply" value="*">*</button>
			</div>
			
			<div class="row4">
				<button type="button" id="clear" value="C">C</button>
				<button class="number" type="button" id="btn0" value="0">0</button>
				<button class="operation" type="button" id="btnDivide" value="/">/</button>
				<!-- <button type="button" id="decimal" value=".">.</button> -->
			</div>
			
			<div class="row5">
				<button  type="button"  id="btnEqual" value="=">=</button>
			</div>
		</div>
	</form>
	<a class="btn btn-default" href="{{{ action('HomeController@showPortfolio') }}}" id="portfolio_return"><span class="glyphicon glyphicon-briefcase"></span> Return to Portfolio</a>
@stop

@section('script')	
	<script type="text/javascript">
	"use strict";


	//variables

	var box1 = document.getElementById("box1");
	var operator = document.getElementById("operator");
	var box2 = document.getElementById("box2");
	var keyEntry = document.getElementsByTagName('button');

	var beforeOperator = true;

	var result;

	var calculate = function () {
		if (operator.value == "+") {
			result = parseFloat(box1.value) + parseFloat(box2.value);
			box1.value = result;
			console.log(result);
		} else if (operator.value == "-") {
			result = parseFloat(box1.value) - parseFloat(box2.value);
			box1.value = result;
		} else if (operator.value == "*") {
			result = parseFloat(box1.value) * parseFloat(box2.value);
			box1.value = result;
		} else {
			result = parseFloat(box1.value) / parseFloat(box2.value);
			box1.value = result;
		}
	}


	var boxValue = function() {
		if (this.value == "C") {
			box1.value = "";
			box2.value = "";
			operator.value = "";
			beforeOperator = true;

		}
		
		if (beforeOperator){
			if (this.value % 1 == 0) { 
				box1.value += this.innerHTML;
			} else if (this.id == "decimal") {
				box1.value += this.innerHTML;

			} else if (this.value == "+" || this.value == "-" || this.value == "*" || this.value == "/") {
				operator.value = this.value;
				beforeOperator = false;
			} 
		
		} else {
			if (this.value % 1 == 0) {
				box2.value += this.innerHTML;
			} else if (this.id == "decimal") {
				box2.value += this.innerHTML;
			} else if (this.value == "=") {
				calculate();
				operator.value = "";
				box2.value = "";
				beforeOperator = true;
			}
		}
	}
	
		
	var keyEntry = document.getElementsByTagName('button');
		
	for(var i = 0; i < keyEntry.length; i++) {
		keyEntry[i].addEventListener('click', boxValue, false); 
	}	
			
</script>
<script src="/js/jquery-1.11.3.js"></script>
@stop

