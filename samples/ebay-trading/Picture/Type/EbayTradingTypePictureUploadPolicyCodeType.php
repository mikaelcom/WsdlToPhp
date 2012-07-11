<?php
/**
 * Class file for EbayTradingTypePictureUploadPolicyCodeType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureUploadPolicyCodeType
 * @date 04/07/2012
 */
class EbayTradingTypePictureUploadPolicyCodeType extends EbayTradingWsdlClass
{
	/**
	 * Constant for value 'Add'
	 * Meta informations :
	 * 	- documentation : Specifies that an uploaded picture is added to the pictures available to a seller on the eBay site.
	 * @return string 'Add'
	 */
	const VALUE_ADD = 'Add';
	/**
	 * Constant for value 'ClearAndAdd'
	 * Meta informations :
	 * 	- documentation : Specifies, first, that all pictures available to a seller on the eBay site are removed, and then second, that the currently uploaded picture is made available to the seller.
	 * @return string 'ClearAndAdd'
	 */
	const VALUE_CLEARANDADD = 'ClearAndAdd';
	/**
	 * Constant for value 'CustomCode'
	 * Meta informations :
	 * 	- documentation : (out) Reserved for internal or future use.
	 * @return string 'CustomCode'
	 */
	const VALUE_CUSTOMCODE = 'CustomCode';
	/**
	 * Constructor
	 * @return EbayTradingTypePictureUploadPolicyCodeType
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
		return in_array($_value,array(self::VALUE_ADD,self::VALUE_CLEARANDADD,self::VALUE_CUSTOMCODE));
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