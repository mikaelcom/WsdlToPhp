<?php
/**
 * Class file for ScienceGovSearchTypeResultOrderFieldType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeResultOrderFieldType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeResultOrderFieldType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'rank'
	 * @return string 'rank'
	 */
	const VALUE_RANK = 'rank';
	/**
	 * Constant for value 'collectionCode'
	 * @return string 'collectionCode'
	 */
	const VALUE_COLLECTIONCODE = 'collectionCode';
	/**
	 * Constant for value 'collectionSequence'
	 * @return string 'collectionSequence'
	 */
	const VALUE_COLLECTIONSEQUENCE = 'collectionSequence';
	/**
	 * Constant for value 'title'
	 * @return string 'title'
	 */
	const VALUE_TITLE = 'title';
	/**
	 * Constant for value 'author'
	 * @return string 'author'
	 */
	const VALUE_AUTHOR = 'author';
	/**
	 * Constant for value 'summary'
	 * @return string 'summary'
	 */
	const VALUE_SUMMARY = 'summary';
	/**
	 * Constant for value 'date'
	 * @return string 'date'
	 */
	const VALUE_DATE = 'date';
	/**
	 * Constant for value 'keyword'
	 * @return string 'keyword'
	 */
	const VALUE_KEYWORD = 'keyword';
	/**
	 * Constant for value 'source'
	 * @return string 'source'
	 */
	const VALUE_SOURCE = 'source';
	/**
	 * Constant for value 'doi'
	 * @return string 'doi'
	 */
	const VALUE_DOI = 'doi';
	/**
	 * Constant for value 'isbn'
	 * @return string 'isbn'
	 */
	const VALUE_ISBN = 'isbn';
	/**
	 * Constant for value 'issn'
	 * @return string 'issn'
	 */
	const VALUE_ISSN = 'issn';
	/**
	 * Constant for value 'volume'
	 * @return string 'volume'
	 */
	const VALUE_VOLUME = 'volume';
	/**
	 * Constant for value 'issue'
	 * @return string 'issue'
	 */
	const VALUE_ISSUE = 'issue';
	/**
	 * Constant for value 'pages'
	 * @return string 'pages'
	 */
	const VALUE_PAGES = 'pages';
	/**
	 * Constant for value 'affiliation'
	 * @return string 'affiliation'
	 */
	const VALUE_AFFILIATION = 'affiliation';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeResultOrderFieldType
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
		return in_array($_value,array(self::VALUE_RANK,self::VALUE_COLLECTIONCODE,self::VALUE_COLLECTIONSEQUENCE,self::VALUE_TITLE,self::VALUE_AUTHOR,self::VALUE_SUMMARY,self::VALUE_DATE,self::VALUE_KEYWORD,self::VALUE_SOURCE,self::VALUE_DOI,self::VALUE_ISBN,self::VALUE_ISSN,self::VALUE_VOLUME,self::VALUE_ISSUE,self::VALUE_PAGES,self::VALUE_AFFILIATION));
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