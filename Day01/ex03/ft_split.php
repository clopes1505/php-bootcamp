<?php
	function ft_split($string)
	{
		$final = array_filter(explode(' ',$string));
		sort($final);
		return($final);
	}
?>