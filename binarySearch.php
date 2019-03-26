<?php

	function RealBinarySearch($arr, $data)
	{	
		/**
		* The $left has to be attributed to zero
		* because it is assumed to be the Lil
		*/
		
		$left = 0;
		
		/**
		* The right side of the array carries
		* the total number of elements in the
		* array
		*/
		
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
			/**
			* If the values does not exist
			* after the while loop then kindly
			* return the middlevalue
			*/
			
			return $middleValue;
		}
		return NULL;
	}  

/**
* Create an object and pass the 
* values to it and scrutinize using
* the BinarySearch function created
*/

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
