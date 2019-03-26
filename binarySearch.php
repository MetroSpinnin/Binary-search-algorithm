<?php

	function RealBinarySearch($arr, $data)
	{
		$left = 0;
		$right = count($arr)-1;
		while($left <= $right)
		{
			$middleValue = floor(($left +$right)/2);
		}
		if($arr[$middleValue] < $data)
		{
			$left = $middleValue + 1;
		}
		elseif($arr[$middleValue] > $data)
		{
			$right = $middleValue - 1;
		}
		else 
		{
			return $middleValue;
		}
		return NULL;
	}  

$arrayOfValues = ['2','3','6','1'];
$dataToSearchFor = 1;
if(RealBinarySearch($arrayOfValues, $dataToSearchFor) == true)
{
	echo  $dataToSearchFor. "was found";
} else 
{
	echo $dataToSearchFor. "was not found";
}
?>