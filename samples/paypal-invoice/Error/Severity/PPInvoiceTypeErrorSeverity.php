<?php
/**
 * Class file for PPInvoiceTypeErrorSeverity
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeErrorSeverity
 * @date 02/07/2012
 */
class PPInvoiceTypeErrorSeverity extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'Error'
	 * @return string 'Error'
	 */
	const VALUE_ERROR = 'Error';
	/**
	 * Constant for value 'Warning'
	 * @return string 'Warning'
	 */
	const VALUE_WARNING = 'Warning';
	/**
	 * Constructor
	 * @return PPInvoiceTypeErrorSeverity
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
		return in_array($_value,array(self::VALUE_ERROR,self::VALUE_WARNING));
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