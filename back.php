<?php
	if (isset($_POST['number'])) {
		function patternZ($N)
		{

			$index; $side_index; $size;
			$Top = 1; $Bottom = 1; $Diagonal = $N - 1;
			for ($index = 0; $index < $N; $index++)
				echo "*" . "&nbsp;";

			echo "<br>";
			for ($index = 1; $index < $N - 1; $index++)
			{
				for ($side_index = 0;
					$side_index < 2 * ($N - $index - 1);
					$side_index++)
					echo "&nbsp;";
				echo "*";

				echo "<br>";
			}
			for ($index = 0; $index < $N; $index++)
				echo "*" . "&nbsp;";
		}

		function patternY($height){
			$counter = 0;
			for ($i = 0; $i < $height; $i++) {
				for ($j = 0; $j <= $height; $j++) {
					if ($j == $counter
						|| $j == $height - $counter
							&& $i <= $height / 2)
						echo "*";
					else
						echo "&nbsp;";
				}
				echo "<br>";
				if ($i < $height / 2)
					$counter++;
			}
		}


		function patternX($height){
			$counter = 0;
			for ($i = 0; $i <= $height-1; $i++) {
				for ($j = 0; $j <= $height; $j++) {
					if ($j == $counter
						|| $j == $height - $counter)
						echo "*";
					else
						echo "&nbsp;";
				}
				$counter++;
				echo "<br>";
			}
		}

		function patternO($height){
		   $dist = 0.0;
		    for ($i = 0; $i <= 2* $height; $i++)
		    {
		        for ($j = 0; $j <= 2*$height; $j++)
		        {
		            $dist = sqrt(($i - $height) *
		                         ($i - $height) +
		                         ($j - $height) *
		                         ($j - $height));
		            if ($dist > $height - 0.5 &&
		                 $dist < $height + 0.5)
		                echo "*";
		                 
		            else
		                echo "&nbsp;";
		        }
		        echo "<br>";
		    }
		}

		if ($_POST['letter'] == 'Z') {
			patternZ($_POST['number']);
		} else if($_POST['letter'] == 'Y'){
			patternY($_POST['number']);
		} else if($_POST['letter'] == 'X'){
			patternX($_POST['number']);
		} else if($_POST['letter'] == 'O'){
			patternO($_POST['number']);
		}
	}

?>
