<?php
/**
 * Class file for AmazonFPSTypeRelationType
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeRelationType
 * @date 10/07/2012
 */
class AmazonFPSTypeRelationType extends AmazonFPSWsdlClass
{
	/**
	 * Constant for value 'Refund'
	 * @return string 'Refund'
	 */
	const VALUE_REFUND = 'Refund';
	/**
	 * Constant for value 'Parent'
	 * @return string 'Parent'
	 */
	const VALUE_PARENT = 'Parent';
	/**
	 * Constant for value 'MarketplaceFee'
	 * @return string 'MarketplaceFee'
	 */
	const VALUE_MARKETPLACEFEE = 'MarketplaceFee';
	/**
	 * Constant for value 'RefundReversal'
	 * @return string 'RefundReversal'
	 */
	const VALUE_REFUNDREVERSAL = 'RefundReversal';
	/**
	 * Constructor
	 * @return AmazonFPSTypeRelationType
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
		return in_array($_value,array(self::VALUE_REFUND,self::VALUE_PARENT,self::VALUE_MARKETPLACEFEE,self::VALUE_REFUNDREVERSAL));
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