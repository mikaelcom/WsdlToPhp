<?php
/**
 * Class file for PPInvoiceTypeOriginType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeOriginType
 * @date 02/07/2012
 */
class PPInvoiceTypeOriginType extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'Web'
	 * @return string 'Web'
	 */
	const VALUE_WEB = 'Web';
	/**
	 * Constant for value 'API'
	 * @return string 'API'
	 */
	const VALUE_API = 'API';
	/**
	 * Constructor
	 * @return PPInvoiceTypeOriginType
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
		return in_array($_value,array(self::VALUE_WEB,self::VALUE_API));
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