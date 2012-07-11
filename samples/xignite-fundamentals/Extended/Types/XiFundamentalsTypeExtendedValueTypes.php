<?php
/**
 * Class file for XiFundamentalsTypeExtendedValueTypes
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeExtendedValueTypes
 * @date 08/07/2012
 */
class XiFundamentalsTypeExtendedValueTypes extends XiFundamentalsWsdlClass
{
	/**
	 * Constant for value 'Exchanges'
	 * @return string 'Exchanges'
	 */
	const VALUE_EXCHANGES = 'Exchanges';
	/**
	 * Constant for value 'Sectors'
	 * @return string 'Sectors'
	 */
	const VALUE_SECTORS = 'Sectors';
	/**
	 * Constant for value 'IndustryGroups'
	 * @return string 'IndustryGroups'
	 */
	const VALUE_INDUSTRYGROUPS = 'IndustryGroups';
	/**
	 * Constant for value 'Industries'
	 * @return string 'Industries'
	 */
	const VALUE_INDUSTRIES = 'Industries';
	/**
	 * Constant for value 'SICCodes'
	 * @return string 'SICCodes'
	 */
	const VALUE_SICCODES = 'SICCodes';
	/**
	 * Constant for value 'NAICSCodes'
	 * @return string 'NAICSCodes'
	 */
	const VALUE_NAICSCODES = 'NAICSCodes';
	/**
	 * Constant for value 'DowJonesMembership'
	 * @return string 'DowJonesMembership'
	 */
	const VALUE_DOWJONESMEMBERSHIP = 'DowJonesMembership';
	/**
	 * Constant for value 'TorontoMembership'
	 * @return string 'TorontoMembership'
	 */
	const VALUE_TORONTOMEMBERSHIP = 'TorontoMembership';
	/**
	 * Constant for value 'SAndPRating'
	 * @return string 'SAndPRating'
	 */
	const VALUE_SANDPRATING = 'SAndPRating';
	/**
	 * Constant for value 'State'
	 * @return string 'State'
	 */
	const VALUE_STATE = 'State';
	/**
	 * Constant for value 'Currency'
	 * @return string 'Currency'
	 */
	const VALUE_CURRENCY = 'Currency';
	/**
	 * Constant for value 'MostRecentAuditorsReport'
	 * @return string 'MostRecentAuditorsReport'
	 */
	const VALUE_MOSTRECENTAUDITORSREPORT = 'MostRecentAuditorsReport';
	/**
	 * Constant for value 'Country'
	 * @return string 'Country'
	 */
	const VALUE_COUNTRY = 'Country';
	/**
	 * Constant for value 'CommonIssueType'
	 * @return string 'CommonIssueType'
	 */
	const VALUE_COMMONISSUETYPE = 'CommonIssueType';
	/**
	 * Constructor
	 * @return XiFundamentalsTypeExtendedValueTypes
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
		return in_array($_value,array(self::VALUE_EXCHANGES,self::VALUE_SECTORS,self::VALUE_INDUSTRYGROUPS,self::VALUE_INDUSTRIES,self::VALUE_SICCODES,self::VALUE_NAICSCODES,self::VALUE_DOWJONESMEMBERSHIP,self::VALUE_TORONTOMEMBERSHIP,self::VALUE_SANDPRATING,self::VALUE_STATE,self::VALUE_CURRENCY,self::VALUE_MOSTRECENTAUDITORSREPORT,self::VALUE_COUNTRY,self::VALUE_COMMONISSUETYPE));
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