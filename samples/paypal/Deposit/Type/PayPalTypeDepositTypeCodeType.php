<?php
/**
 * Class file for PayPalTypeDepositTypeCodeType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeDepositTypeCodeType
 * @date 14/07/2012
 */
class PayPalTypeDepositTypeCodeType extends PayPalWsdlClass
{
	/**
	 * Constant for value 'None'
	 * Meta informations :
	 * 	- documentation : None
	 * @return string 'None'
	 */
	const VALUE_NONE = 'None';
	/**
	 * Constant for value 'OtherMethod'
	 * Meta informations :
	 * 	- documentation : Other Method
	 * @return string 'OtherMethod'
	 */
	const VALUE_OTHERMETHOD = 'OtherMethod';
	/**
	 * Constant for value 'FastDeposit'
	 * Meta informations :
	 * 	- documentation : Fast Deposit.
	 * @return string 'FastDeposit'
	 */
	const VALUE_FASTDEPOSIT = 'FastDeposit';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return PayPalTypeDepositTypeCodeType
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