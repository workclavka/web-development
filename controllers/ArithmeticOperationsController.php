<?php

/**
 * Main class
 */
class ArithmeticOperationsController extends Controller {


	public function __construct()
	{
		$this->view = new View();
	}

	/**
	 * Main page
	 */
	public function getListOfOperations() {
		$this->pageData["title"] = "Арифметические операции";
		$this->view->render("list-of-operations", $this->pageData);
	}

	public function performOperation() {

		# Получаем тип операции
		$type = (isset($_POST['type'])) ? $_POST['type'] : null;

		# Выбираем опирацию которую необходимо выполнить
		switch ($type) {
			case 'exponentiation': # Операция возведения в степень

				# Получаем данные
				$number = (isset($_POST['number'])) ? $_POST['number'] : null;
				$power = (isset($_POST['power'])) ? $_POST['power'] : null;

				# Производим проверки на наличие данных
				if (empty($number) && empty($power)) {
					echo "Заполните все поля";
					break;
				} elseif (empty($number)) {
					echo sprintf("Заполните поле для числа которое вы хотите возвести в степень %s",$power);
					break;
				} elseif (empty($power)) {
					echo sprintf("Заполните поле для степени в которую вы хотете возвести число %s", $number);
					break;
				}
				# Расчитваем стпень числа
				$resultExponentiation = pow($number, $power);

				# Выводим результат
				echo $resultExponentiation;
				break;

			case 'plus': # Операция сложения слагаемых

				# Получаем данные
				$argumentFirst = (isset($_POST['argumentFirst'])) ? $_POST['argumentFirst'] : null;
				$argumentSecond = (isset($_POST['argumentSecond'])) ? $_POST['argumentSecond'] : null;

				# Производим проверки на наличие данных
				if (empty($argumentFirst) && empty($argumentSecond)) {
					echo "Заполните все поля";
					break;
				} elseif (empty($argumentFirst)) {
					echo "Заполните поле для первого аргумента";
					break;
				} elseif (empty($argumentSecond)) {
					echo "Заполните поле для второго аргумента";
					break;
				}
				# Расчитваем сумму чисел
				$resultPlus = $argumentFirst + $argumentSecond;

				# Выводим результат
				echo $resultPlus;
				break;


				case 'division': # Операция деления чисел

					# Получаем данные
					$divisionFirstNum = (isset($_POST['divisionFirstNum'])) ? $_POST['divisionFirstNum'] : null;
					$divisionSecondNum = (isset($_POST['divisionSecondNum'])) ? $_POST['divisionSecondNum'] : null;

					# Производим проверки на наличие данных
					if (empty($divisionFirstNum) && empty($divisionSecondNum)) {
						echo "Заполните все поля";
						break;
					} elseif (empty($divisionFirstNum)) {
						echo "Заполните поле для первого аргумента";
						break;
					} elseif (empty($divisionSecondNum)) {
						echo "Заполните поле для второго аргумента";
						break;
					}
					# Расчитываем частное
					$resultDivision = $divisionFirstNum / $divisionSecondNum;

					# Выводим результат
					echo $resultDivision;
					break;



			default:
				echo "Неудалось произвести расчет. Обратитесь в службу технической поддержки";
				break;
		}
	}
}
