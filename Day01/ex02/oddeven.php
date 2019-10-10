<?php 
	while(!feof(STDIN))
	{
		echo "Enter a number: ";
		$num = rtrim(fgets(STDIN));
		if(is_numeric($num))
		{
			if($num % 2 == 0)
				echo ("The number $num is even\n");
			else
				echo ("The number $num is odd\n");
		}
		elseif(feof(STDIN))
			echo("\n");
		else
			echo ("'$num' is a not a number");
	}
?>