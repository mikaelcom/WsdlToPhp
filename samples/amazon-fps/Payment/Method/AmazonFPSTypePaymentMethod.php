<?php
/**
 * Class file for AmazonFPSTypePaymentMethod
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypePaymentMethod
 * @date 10/07/2012
 */
class AmazonFPSTypePaymentMethod extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'ABT'
	 * @return string 'ABT'
	 */
	const VALUE_ABT = 'ABT';
	/**
	 * Constant for value 'CC'
	 * @return string 'CC'
	 */
	const VALUE_CC = 'CC';
	/**
	 * Constant for value 'ACH'
	 * @return string 'ACH'
	 */
	const VALUE_ACH = 'ACH';
	/**
	 * Constant for value 'Debt'
	 * @return string 'Debt'
	 */
	const VALUE_DEBT = 'Debt';
	/**
	 * Constant for value 'Prepaid'
	 * @return string 'Prepaid'
	 */
	const VALUE_PREPAID = 'Prepaid';
	/**
	 * Constructor
	 * @return AmazonFPSTypePaymentMethod
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
		return in_array($_value,array(self::VALUE_ABT,self::VALUE_CC,self::VALUE_ACH,self::VALUE_DEBT,self::VALUE_PREPAID));
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