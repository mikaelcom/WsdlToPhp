<?php
/**
 * Class file for EbayTradingTypePictureManagerDetailLevelCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerDetailLevelCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerDetailLevelCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'ReturnAll'
	 * Meta informations :
	 * 	- documentation : (in) All pictures, folders, and account settings. Default value.
	 * @return string 'ReturnAll'
	 */
	const VALUE_RETURNALL = 'ReturnAll';
	/**
	 * Constant for value 'ReturnSubscription'
	 * Meta informations :
	 * 	- documentation : (in) Only data about the account subscription.
	 * @return string 'ReturnSubscription'
	 */
	const VALUE_RETURNSUBSCRIPTION = 'ReturnSubscription';
	/**
	 * Constant for value 'ReturnPicture'
	 * Meta informations :
	 * 	- documentation : (in) Return only data about pictures and folders in the authenticated user's account.
	 * @return string 'ReturnPicture'
	 */
	const VALUE_RETURNPICTURE = 'ReturnPicture';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureManagerDetailLevelCodeType
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
		return in_array($_value,array(self::VALUE_RETURNALL,self::VALUE_RETURNSUBSCRIPTION,self::VALUE_RETURNPICTURE,self::VALUE_CUSTOMCODE));
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