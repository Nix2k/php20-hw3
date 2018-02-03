<?php
	//Составляем массив
	$animals = ['Africa'=>['Giraffa camelopardalis','Hippopotamus amphibius','Syncerus caffer'],'Eurasia'=>['Ursus arctos','Cervus elaphus','Sciurus vulgaris'],'North America'=>['Dasypus novemcinctus','Alligator mississippiensis','Castor canadensis'],'South America'=>['Lama guanicoe','Myrmecophaga tridactyla','Tremarctos ornatus'],'Antarctica'=>['Leptonychotes weddellii','Aptenodytes forsteri','Hydrurga leptonyx'],'Australia'=>['Phascolarctos cinereus','Tachyglossus aculeatus','Macropus']];

	//Задаём массивы
	$two_words = array();
	$first_word = array();
	$second_word = array();
	$new_animals = array();

	//Теперь находим всех зверей, название которых состоит из двух слов. Составляем из них новый массив.
	//Разобьем массив $two_words на два, $first_word - первое слово, $second_word - второе слово
	foreach ($animals as $cont => $animals0) {
		foreach ($animals0 as $animal) {
			if (str_word_count($animal)==2) {
				$two_words[$cont][] = $animal;
				$words_array = explode(' ', $animal);
				$first_word[$cont][] = $words_array[0];
				$second_word[] = $words_array[1];
			}
		}
	}

	//Перемешаем второй массив
	shuffle($second_word);

	//Составим массив с названиями новых животных
	$i = 0;
	foreach ($first_word as $cont => $word1) {
		foreach ($word1 as $animal) {
			$new_animals[$cont][] = $animal.' '.$second_word[$i];
			$i++;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Домашнее задание к лекции 1.3 «Строки, массивы и объекты»</title>
</head>
<body>

<?php
	//выводим результат
	foreach ($new_animals as $cont => $animals0) {
		$animals_str = implode(',', $animals0);
		echo "<h2>$cont</h2><p>$animals_str</p>";
	}
?>

</body>
</html>
