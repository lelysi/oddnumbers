<?php
declare(strict_types=1);

namespace OddNumber;

class OddNumberGetter
{
	/**
	 * get the number which occurs odd times in the source array
	 *
	 * @param $arrValues array
	 * @return int
	 */
	function getOddNumber(array $arrValues): int
	{
		$valueCounts = array_count_values($arrValues);
		$oddOccurredNumber = array_filter($valueCounts, function ($count) { return $count % 2 != 0; });
		return array_keys($oddOccurredNumber)[0];
	}
}