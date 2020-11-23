<?php
require "header.php";
?>
	<div id="center_div">
		<p>Велком</p>
		<?php
		$sakha=$_POST['sakha'];
		$others=$_POST['others'];
		$s_index=$_POST['s_index'];
		
		//Измерения Саха
		//в сантиметрах
		$kharus=19.38;
		$syom=17.25;
		$munur_syom=13.13;
		$vershok=4.7;
		$tutum=7.13;
		$suor_kholoto=13.25;
		$ullunakh_ustata=25.75;
		$tobuk=49.50;
		$ulgun_chunuya=1.13;
		$ilii=6.88;
		$togonokh_ustata=3.25;
		$khaamuu=91.25;
		$bulas=162.75;
		$at_koho=1000000;
		$oghus_koho=750000;
		$satuu_koho=750000;
		$syeler_at_koho=1350000;
		
		//Измерения не Саха
		//тоже в сантиметрах
		$sm=1;
		$m=100;
		$km=100000;
		$inch=2.6; //Дюйм, примерно, а так хз
		$foot=30; //Фут, так же хз
		$yard=1000; //Вообще хз)))
		?>
		<form action="index.php" method=post>
		<p>Из</p>
		<p><input type="text" name="s_index" size="5" value=1>
		<select name="sakha">
		   <option>Харыс</option>
		   <option>Сүөм</option>
		   <option>Мунур суом</option>
		   <option>Борсуок</option>
		   <option>Тутум</option>
		   <option>Суор холото</option>
		   <option>Уллунах устата</option>
		   <option>Тобук</option>
		   <option>Ылгын чыныйа</option>
		   <option>Илии</option>
		   <option>Тогонох устата</option>
		   <option>Хаамыы</option>
		   <option>Былас</option>
		   <option>Ат коhо</option>
		   <option>О5ус коhо</option>
		   <option>Сатыы кос</option>
		   <option>Сиэлэр ат коhо</option>
		</select></p>
		<p>В</p>
		<select name="others">
			<option>Сантиметр</option>
			<option>Метр</option>
			<option>Километр</option>
			<option>Дюйм</option>
			<option>Фут</option>
			<option>Ярд</option>
		</select></p>
		<p><input type="submit" value="Ок"></p>
		</form>
		<?php
		//Дальше начинается ж*па))))
		switch ($sakha){
		//Харыс
			case "Харыс":
			echo "$s_index Харыс = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$kharus/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$kharus/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$kharus/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$kharus/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$kharus/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$kharus/$yard;
							echo " ярд";
							break;
					}
					break;
		//Суом
			case "Суом":
					echo "$s_index суом = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$syom/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$syom/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$syom/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$syom/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$syom/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$syom/$yard;
							echo " ярд";
							break;
					}
					break;
		//Мунур суом
			case "Мунур суом":
			echo "$s_index мунур суом = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index/$smunur_syom/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index/$smunur_syom/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index/$smunur_syom/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index/$smunur_syom/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index/$smunur_syom/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index/$smunur_syom/$yard;
							echo " ярд";
							break;
					}
					break;
		
		//Вершок-горшок
			case "Борсуок":
				echo "$s_index борсуок = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$vershok/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$vershok/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$vershok/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$vershok/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$vershok/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$vershok/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Тутум
			case "Тутум":
					echo "$s_index тутум = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$tutum/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$tutum/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$tutum/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$tutum/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$tutum/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$tutum/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Суор холото
			case "Суор холото":
					echo "$s_index суор холото = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$suor_kholoto/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$suor_kholoto/$m;
							echo " км";
							break;
						case "Километр":
							echo $s_index*$suor_kholoto/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$suor_kholoto/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$suor_kholoto/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$suor_kholoto/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Уллунах устата
			case "Уллунах устата":
					echo "$s_index уллунах устата = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$ullunakh_ustata/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$ullunakh_ustata/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$ullunakh_ustata/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$ullunakh_ustata/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$ullunakh_ustata/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$ullunakh_ustata/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Тобук
			case "Тобук":
					echo "$s_index тобук = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$tobuk/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$tobuk/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$tobuk/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$tobuk/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$tobuk/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$tobuk/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Ылгын чыныйа
			case "Ылгын чыныйа":
					echo "$s_index ылгын чыныйа = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$ulgun_chunuya/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$ulgun_chunuya/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$ulgun_chunuya/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$ulgun_chunuya/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$ulgun_chunuya/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$ulgun_chunuya/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Илии
			case "Илии":
					echo "$s_index илии = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$ilii/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$ilii/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$ilii/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$ilii/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$ilii/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$ilii/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Тогонох устата
			case "Тогонох устата":
					echo "$s_index тогонох устата = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$togonokh_ustata/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$togonokh_ustata/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$togonokh_ustata/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$togonokh_ustata/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$togonokh_ustata/$foot;
							echo " дюйм";
							break;
						case "Ярд":
							echo $s_index*$togonokh_ustata/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Хаамыы
			case "Хаамыы":
					echo "$s_index хаамыы = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$khaamuu/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$khaamuu/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$khaamuu/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$khaamuu/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$khaamuu/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$khaamuu/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Былас
			case "Былас":
					echo "$s_index былас = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$bulas/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$bulas/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$bulas/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$bulas/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$bulas/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$bulas/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Ат коhо
			case "Ат коhо":
					echo "$s_index ат коhо = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$at_koho/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$at_koho/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$at_koho/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$at_koho/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$at_koho/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$at_koho/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//О5ус коhо
			case "О5ус коhо":
					echo "$s_index о5ус коhо = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$oghus_koho/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$oghus_koho/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$oghus_koho/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$oghus_koho/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$oghus_koho/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$oghus_koho/$yard;
							echo " ярд";
							break;
					}
					break;
					
		//Сатыы кос
			case "Сатыы кос":
					echo "$s_index сатыы кос = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$satuu_koho/$sm;
							echo " cм";
							break;
						case "Метр":
							echo $s_index*$satuu_koho/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$satuu_koho/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$satuu_koho/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$satuu_koho/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$satuu_koho/$yard;
							echo " ярд";
							break;
					}
					break;
		
		//Сиэлэр ат коhо
			case "Сиэлэр ат коhо":
					echo "$s_index сиэлэр ат коhо = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index*$syeler_at_koho/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$syeler_at_koho/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$syeler_at_koho/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$syeler_at_koho/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$syeler_at_koho/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$syeler_at_koho/$yard;
							echo " ярд";
							break;
					}
					break;
		}
		?>
		<p></p>
		<table>
		<tr><td><b>Харыс</b></td><td>большая пядь (длина, равная раастоянию между концами растянутого большого и среднего пальцев)</td></tr>
		<tr><td><b>Сүөм</b></td><td>пядь (расстояние между растянутыми большим и указательным пальцами)</td></tr>
		<tr><td><b>Мунур суом</b></td><td>расстояние между большим и согнутым указательным пальцами</td></tr>
		<tr><td><b>Борсуок</b></td><td>вершок</td></tr>
		<tr><td><b>Тутум</b></td><td>расстояние, равное высоте кулака</td></tr>
		<tr><td><b>Суор холото</b></td><td>длина, равная высоте кулака с вытянутыми вверх большим пальцем</td></tr>
		<tr><td><b>Уллунах устата</b></td><td>длина стопы</td></tr>
		<tr><td><b>Тобук</b></td><td>от кончика пальца ног до колена</td></tr>
		<tr><td><b>Ылгын чыныйа</b></td><td>толщина мизинца</td></tr>
		<tr><td><b>Илии</b></td><td>толщина в один, два, три четыре пальца</td></tr>
		<tr><td><b>Тогонох устата</b></td><td>расстояние от согнутых пальцев до локтя</td></tr>
		<tr><td><b>Хаамыы</b></td><td>расстояние одного шага</td></tr>
		<tr><td><b>Былас</b></td><td>маховая сажень (длина, равная расстоянию между кончиками пальцев, разведенных в стороны рук)</td></tr>
		<tr><td><b>Ат коhо</b></td><td>Конный кёс</td></tr>
		<tr><td><b>О5ус коhо</b></td><td>Бычий кёс</td></tr>
		<tr><td><b>Сатыы кос</b></td><td>Пеший кёс</td></tr>
		<tr><td><b>Сиэлэр ат коhо</b></td><td>Кёс бегущей рысью лошади</td></tr>
		</table>
		<p><b>Внимание!!!</b></p>
		<p>Т.к. величина многих якутских единиц измерения может колебаться в зависимости от габаритов отдельно взятого человека, здесь представлены средние значения</p>
	</div>
<?php
require "footer.html"
?>
