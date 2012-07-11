<?php
/**
 * Class file for EbayTradingTypeMessageStatusTypeCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMessageStatusTypeCodeType
 * @date 04/07/2012
 */
class EbayTradingTypeMessageStatusTypeCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Answered'
	 * Meta informations :
	 * 	- documentation : The question has been answered at least once.
	 * @return string 'Answered'
	 */
	const VALUE_ANSWERED = 'Answered';
	/**
	 * Constant for value 'Unanswered'
	 * Meta informations :
	 * 	- documentation : The question has not yet been answered.
	 * @return string 'Unanswered'
	 */
	const VALUE_UNANSWERED = 'Unanswered';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : Reserved for future or internal use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypeMessageStatusTypeCodeType
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
		return in_array($_value,array(self::VALUE_ANSWERED,self::VALUE_UNANSWERED,self::VALUE_CUSTOMCODE));
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