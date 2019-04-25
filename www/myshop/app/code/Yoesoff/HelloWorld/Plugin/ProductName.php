<?php

namespace Yoesoff\HelloWorld\Plugin;

class ProductName
{
    // public static function lbsToKg($lbs)
    // {
    //     $lbs_kg = 0.4535; 
    //     $Kgrams = $lbs *$lbs_kg;

    //     return $Kgrams;
    // }

	public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
	{
		
		$result = $proceed();

		return $result;
	}

	public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
	{
        $weight = (int) $subject->getWeight();

		$result = $result . "&nbsp;" . " $weight  (kg)";

		return $result;

    }
    


}