<?php
/**
 * Class file for EbayTradingTypeSetMessagePreferencesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetMessagePreferencesRequestType
 * Documentation : Enables a seller to add custom Ask Seller a Question (ASQ) subjects to their Ask a Question page, or to reset any custom subjects to their default values.
 * @date 04/07/2012
 */
class EbayTradingTypeSetMessagePreferencesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ASQPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains custom ASQ subjects or a flag to reset those subjects to their default values.
	 * @var EbayTradingTypeASQPreferencesType
	 */
	public $ASQPreferences;
	/**
	 * Constructor
	 * @param EbayTradingTypeASQPreferencesType ASQPreferences
	 * @return EbayTradingTypeSetMessagePreferencesRequestType
	 */
	public function __construct($_ASQPreferences = null)
	{
		EbayTradingWsdlClass::__construct(array('ASQPreferences'=>$_ASQPreferences));
	}
	/**
	 * Set ASQPreferences
	 * @param ASQPreferencesType ASQPreferences
	 * @return ASQPreferencesType
	 */
	public function setASQPreferences($_ASQPreferences)
	{
		return ($this->ASQPreferences = $_ASQPreferences);
	}
	/**
	 * Get ASQPreferences
	 * @return EbayTradingTypeASQPreferencesType
	 */
	public function getASQPreferences()
	{
		return $this->ASQPreferences;
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