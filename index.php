﻿<?php
require "header.php";
?>
	<div id="center_div">
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
		$inch=2.54; 
		$foot=30.48; 
		$yard=91.44; 
		?>
		<form action="index.php" method=post>
		<p><input type="text" name="s_index" size="5" value=1>
		<select name="sakha">
		   <option>Харыс</option>
		   <option>Сүөм</option>
		   <option>Мунур Сүөм</option>
		   <option>Бөрсүөк</option>
		   <option>Тутум</option>
		   <option>Суор холото</option>
		   <option>Уллунах устата</option>
		   <option>Тобук</option>
		   <option>Ылгын чыкыйа</option>
		   <option>Илии</option>
		   <option>Тогонох устата</option>
		   <option>Хаамыы</option>
		   <option>Былас</option>
		   <option>Ат коhо</option>
		   <option>Оҕус коhо</option>
		   <option>Сатыы кос</option>
		   <option>Сиэлэр ат коhо</option>
		   <option>Сантиметр</option>
			<option>Метр</option>
			<option>Километр</option>
			<option>Дюйм</option>
			<option>Фут</option>
			<option>Ярд</option>
		</select></p>
		<select name="others">
			<option>Сантиметр</option>
			<option>Метр</option>
			<option>Километр</option>
			<option>Дюйм</option>
			<option>Фут</option>
			<option>Ярд</option>
			<option>Харыс</option>
			<option>Сүөм</option>
			<option>Мунур Сүөм</option>
			<option>Бөрсүөк</option>
			<option>Тутум</option>
			<option>Суор холото</option>
			<option>Уллунах устата</option>
			<option>Тобук</option>
			<option>Ылгын чыкыйа</option>
			<option>Илии</option>
			<option>Тогонох устата</option>
			<option>Хаамыы</option>
			<option>Былас</option>
			<option>Ат коhо</option>
			<option>Оҕус коhо</option>
			<option>Сатыы кос</option>
			<option>Сиэлэр ат коhо</option>
		</select></p>
		<p><input type="submit" value="Ок"></p>
		</form>
		<?php
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
						case "Харыс":
							echo $s_index*$kharus/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$kharus/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$kharus/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$kharus/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$kharus/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$kharus/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$kharus/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$kharus/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$kharus/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$kharus/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$kharus/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$kharus/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$kharus/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$kharus/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$kharus/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$kharus/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$kharus/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
					}
					break;
		//Сүөм
			case "Сүөм":
					echo "$s_index Сүөм = ";
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
						case "Харыс":
							echo $s_index*$syom/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$syom/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$syom/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$syom/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$syom/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$syom/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$syom/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$syom/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$syom/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$syom/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$syom/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$syom/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$syom/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$syom/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$syom/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$syom/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$syom/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
					}
					break;
		//Мунур Сүөм
			case "Мунур Сүөм":
			echo "$s_index мунур Сүөм = ";
					switch ($others){
						case "Сантиметр":
							echo $s_index/$munur_syom/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index/$munur_syom/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index/$munur_syom/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index/$munur_syom/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index/$munur_syom/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index/$munur_syom/$yard;
							echo " ярд";
							break;
						case "Харыс":
							echo $s_index*$munur_syom/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$munur_syom/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$munur_syom/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$munur_syom/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$munur_syom/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$munur_syom/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$munur_syom/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$munur_syom/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$munur_syom/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$munur_syom/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$munur_syom/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$munur_syom/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$munur_syom/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$munur_syom/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$munur_syom/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$munur_syom/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$munur_syom/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
					}
					break;
		
		//Вершок-горшок
			case "Бөрсүөк":
				echo "$s_index Бөрсүөк = ";
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
						case "Харыс":
							echo $s_index*$vershok/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$vershok/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$vershok/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$vershok/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$vershok/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$vershok/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$vershok/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$vershok/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$vershok/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$vershok/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$vershok/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$vershok/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$vershok/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$vershok/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$vershok/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$vershok/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$vershok/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$tutum/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$tutum/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$tutum/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$tutum/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$tutum/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$tutum/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$tutum/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$tutum/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$tutum/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$tutum/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$tutum/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$tutum/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$tutum/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$tutum/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$tutum/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$tutum/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$tutum/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$suor_kholoto/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$suor_kholoto/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$suor_kholoto/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$suor_kholoto/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$suor_kholoto/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$suor_kholoto/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$suor_kholoto/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$suor_kholoto/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$suor_kholoto/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$suor_kholoto/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$suor_kholoto/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$suor_kholoto/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$suor_kholoto/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$suor_kholoto/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$suor_kholoto/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$suor_kholoto/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$suor_kholoto/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$ullunakh_ustata/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$ullunakh_ustata/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$ullunakh_ustata/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$ullunakh_ustata/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$ullunakh_ustata/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$ullunakh_ustata/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$ullunakh_ustata/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$ullunakh_ustata/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$ullunakh_ustata/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$ullunakh_ustata/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$ullunakh_ustata/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$ullunakh_ustata/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$ullunakh_ustata/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$ullunakh_ustata/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$ullunakh_ustata/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$ullunakh_ustata/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$ullunakh_ustata/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$tobuk/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$tobuk/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$tobuk/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$tobuk/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$tobuk/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$tobuk/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$tobuk/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$tobuk/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$tobuk/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$tobuk/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$tobuk/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$tobuk/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$tobuk/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$tobuk/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$tobuk/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$tobuk/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$tobuk/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
					}
					break;
					
		//Ылгын чыкыйа
			case "Ылгын чыкыйа":
					echo "$s_index Ылгын чыкыйа = ";
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
						case "Харыс":
							echo $s_index*$ulgun_chunuya/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$ulgun_chunuya/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$ulgun_chunuya/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$ulgun_chunuya/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$ulgun_chunuya/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$ulgun_chunuya/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$ulgun_chunuya/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$ulgun_chunuya/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$ulgun_chunuya/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$ulgun_chunuya/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$ulgun_chunuya/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$ulgun_chunuya/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$ulgun_chunuya/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$ulgun_chunuya/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$ulgun_chunuya/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$ulgun_chunuya/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$ulgun_chunuya/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$ilii/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$ilii/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$ilii/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$ilii/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$ilii/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$ilii/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$ilii/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$ilii/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$ilii/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$ilii/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$ilii/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$ilii/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$ilii/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$ilii/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$ilii/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$ilii/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$ilii/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$togonokh_ustata/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$togonokh_ustata/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$togonokh_ustata/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$togonokh_ustata/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$togonokh_ustata/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$togonokh_ustata/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$togonokh_ustata/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$togonokh_ustata/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$togonokh_ustata/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$togonokh_ustata/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$togonokh_ustata/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$togonokh_ustata/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$togonokh_ustata/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$togonokh_ustata/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$togonokh_ustata/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$togonokh_ustata/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$togonokh_ustata/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$khaamuu/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$khaamuu/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$khaamuu/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$khaamuu/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$khaamuu/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$khaamuu/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$khaamuu/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$khaamuu/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$khaamuu/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$khaamuu/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$khaamuu/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$khaamuu/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$khaamuu/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$khaamuu/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$khaamuu/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$khaamuu/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$khaamuu/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$bulas/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$bulas/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$bulas/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$bulas/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$bulas/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$bulas/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$bulas/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$bulas/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$bulas/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$bulas/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$bulas/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$bulas/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$bulas/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$bulas/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$bulas/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$bulas/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$bulas/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$at_koho/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$at_koho/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$at_koho/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$at_koho/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$at_koho/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$at_koho/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$at_koho/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$at_koho/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$at_koho/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$at_koho/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$at_koho/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$at_koho/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$at_koho/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$at_koho/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$at_koho/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$at_koho/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$at_koho/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
					}
					break;
					
		//Оҕус коhо
			case "Оҕус коhо":
					echo "$s_index Оҕус коhо = ";
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
						case "Харыс":
							echo $s_index*$oghus_koho/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$oghus_koho/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$oghus_koho/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$oghus_koho/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$oghus_koho/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$oghus_koho/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$oghus_koho/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$oghus_koho/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$oghus_koho/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$oghus_koho/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$oghus_koho/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$oghus_koho/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$oghus_koho/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$oghus_koho/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$oghus_koho/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$oghus_koho/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$oghus_koho/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$satuu_koho/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$satuu_koho/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$satuu_koho/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$satuu_koho/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$satuu_koho/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$satuu_koho/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$satuu_koho/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$satuu_koho/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$satuu_koho/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$satuu_koho/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$satuu_koho/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$satuu_koho/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$satuu_koho/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$satuu_koho/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$satuu_koho/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$satuu_koho/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$satuu_koho/$syeler_at_koho;
							echo " cиэлэр ат коhо";
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
						case "Харыс":
							echo $s_index*$syeler_at_koho/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$syeler_at_koho/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$syeler_at_koho/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$syeler_at_koho/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$syeler_at_koho/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$syeler_at_koho/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$syeler_at_koho/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$syeler_at_koho/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$syeler_at_koho/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$syeler_at_koho/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$syeler_at_koho/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$syeler_at_koho/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$syeler_at_koho/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$syeler_at_koho/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$syeler_at_koho/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$syeler_at_koho/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$syeler_at_koho/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
					}
					break;
					
		//Сантиметр
				case "Сантиметр":
					echo "$s_index сантиметр = ";
					switch ($others){
						case "Сантиметр";
							echo $s_index*$sm*$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$sm/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$sm/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$sm/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$sm/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$sm/$yard;
							echo " ярд";
							break;
						case "Харыс":
							echo $s_index*$sm/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$sm/$syom;
							echo " сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$sm/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$sm/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$sm/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$sm/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$sm/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$sm/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$sm/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$sm/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$sm/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$sm/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$sm/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$sm/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$sm/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$sm/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$sm/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
				}
				break;
				
			//Метр
				case "Метр":
					echo "$s_index метр = ";
					switch ($others){
						case "Сантиметр";
							echo $s_index*$m/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$m/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$m/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$m/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$m/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$m/$yard;
							echo " ярд";
							break;
						case "Харыс":
							echo $s_index*$m/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$m/$syom;
							echo " Сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$m/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$m/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$m/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$m/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$m/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$m/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$m/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$m/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$m/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$m/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$m/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$m/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$m/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$m/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$m/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
				}
				break;

			//Километр
				case "Километр":
					echo "$s_index километр = ";
					switch ($others){
						case "Сантиметр";
							echo $s_index*$km/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$km/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$km/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$km/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$km/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$km/$yard;
							echo " ярд";
							break;
						case "Харыс":
							echo $s_index*$km/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$km/$syom;
							echo " Сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$km/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$km/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$km/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$km/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$km/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$km/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$km/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$km/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$km/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$km/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$km/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$km/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$km/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$km/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$km/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
				}
				break;
				
			//Дюйм
				case "Дюйм":
					echo "$s_index дюйм = ";
					switch ($others){
						case "Сантиметр";
							echo $s_index*$inch/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$inch/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$inch/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$inch/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$inch/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$inch/$yard;
							echo " ярд";
							break;
						case "Харыс":
							echo $s_index*$inch/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$inch/$syom;
							echo " Сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$inch/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$inch/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$inch/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$inch/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$inch/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$inch/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$inch/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$inch/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$inch/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$inch/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$inch/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$inch/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$inch/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$inch/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$inch/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
				}
				break;
				
			//Фут
				case "Фут":
					echo "$s_index фут = ";
					switch ($others){
						case "Сантиметр";
							echo $s_index*$foot/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$foot/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$foot/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$foot/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$foot/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$foot/$yard;
							echo " ярд";
							break;
						case "Харыс":
							echo $s_index*$foot/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$foot/$syom;
							echo " Сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$foot/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$foot/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$foot/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$foot/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$foot/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$foot/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$foot/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$foot/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$foot/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$foot/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$foot/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$foot/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$foot/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$foot/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$foot/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
				}	
				break;
				
			//Ярд
				case "Ярд":
					echo "$s_index ярд = ";
					switch ($others){
						case "Сантиметр";
							echo $s_index*$yard/$sm;
							echo " см";
							break;
						case "Метр":
							echo $s_index*$yard/$m;
							echo " м";
							break;
						case "Километр":
							echo $s_index*$yard/$km;
							echo " км";
							break;
						case "Дюйм":
							echo $s_index*$yard/$inch;
							echo " дюйм";
							break;
						case "Фут":
							echo $s_index*$yard/$foot;
							echo " фут";
							break;
						case "Ярд":
							echo $s_index*$yard/$yard;
							echo " ярд";
							break;
						case "Харыс":
							echo $s_index*$yard/$kharus;
							echo " харыс";
							break;
						case "Сүөм":
							echo $s_index*$yard/$syom;
							echo " Сүөм";
							break;
						case "Мунур Сүөм":
							echo $s_index*$yard/$munur_syom;
							echo " мунур Сүөм";
							break;
						case "Бөрсүөк":
							echo $s_index*$yard/$vershok;
							echo " Бөрсүөк";
							break;
						case "Тутум":
							echo $s_index*$yard/$tutum;
							echo " тутум";
							break;
						case "Суор холото":
							echo $s_index*$yard/$suor_kholoto;
							echo " суор холото";
							break;
						case "Уллунах устата":
							echo $s_index*$yard/$ullunakh_ustata;
							echo " уллунах устата";
							break;
						case "Тобук":
							echo $s_index*$yard/$tobuk;
							echo " тобук";
							break;
						case "Ылгын чыкыйа":
							echo $s_index*$yard/$ulgun_chunuya;
							echo " Ылгын чыкыйа";
							break;
						case "Илии":
							echo $s_index*$yard/$ilii;
							echo " илии";
							break;
						case "Тогонох устата":
							echo $s_index*$yard/$togonokh_ustata;
							echo " тогонох устата";
							break;
						case "Хаамыы":
							echo $s_index*$yard/$khaamuu;
							echo " хаамыы";
							break;
						case "Былас":
							echo $s_index*$yard/$bulas;
							echo " былас";
							break;
						case "Ат коhо":
							echo $s_index*$yard/$at_koho;
							echo " ат коhо";
							break;
						case "Оҕус коhо":
							echo $s_index*$yard/$oghus_koho;
							echo " Оҕус коhо";
							break;
						case "Сатыы кос":
							echo $s_index*$yard/$satuu_koho;
							echo " cатыы кос";
							break;
						case "Сиэлэр ат коhо":
							echo $s_index*$yard/$syeler_at_koho;
							echo " cиэлэр ат коhо";
							break;
				}
				break;
				
			
		}
		?>
		<p></p>
		<table width=1200>
		<tr><td><b>Харыс</b></td><td >большая пядь (длина, равная раастоянию между концами растянутого большого и среднего пальцев)</td><td rowspan=17><img src=img.jpg width=500></td></tr>
		<tr><td><b>Сүөм</b></td><td >пядь (расстояние между растянутыми большим и указательным пальцами)</td></tr>
		<tr><td><b>Мунур Сүөм</b></td><td >расстояние между большим и согнутым указательным пальцами</td></tr>
		<tr><td><b>Бөрсүөк</b></td><td >вершок</td></tr>
		<tr><td><b>Тутум</b></td><td >расстояние, равное высоте кулака</td></tr>
		<tr><td><b>Суор холото</b></td><td >длина, равная высоте кулака с вытянутыми вверх большим пальцем</td></tr>
		<tr><td><b>Уллунах устата</b></td><td >длина стопы</td></tr>
		<tr><td><b>Тобук</b></td><td >от кончика пальца ног до колена</td></tr>
		<tr><td><b>Ылгын чыкыйа</b></td><td >толщина мизинца</td></tr>
		<tr><td><b>Илии</b></td><td >толщина в один, два, три четыре пальца</td></tr>
		<tr><td><b>Тогонох устата</b></td><td >расстояние от согнутых пальцев до локтя</td></tr>
		<tr><td><b>Хаамыы</b></td><td >расстояние одного шага</td></tr>
		<tr><td><b>Былас</b></td><td >маховая сажень (длина, равная расстоянию между кончиками пальцев, разведенных в стороны рук)</td></tr>
		<tr><td><b>Ат коhо</b></td><td >Конный кёс</td></tr>
		<tr><td><b>Оҕус коhо</b></td><td >Бычий кёс</td></tr>
		<tr><td><b>Сатыы кос</b></td><td >Пеший кёс</td></tr>
		<tr><td><b>Сиэлэр ат коhо</b></td><td >Кёс бегущей рысью лошади</td></tr>
		</table>
		<p><b>Внимание!!!</b></p>
		<p>Т.к. величина многих якутских единиц измерения может колебаться в зависимости от габаритов отдельно взятого человека, здесь представлены средние значения</p>
	</div>
<?php
require "footer.html"
?>
