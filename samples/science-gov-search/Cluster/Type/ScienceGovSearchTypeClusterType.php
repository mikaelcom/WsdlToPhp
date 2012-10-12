<?php
/**
 * Class file for ScienceGovSearchTypeClusterType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeClusterType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeClusterType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'topic'
	 * @return string 'topic'
	 */
	const VALUE_TOPIC = 'topic';
	/**
	 * Constant for value 'author'
	 * @return string 'author'
	 */
	const VALUE_AUTHOR = 'author';
	/**
	 * Constant for value 'source'
	 * @return string 'source'
	 */
	const VALUE_SOURCE = 'source';
	/**
	 * Constant for value 'collectionCode'
	 * @return string 'collectionCode'
	 */
	const VALUE_COLLECTIONCODE = 'collectionCode';
	/**
	 * Constant for value 'keywords'
	 * @return string 'keywords'
	 */
	const VALUE_KEYWORDS = 'keywords';
	/**
	 * Constant for value 'affiliation'
	 * @return string 'affiliation'
	 */
	const VALUE_AFFILIATION = 'affiliation';
	/**
	 * Constant for value 'date'
	 * @return string 'date'
	 */
	const VALUE_DATE = 'date';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeClusterType
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
		return in_array($_value,array(self::VALUE_TOPIC,self::VALUE_AUTHOR,self::VALUE_SOURCE,self::VALUE_COLLECTIONCODE,self::VALUE_KEYWORDS,self::VALUE_AFFILIATION,self::VALUE_DATE));
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