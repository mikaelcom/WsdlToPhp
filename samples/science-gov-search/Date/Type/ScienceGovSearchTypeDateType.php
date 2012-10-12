<?php
/**
 * Class file for ScienceGovSearchTypeDateType
 * @date 13/10/2012
 */
/**
 * Class ScienceGovSearchTypeDateType
 * @date 13/10/2012
 */
class ScienceGovSearchTypeDateType extends ScienceGovSearchWsdlClass
{
	/**
	 * Constant for value 'publication'
	 * @return string 'publication'
	 */
	const VALUE_PUBLICATION = 'publication';
	/**
	 * Constant for value 'issue'
	 * @return string 'issue'
	 */
	const VALUE_ISSUE = 'issue';
	/**
	 * Constant for value 'online'
	 * @return string 'online'
	 */
	const VALUE_ONLINE = 'online';
	/**
	 * Constant for value 'initialRetrieval'
	 * @return string 'initialRetrieval'
	 */
	const VALUE_INITIALRETRIEVAL = 'initialRetrieval';
	/**
	 * Constant for value 'lastRetrieval'
	 * @return string 'lastRetrieval'
	 */
	const VALUE_LASTRETRIEVAL = 'lastRetrieval';
	/**
	 * Constructor
	 * @return ScienceGovSearchTypeDateType
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
		return in_array($_value,array(self::VALUE_PUBLICATION,self::VALUE_ISSUE,self::VALUE_ONLINE,self::VALUE_INITIALRETRIEVAL,self::VALUE_LASTRETRIEVAL));
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