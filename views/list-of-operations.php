<script src="http://web-development/source/js/exponentiation.js"></script>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<h1 class="display-4"><?= $pageData["title"] ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<ul class="nav nav-tabs" id="arithmeticOperations" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="exponentiation-tab" data-toggle="tab" href="#exponentiation" role="tab" aria-controls="exponentiation" aria-selected="true">
						Степень
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="plus-tab" data-toggle="tab" href="#plus" role="tab" aria-controls="plus" aria-selected="false">
						Сложение
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="plus-tab" data-toggle="tab" href="#division" role="tab" aria-controls="division" aria-selected="false">
						Деление
					</a>
				</li>
			</ul>
			<div class="tab-content" id="arithmeticOperationsTabContent">
				<div class="tab-pane fade show active" id="exponentiation" role="tabpanel" aria-labelledby="exponentiation-tab">
					<p>
						Возведе́ние в сте́пень — бинарная операция, первоначально определяемая как результат многократного умножения числа на себя. Степень с основанием a и натуральным показателем b, при этом b — это количество множителей (умножаемых чисел).
					</p>
					<p>
						Возведение в степень может быть определено также для отрицательных, рациональных, вещественных и даже комплексных степеней.
					</p>
					<p>
						<b>Вы можете попробовать вычислить степень.</b>
					</p>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-1">
							<input type="text" name="power" id="powerForExponentiation">
						</div>
					</div>
					<div class="row">
						<div class="col-md-1">
							<input type="text" name="number" id="numberForExponentiation">
						</div>
						<div class="col-md-1"></div>
						<div class="col-md-1">
							<button id="performExponentiation">=</button>
						</div>
						<div class="col-md-9"><b id="resultExponentiation"></b></div>
					</div>
				</div>
				<div class="tab-pane fade" id="plus" role="tabpanel" aria-labelledby="plus-tab">
					<p>
						Сложе́ние (часто обозначается символом плюса «+») — арифметическое действие. Сложение есть объединение исчислимых объектов в одно целое. Результатом сложения чисел a и  b является число, называемое суммой[стиль] чисел  a и b  и обозначаемое a+b[2].
					</p>
					<p>
						<b>Вы можете попробовать сложить два числа</b>
					</p>
					<div class="row">
						<div class="col-md-2">
							<input type="text" name="argumentFirst" id="argumentFirstForPlus">
						</div>
						<div class="col-md-2">
							<input type="text" name="argumentSecond" id="argumentSecondForPlus">
						</div>
						<div class="col-md-1">
							<button id="performPlus">=</button>
						</div>
						<div class="col-md-7"><b id="resultPlus"></b></div>
					</div>
				</div>

				<div class="tab-pane fade" id="division" role="tabpanel" aria-labelledby="division-tab">
					<p>
						Арифметическое действие, по которому узнаётся, сколько раз одно число содержится в другом. Разделить — это значит раздробить на части, количество частей должно равняться делителю. Разделить число а на число Ь — это значит найти такое третье число с, чтобы верным оказалось равенство: b * c = a.
					<p>
						<b>Вы можете попробовать разделить два числа</b>
					</p>
					<div class="row">
						<div class="col-md-2">
							<input type="text" name="divisionFirstNum" id="argumentFirstForDivision">
						</div>
						<div class="col-md-2">
							<input type="text" name="divisionSecondNum" id="argumentSecondForDivision">
						</div>
						<div class="col-md-1">
							<button id="performDivision">=</button>
						</div>
						<div class="col-md-7"><b id="resultDivision"></b></div>
					</div>
				</div>


			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
