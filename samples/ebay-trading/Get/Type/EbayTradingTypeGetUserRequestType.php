<?php
/**
 * Class file for EbayTradingTypeGetUserRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetUserRequestType
 * Documentation : Retrieves data pertaining to a single eBay user. Callers can use this call to return their own user data or the data of another eBay user. Unless the caller passes in an ItemID that identifies a current or past common order, not all data (like email addresses) will be returned in the User object.
 * @date 04/07/2012
 */
class EbayTradingTypeGetUserRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify the item ID for a successfully concluded listing in which the requestor and target user were participants (one as seller and the other as buyer). Necessary to return certain data (like an email address). Not necessary if the requestor is retrieving their own data. ItemID is an optional input.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The UserID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specify the user whose data you want returned by the call. UserID is optional. If not specified, eBay returns data pertaining to the requesting user (as specified with the eBayAuthToken).
	 * @var string
	 */
	public $UserID;
	/**
	 * The IncludeExpressRequirements
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates if the response should include detailed information relating to whether a user qualifies to list an item on Express. To list an item on Express, a user must qualify based on conditions described in the eBay Web Services Guide.
	 * @var boolean
	 */
	public $IncludeExpressRequirements;
	/**
	 * The IncludeFeatureEligibility
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If IncludeFeatureEligibility is true, the response includes a FeatureEligibility node. (The FeatureEligibility node indicates whether the seller can list with certain features.)
	 * @var boolean
	 */
	public $IncludeFeatureEligibility;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string UserID
	 * @param boolean IncludeExpressRequirements
	 * @param boolean IncludeFeatureEligibility
	 * @return EbayTradingTypeGetUserRequestType
	 */
	public function __construct($_ItemID = null,$_UserID = null,$_IncludeExpressRequirements = null,$_IncludeFeatureEligibility = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'UserID'=>$_UserID,'IncludeExpressRequirements'=>$_IncludeExpressRequirements,'IncludeFeatureEligibility'=>$_IncludeFeatureEligibility));
	}
	/**
	 * Set ItemID
	 * @param ItemIDType ItemID
	 * @return ItemIDType
	 */
	public function setItemID($_ItemID)
	{
		return ($this->ItemID = EbayTradingTypeItemIDType::valueIsValid($_ItemID)?$_ItemID:null);
	}
	/**
	 * Get ItemID
	 * @return EbayTradingTypeItemIDType
	 */
	public function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * Set UserID
	 * @param string UserID
	 * @return string
	 */
	public function setUserID($_UserID)
	{
		return ($this->UserID = $_UserID);
	}
	/**
	 * Get UserID
	 * @return string
	 */
	public function getUserID()
	{
		return $this->UserID;
	}
	/**
	 * Set IncludeExpressRequirements
	 * @param boolean IncludeExpressRequirements
	 * @return boolean
	 */
	public function setIncludeExpressRequirements($_IncludeExpressRequirements)
	{
		return ($this->IncludeExpressRequirements = $_IncludeExpressRequirements);
	}
	/**
	 * Get IncludeExpressRequirements
	 * @return boolean
	 */
	public function getIncludeExpressRequirements()
	{
		return $this->IncludeExpressRequirements;
	}
	/**
	 * Set IncludeFeatureEligibility
	 * @param boolean IncludeFeatureEligibility
	 * @return boolean
	 */
	public function setIncludeFeatureEligibility($_IncludeFeatureEligibility)
	{
		return ($this->IncludeFeatureEligibility = $_IncludeFeatureEligibility);
	}
	/**
	 * Get IncludeFeatureEligibility
	 * @return boolean
	 */
	public function getIncludeFeatureEligibility()
	{
		return $this->IncludeFeatureEligibility;
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