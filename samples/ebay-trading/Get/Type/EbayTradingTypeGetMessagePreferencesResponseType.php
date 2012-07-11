<?php
/**
 * Class file for EbayTradingTypeGetMessagePreferencesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMessagePreferencesResponseType
 * Documentation : Contains the ASQ subjects for the user specified in the request.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMessagePreferencesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The ASQPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns a seller's ASQ subjects, each in its own Subject node. If the seller has not customized the ASQ subjects using SetMessagePreferences, the call will return the current default values. Returned if IncludeASQPreferences = true was specified in the request.
	 * @var EbayTradingTypeASQPreferencesType
	 */
	public $ASQPreferences;
	/**
	 * Constructor
	 * @param EbayTradingTypeASQPreferencesType ASQPreferences
	 * @return EbayTradingTypeGetMessagePreferencesResponseType
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