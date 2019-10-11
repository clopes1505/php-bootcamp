<?php
	function ft_is_sort($input)
	{
		$arr= $input;
		sort($arr);
		if ($arr == $input) 
			return(TRUE);
		return(FALSE);
	}
?>