<?php
/**
 * Class file for EbayTradingTypeDepositTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDepositTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeDepositTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : (out) No deposit needed.
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'OtherMethod'
	 * Meta informations :
	 * 	- documentation : (out) Pay the deposit using PayPal, and then use any of the other specified payment methods to pay the balance.
	 * @return string 'OtherMethod'
	 */
	const VALUE_OTHERMETHOD = 'OtherMethod';
	/**
	 * Constant for value 'FastDeposit'
	 * Meta informations :
	 * 	- documentation : (out) No longer used.
	 * @return string 'FastDeposit'
	 */
	const VALUE_FASTDEPOSIT = 'FastDeposit';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeDepositTypeCodeType
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
		return in_array($_value,array(self::VALUE_NONE,self::VALUE_OTHERMETHOD,self::VALUE_FASTDEPOSIT,self::VALUE_CUSTOMCODE));
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