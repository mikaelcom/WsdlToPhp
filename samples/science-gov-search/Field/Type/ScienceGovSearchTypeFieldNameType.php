<?php
/**
 * Class file for ScienceGovSearchTypeFieldNameType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeFieldNameType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeFieldNameType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'FULLRECORD'
	 * @return string 'FULLRECORD'
	 */
	const VALUE_FULLRECORD = 'FULLRECORD';
	/**
	 * Constant for value 'TITLE'
	 * @return string 'TITLE'
	 */
	const VALUE_TITLE = 'TITLE';
	/**
	 * Constant for value 'AUTHOR'
	 * @return string 'AUTHOR'
	 */
	const VALUE_AUTHOR = 'AUTHOR';
	/**
	 * Constant for value 'SUMMARY'
	 * @return string 'SUMMARY'
	 */
	const VALUE_SUMMARY = 'SUMMARY';
	/**
	 * Constant for value 'SOURCE'
	 * @return string 'SOURCE'
	 */
	const VALUE_SOURCE = 'SOURCE';
	/**
	 * Constant for value 'KEYWORDS'
	 * @return string 'KEYWORDS'
	 */
	const VALUE_KEYWORDS = 'KEYWORDS';
	/**
	 * Constant for value 'STARTDATE'
	 * @return string 'STARTDATE'
	 */
	const VALUE_STARTDATE = 'STARTDATE';
	/**
	 * Constant for value 'ENDDATE'
	 * @return string 'ENDDATE'
	 */
	const VALUE_ENDDATE = 'ENDDATE';
	/**
	 * Constant for value 'COORDINATES'
	 * @return string 'COORDINATES'
	 */
	const VALUE_COORDINATES = 'COORDINATES';
	/**
	 * Constant for value 'DOI'
	 * @return string 'DOI'
	 */
	const VALUE_DOI = 'DOI';
	/**
	 * Constant for value 'ISBN'
	 * @return string 'ISBN'
	 */
	const VALUE_ISBN = 'ISBN';
	/**
	 * Constant for value 'ISSN'
	 * @return string 'ISSN'
	 */
	const VALUE_ISSN = 'ISSN';
	/**
	 * Constant for value 'AFFILIATION'
	 * @return string 'AFFILIATION'
	 */
	const VALUE_AFFILIATION = 'AFFILIATION';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeFieldNameType
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
		return in_array($_value,array(self::VALUE_FULLRECORD,self::VALUE_TITLE,self::VALUE_AUTHOR,self::VALUE_SUMMARY,self::VALUE_SOURCE,self::VALUE_KEYWORDS,self::VALUE_STARTDATE,self::VALUE_ENDDATE,self::VALUE_COORDINATES,self::VALUE_DOI,self::VALUE_ISBN,self::VALUE_ISSN,self::VALUE_AFFILIATION));
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