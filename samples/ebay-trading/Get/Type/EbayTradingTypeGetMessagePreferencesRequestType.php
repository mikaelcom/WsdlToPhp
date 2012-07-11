<?php
/**
 * Class file for EbayTradingTypeGetMessagePreferencesRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetMessagePreferencesRequestType
 * Documentation : Returns a seller's Ask Seller a Question (ASQ) subjects, each in its own Subject node.
 * @date 04/07/2012
 */
class EbayTradingTypeGetMessagePreferencesRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SellerID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the user to retrieve ASQ subjects for. This value must be specified in the request, but does not need to be the same user as the user making the request.
	 * @var EbayTradingTypeUserIDType
	 */
	public $SellerID;
	/**
	 * The IncludeASQPreferences
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, indicates that the ASQ subjects for the specified user should be returned.
	 * @var boolean
	 */
	public $IncludeASQPreferences;
	/**
	 * Constructor
	 * @param EbayTradingTypeUserIDType SellerID
	 * @param boolean IncludeASQPreferences
	 * @return EbayTradingTypeGetMessagePreferencesRequestType
	 */
	public function __construct($_SellerID = null,$_IncludeASQPreferences = null)
	{
		EbayTradingWsdlClass::__construct(array('SellerID'=>$_SellerID,'IncludeASQPreferences'=>$_IncludeASQPreferences));
	}
	/**
	 * Set SellerID
	 * @param UserIDType SellerID
	 * @return UserIDType
	 */
	public function setSellerID($_SellerID)
	{
		return ($this->SellerID = EbayTradingTypeUserIDType::valueIsValid($_SellerID)?$_SellerID:null);
	}
	/**
	 * Get SellerID
	 * @return EbayTradingTypeUserIDType
	 */
	public function getSellerID()
	{
		return $this->SellerID;
	}
	/**
	 * Set IncludeASQPreferences
	 * @param boolean IncludeASQPreferences
	 * @return boolean
	 */
	public function setIncludeASQPreferences($_IncludeASQPreferences)
	{
		return ($this->IncludeASQPreferences = $_IncludeASQPreferences);
	}
	/**
	 * Get IncludeASQPreferences
	 * @return boolean
	 */
	public function getIncludeASQPreferences()
	{
		return $this->IncludeASQPreferences;
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