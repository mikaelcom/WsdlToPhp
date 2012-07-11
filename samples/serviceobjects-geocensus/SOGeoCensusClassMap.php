<?php
/**
 * ClassMap 
 * @date 06/07/2012
 */
/**
 * ClassMap
 * @date 06/07/2012
 */
class SOGeoCensusClassMap
{
	final public static function classMap()
	{
		return array (
  'GetLocalAreaProfileByZip' => 'SOGeoCensusTypeGetLocalAreaProfileByZip',
  'GetLocalAreaProfileByZipResponse' => 'SOGeoCensusTypeGetLocalAreaProfileByZipResponse',
  'Census' => 'SOGeoCensusTypeCensus',
  'Err' => 'SOGeoCensusTypeErr',
  'CensusElements' => 'SOGeoCensusTypeCensusElements',
  'GetLocalAreaIncomeByZip' => 'SOGeoCensusTypeGetLocalAreaIncomeByZip',
  'GetLocalAreaIncomeByZipResponse' => 'SOGeoCensusTypeGetLocalAreaIncomeByZipResponse',
  'CensusIncome' => 'SOGeoCensusTypeCensusIncome',
);
	}
}
?>