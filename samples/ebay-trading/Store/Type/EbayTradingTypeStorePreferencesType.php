<?php
/**
 * Class file for EbayTradingTypeStorePreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStorePreferencesType
 * Documentation : Store Preferences type.
 * @date 04/07/2012
 */
class EbayTradingTypeStorePreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The VacationPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Store vacation hold preferences.
	 * @var EbayTradingTypeStoreVacationPreferencesType
	 */
	public $VacationPreferences;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreVacationPreferencesType VacationPreferences
	 * @return EbayTradingTypeStorePreferencesType
	 */
	public function __construct($_VacationPreferences = null)
	{
		parent::__construct(array('VacationPreferences'=>$_VacationPreferences));
	}
	/**
	 * Set VacationPreferences
	 * @param StoreVacationPreferencesType VacationPreferences
	 * @return StoreVacationPreferencesType
	 */
	public function setVacationPreferences($_VacationPreferences)
	{
		return ($this->VacationPreferences = $_VacationPreferences);
	}
	/**
	 * Get VacationPreferences
	 * @return EbayTradingTypeStoreVacationPreferencesType
	 */
	public function getVacationPreferences()
	{
		return $this->VacationPreferences;
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