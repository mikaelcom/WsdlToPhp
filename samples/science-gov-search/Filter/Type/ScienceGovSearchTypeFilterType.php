<?php
/**
 * Class file for ScienceGovSearchTypeFilterType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeFilterType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeFilterType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'RANKED'
	 * @return string 'RANKED'
	 */
	const VALUE_RANKED = 'RANKED';
	/**
	 * Constant for value 'SUBSCRIBED'
	 * @return string 'SUBSCRIBED'
	 */
	const VALUE_SUBSCRIBED = 'SUBSCRIBED';
	/**
	 * Constant for value 'DEDUPED'
	 * @return string 'DEDUPED'
	 */
	const VALUE_DEDUPED = 'DEDUPED';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeFilterType
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_RANKED,self::VALUE_SUBSCRIBED,self::VALUE_DEDUPED));
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>