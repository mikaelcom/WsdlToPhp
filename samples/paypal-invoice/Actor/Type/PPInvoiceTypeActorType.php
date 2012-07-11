<?php
/**
 * Class file for PPInvoiceTypeActorType
 * @date 02/07/2012
 */
/**
 * Class PPInvoiceTypeActorType
 * @date 02/07/2012
 */
class PPInvoiceTypeActorType extends PPInvoiceWsdlClass
{
	/**
	 * Constant for value 'Merchant'
	 * @return string 'Merchant'
	 */
	const VALUE_MERCHANT = 'Merchant';
	/**
	 * Constant for value 'Payer'
	 * @return string 'Payer'
	 */
	const VALUE_PAYER = 'Payer';
	/**
	 * Constructor
	 * @return PPInvoiceTypeActorType
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
		return in_array($_value,array(self::VALUE_MERCHANT,self::VALUE_PAYER));
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