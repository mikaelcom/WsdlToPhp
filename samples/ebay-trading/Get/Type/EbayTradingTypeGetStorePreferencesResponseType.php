<?php
/**
 * Class file for EbayTradingTypeGetStorePreferencesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetStorePreferencesResponseType
 * Documentation : Contains the Store preferences retrieved for a user.
 * @date 04/07/2012
 */
class EbayTradingTypeGetStorePreferencesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The StorePreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The user's Store preferences.
	 * @var EbayTradingTypeStorePreferencesType
	 */
	public $StorePreferences;
	/**
	 * Constructor
	 * @param EbayTradingTypeStorePreferencesType StorePreferences
	 * @return EbayTradingTypeGetStorePreferencesResponseType
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