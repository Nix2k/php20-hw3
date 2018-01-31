<?php
	//Составляем массив
	$animals = ['Africa'=>['Giraffa camelopardalis','Hippopotamus amphibius','Syncerus caffer'],'Eurasia'=>['Ursus arctos','Cervus elaphus','Sciurus vulgaris'],'North America'=>['Dasypus novemcinctus','Alligator mississippiensis','Castor canadensis'],'South America'=>['Lama guanicoe','Myrmecophaga tridactyla','Tremarctos ornatus'],'Antarctica'=>['Leptonychotes weddellii','Aptenodytes forsteri','Hydrurga leptonyx'],'Australia'=>['Phascolarctos cinereus','Tachyglossus aculeatus','Macropus']];

	//Теперь находим всех зверей, название которых состоит из двух слов. Составляем из них новый массив.
	foreach ($animals as $cont => $animals0) {
		foreach ($animals0 as $animal) {
			if (strpos($animal, ' ')!==false)
				$two_words[$cont][] = $animal;
		}
	}


	//Разобьем массив $two_words на два, $first_word - первое слово, $second_word - второе слово
	foreach ($two_words as $cont => $animals0) {
		foreach ($animals0 as $animal) {
			$words_aray = explode(' ', $animal);
			$first_word[$cont][] = $words_aray[0];
			$second_word[] = $words_aray[1];
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
		echo "<h2>$cont</h2>";
		$imax=count($animals0)-1;
		echo "<p>";
		if ($imax>0) {
			for ($i=0; $i<$imax; $i++) 
				echo "$animals0[$i], ";
		}
		echo "$animals0[$imax]</p>";
	}
?>

</body>
</html>
