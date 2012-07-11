<?php
/**
 * Class file for XiGlobalmasterTypeAlternateIdentifierTypes
 * @date 08/07/2012
 */
/**
 * Class XiGlobalmasterTypeAlternateIdentifierTypes
 * @date 08/07/2012
 */
class XiGlobalmasterTypeAlternateIdentifierTypes extends XiGlobalmasterWsdlClass
{
	/**
	 * Constant for value 'Unknown'
	 * @return string 'Unknown'
	 */
	const VALUE_UNKNOWN = 'Unknown';
	/**
	 * Constant for value 'Symbol'
	 * @return string 'Symbol'
	 */
	const VALUE_SYMBOL = 'Symbol';
	/**
	 * Constant for value 'CUSIP'
	 * @return string 'CUSIP'
	 */
	const VALUE_CUSIP = 'CUSIP';
	/**
	 * Constant for value 'CIK'
	 * @return string 'CIK'
	 */
	const VALUE_CIK = 'CIK';
	/**
	 * Constant for value 'Valoren'
	 * @return string 'Valoren'
	 */
	const VALUE_VALOREN = 'Valoren';
	/**
	 * Constant for value 'SEDOL'
	 * @return string 'SEDOL'
	 */
	const VALUE_SEDOL = 'SEDOL';
	/**
	 * Constant for value 'DataSourceIdentifier'
	 * @return string 'DataSourceIdentifier'
	 */
	const VALUE_DATASOURCEIDENTIFIER = 'DataSourceIdentifier';
	/**
	 * Constant for value 'ISIN'
	 * @return string 'ISIN'
	 */
	const VALUE_ISIN = 'ISIN';
	/**
	 * Constructor
	 * @return XiGlobalmasterTypeAlternateIdentifierTypes
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
		return in_array($_value,array(self::VALUE_UNKNOWN,self::VALUE_SYMBOL,self::VALUE_CUSIP,self::VALUE_CIK,self::VALUE_VALOREN,self::VALUE_SEDOL,self::VALUE_DATASOURCEIDENTIFIER,self::VALUE_ISIN));
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