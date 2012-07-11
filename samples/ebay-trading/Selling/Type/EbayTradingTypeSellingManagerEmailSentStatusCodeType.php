<?php
/**
 * Class file for EbayTradingTypeSellingManagerEmailSentStatusCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerEmailSentStatusCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerEmailSentStatusCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Successful'
	 * Meta informations :
	 * 	- documentation : Email sent successfully.
	 * @return string 'Successful'
	 */
	const VALUE_SUCCESSFUL = 'Successful';
	/**
	 * Constant for value 'Failed'
	 * Meta informations :
	 * 	- documentation : Sending of email failed.
	 * @return string 'Failed'
	 */
	const VALUE_FAILED = 'Failed';
	/**
	 * Constant for value 'Pending'
	 * Meta informations :
	 * 	- documentation : Email is not yet sent and is in Queue.
	 * @return string 'Pending'
	 */
	const VALUE_PENDING = 'Pending';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeSellingManagerEmailSentStatusCodeType
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
		return in_array($_value,array(self::VALUE_SUCCESSFUL,self::VALUE_FAILED,self::VALUE_PENDING,self::VALUE_CUSTOMCODE));
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