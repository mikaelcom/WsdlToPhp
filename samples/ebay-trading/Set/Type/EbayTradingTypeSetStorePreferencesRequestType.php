<?php
/**
 * Class file for EbayTradingTypeSetStorePreferencesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetStorePreferencesRequestType
 * Documentation : Sets the preferences for a user's eBay Store.
 * @date 04/07/2012
 */
class EbayTradingTypeSetStorePreferencesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The StorePreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the store preferences.
	 * @var EbayTradingTypeStorePreferencesType
	 */
	public $StorePreferences;
	/**
	 * Constructor
	 * @param EbayTradingTypeStorePreferencesType StorePreferences
	 * @return EbayTradingTypeSetStorePreferencesRequestType
	 */
	public function __construct($_StorePreferences = null)
	{
		EbayTradingWsdlClass::__construct(array('StorePreferences'=>$_StorePreferences));
	}
	/**
	 * Set StorePreferences
	 * @param StorePreferencesType StorePreferences
	 * @return StorePreferencesType
	 */
	public function setStorePreferences($_StorePreferences)
	{
		return ($this->StorePreferences = $_StorePreferences);
	}
	/**
	 * Get StorePreferences
	 * @return EbayTradingTypeStorePreferencesType
	 */
	public function getStorePreferences()
	{
		return $this->StorePreferences;
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