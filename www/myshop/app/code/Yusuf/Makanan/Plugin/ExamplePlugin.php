<?php

namespace Yusuf\Makanan\Plugin;

class ExamplePlugin
{

	/**
	 * Undocumented function
	 *
	 * @param \Yusuf\Makanan\Block\Food\Interceptor $subject
	 * @return \Yusuf\Makanan\Block\Food\Interceptor $subject
	 */
	public function beforeGetFood(\Yusuf\Makanan\Block\Food $subject)
	{
		// echo "Before: <br/>";
		
		return $subject;
	}

	/**
	 * Undocumented function
	 *
	 * @param \Yusuf\Makanan\Block\Food\Interceptor $subject
	 * @param callable $proceed
	 * @return \Yusuf\Makanan\Model\Food $result
	 */
	public function aroundGetFood(\Yusuf\Makanan\Block\Food $subject, callable $proceed)
	{
		
		$result = $proceed();

        if ($result->getId()) {
            $result->setNama($result->getNama() . " - >> 1");
        }
		return $result;
	}

	/**
	 * Undocumented function
	 *
	 * @param \Yusuf\Makanan\Block\Food\Interceptor $subject
	 * @param callable $result
	 * @return \Yusuf\Makanan\Model\Food $result
	 */
	public function afterGetFood(\Yusuf\Makanan\Block\Food $subject, $result)
	{

		// echo "After: <br/>";
        if ($result->getId()) {
            $result->setNama($result->getNama() . " - >> 2");
        }
		return $result;

	}

}