<?php
/**
 * Class file for PPInvoiceTypeDetailLevelCode
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeDetailLevelCode
 * @date 02/07/2012
 */
class PPInvoiceTypeDetailLevelCode extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'ReturnAll'
	 * Meta informations :
	 * 	- documentation : Return in response message all detail levels.
	 * @return string 'ReturnAll'
	 */
	const VALUE_RETURNALL = 'ReturnAll';
	/**
	 * Constructor
	 * @return PPInvoiceTypeDetailLevelCode
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
		return in_array($_value,array(self::VALUE_RETURNALL));
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