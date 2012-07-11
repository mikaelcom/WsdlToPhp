<?php
/**
 * Class file for PPInvoiceTypeErrorCategory
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeErrorCategory
 * @date 02/07/2012
 */
class PPInvoiceTypeErrorCategory extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'System'
	 * @return string 'System'
	 */
	const VALUE_SYSTEM = 'System';
	/**
	 * Constant for value 'Application'
	 * @return string 'Application'
	 */
	const VALUE_APPLICATION = 'Application';
	/**
	 * Constant for value 'Request'
	 * @return string 'Request'
	 */
	const VALUE_REQUEST = 'Request';
	/**
	 * Constructor
	 * @return PPInvoiceTypeErrorCategory
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
		return in_array($_value,array(self::VALUE_SYSTEM,self::VALUE_APPLICATION,self::VALUE_REQUEST));
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