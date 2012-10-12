<?php
/**
 * Class file for ScienceGovSearchTypeSourceType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeSourceType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeSourceType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'journal'
	 * @return string 'journal'
	 */
	const VALUE_JOURNAL = 'journal';
	/**
	 * Constant for value 'proceedings'
	 * @return string 'proceedings'
	 */
	const VALUE_PROCEEDINGS = 'proceedings';
	/**
	 * Constant for value 'publication'
	 * @return string 'publication'
	 */
	const VALUE_PUBLICATION = 'publication';
	/**
	 * Constant for value 'citation'
	 * @return string 'citation'
	 */
	const VALUE_CITATION = 'citation';
	/**
	 * Constant for value 'collection'
	 * @return string 'collection'
	 */
	const VALUE_COLLECTION = 'collection';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeSourceType
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
		return in_array($_value,array(self::VALUE_JOURNAL,self::VALUE_PROCEEDINGS,self::VALUE_PUBLICATION,self::VALUE_CITATION,self::VALUE_COLLECTION));
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