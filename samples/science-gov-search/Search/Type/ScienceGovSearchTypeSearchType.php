<?php
/**
 * Class file for ScienceGovSearchTypeSearchType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSearchType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSearchType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'QUICKRANK'
	 * @return string 'QUICKRANK'
	 */
	const VALUE_QUICKRANK = 'QUICKRANK';
	/**
	 * Constant for value 'METARANK'
	 * @return string 'METARANK'
	 */
	const VALUE_METARANK = 'METARANK';
	/**
	 * Constant for value 'DEEPRANK'
	 * @return string 'DEEPRANK'
	 */
	const VALUE_DEEPRANK = 'DEEPRANK';
	/**
	 * Constant for value 'CONTINUATION'
	 * @return string 'CONTINUATION'
	 */
	const VALUE_CONTINUATION = 'CONTINUATION';
	/**
	 * Constant for value 'SUMMARY'
	 * @return string 'SUMMARY'
	 */
	const VALUE_SUMMARY = 'SUMMARY';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeSearchType
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
		return in_array($_value,array(self::VALUE_QUICKRANK,self::VALUE_METARANK,self::VALUE_DEEPRANK,self::VALUE_CONTINUATION,self::VALUE_SUMMARY));
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