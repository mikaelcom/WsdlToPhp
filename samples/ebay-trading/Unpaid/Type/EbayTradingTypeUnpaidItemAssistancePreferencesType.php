<?php
/**
 * Class file for EbayTradingTypeUnpaidItemAssistancePreferencesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeUnpaidItemAssistancePreferencesType
 * Documentation : This type defines the <b>UnpaidItemAssistancePreferences</b> container. This container is used in <b>SetUserPreferences</b> to set the preferences related to the <b>Unpaid Item Assistant</b> feature. The <b>UnpaidItemAssistancePreferences</b> container is also returned in <b>GetUserPreferences</b> (if the <b>ShowUnpaidItemAssistancePreference</b> flag is included and set to true in the request).
 * @date 04/07/2012
 */
class EbayTradingTypeUnpaidItemAssistancePreferencesType extends EbayTradingWsdlClass
{
	/**
	 * The DelayBeforeOpeningDispute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This value indicates the number of days that should elapse before the Unpaid Item Assistant mechanism opens an Unpaid Item case on behalf of the seller. Valid values for this field are: 4, 8, 16, 24, and 32 (days). This field is ignored if the <b>OptInStatus</b> flag is included and set to false in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
	 * @var int
	 */
	public $DelayBeforeOpeningDispute;
	/**
	 * The OptInStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Flag to indicate whether or not the Unpaid Item Assistant mechanism is turned on for the seller. Through the Unpaid Item Assistant mechanism, eBay can automatically file Unpaid Item cases on behalf of the seller. The Unpaid Item Assistant feature also has options to automatically relist disputed items, to automatically request a Giving Works donation refund (for Charity listings only), or to create an 'Exclusion list' of buyers who are not subject to the automatic filing of an Unpaid Item case.
	 * @var boolean
	 */
	public $OptInStatus;
	/**
	 * The AutoRelist
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- default : false
	 * 	- documentation : Flag to indicate whether or not the seller wants eBay to automatically relist items after corresponding Unpaid Item cases are opened and closed through the Unpaid Item Assistant mechanism without payment. For a multi-quantity listing, the quantity is adjusted if <b>AutoRelist</b> is set to true. This field is ignored if the <b>OptInStatus</b> flag is included and set to false in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
	 * @var boolean
	 */
	public $AutoRelist;
	/**
	 * The RemoveAllExcludedUsers
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- default : false
	 * 	- documentation : This field should be included and set to true if the seller wants to clear all users from the Unpaid Item Assistant Exclusion list. The Exclusion list can be viewed from the Unpaid Item Assistant Preferences in My eBay. Excluded users are not subject to the automatic filing of Unpaid Item cases. The seller can still open Unpaid Item cases against excluded users, but these cases must be opened manually. <br/><br/> Users can be added to Exclusion list through the <b>ExcludedUser</b> field. The <b>RemoveAllExcludedUsers</b> field is ignored if the <b>OptInStatus</b> flag is included and set to false in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
	 * @var boolean
	 */
	public $RemoveAllExcludedUsers;
	/**
	 * The ExcludedUser
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This field is typically used by a seller who would prefer to file an Unpaid Item dispute manually for the specified user. <br/><br/> One or more <b>ExcludedUser</b> fields are used in <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion list. Any and all <b>ExcludedUser</b> fields are ignored if the <b>OptInStatus</b> flag is included and set to false in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay. <br/><br/> In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields represent the current Excluded user list.
	 * @var string
	 */
	public $ExcludedUser;
	/**
	 * The AutoOptDonationRefund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Flag to indicate whether or not the seller wants eBay to automatically request eBay Giving Works donation refunds after Unpaid Item cases are opened and closed through the Unpaid Item Assistant mechanism without payment. This setting is only applicable to eBay Charity listings. This field is ignored if the <b>OptInStatus</b> flag is included and set to false in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
	 * @var boolean
	 */
	public $AutoOptDonationRefund;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int DelayBeforeOpeningDispute
	 * @param boolean OptInStatus
	 * @param boolean AutoRelist
	 * @param boolean RemoveAllExcludedUsers
	 * @param string ExcludedUser
	 * @param boolean AutoOptDonationRefund
	 * @param DOMDocument any
	 * @return EbayTradingTypeUnpaidItemAssistancePreferencesType
	 */
	public function __construct($_DelayBeforeOpeningDispute = null,$_OptInStatus = null,$_AutoRelist = false,$_RemoveAllExcludedUsers = false,$_ExcludedUser = null,$_AutoOptDonationRefund = null,$_any = null)
	{
		parent::__construct(array('DelayBeforeOpeningDispute'=>$_DelayBeforeOpeningDispute,'OptInStatus'=>$_OptInStatus,'AutoRelist'=>$_AutoRelist,'RemoveAllExcludedUsers'=>$_RemoveAllExcludedUsers,'ExcludedUser'=>$_ExcludedUser,'AutoOptDonationRefund'=>$_AutoOptDonationRefund,'any'=>$_any));
	}
	/**
	 * Set DelayBeforeOpeningDispute
	 * @param int DelayBeforeOpeningDispute
	 * @return int
	 */
	public function setDelayBeforeOpeningDispute($_DelayBeforeOpeningDispute)
	{
		return ($this->DelayBeforeOpeningDispute = $_DelayBeforeOpeningDispute);
	}
	/**
	 * Get DelayBeforeOpeningDispute
	 * @return int
	 */
	public function getDelayBeforeOpeningDispute()
	{
		return $this->DelayBeforeOpeningDispute;
	}
	/**
	 * Set OptInStatus
	 * @param boolean OptInStatus
	 * @return boolean
	 */
	public function setOptInStatus($_OptInStatus)
	{
		return ($this->OptInStatus = $_OptInStatus);
	}
	/**
	 * Get OptInStatus
	 * @return boolean
	 */
	public function getOptInStatus()
	{
		return $this->OptInStatus;
	}
	/**
	 * Set AutoRelist
	 * @param boolean AutoRelist
	 * @return boolean
	 */
	public function setAutoRelist($_AutoRelist)
	{
		return ($this->AutoRelist = $_AutoRelist);
	}
	/**
	 * Get AutoRelist
	 * @return boolean
	 */
	public function getAutoRelist()
	{
		return $this->AutoRelist;
	}
	/**
	 * Set RemoveAllExcludedUsers
	 * @param boolean RemoveAllExcludedUsers
	 * @return boolean
	 */
	public function setRemoveAllExcludedUsers($_RemoveAllExcludedUsers)
	{
		return ($this->RemoveAllExcludedUsers = $_RemoveAllExcludedUsers);
	}
	/**
	 * Get RemoveAllExcludedUsers
	 * @return boolean
	 */
	public function getRemoveAllExcludedUsers()
	{
		return $this->RemoveAllExcludedUsers;
	}
	/**
	 * Set ExcludedUser
	 * @param string ExcludedUser
	 * @return string
	 */
	public function setExcludedUser($_ExcludedUser)
	{
		return ($this->ExcludedUser = $_ExcludedUser);
	}
	/**
	 * Get ExcludedUser
	 * @return string
	 */
	public function getExcludedUser()
	{
		return $this->ExcludedUser;
	}
	/**
	 * Set AutoOptDonationRefund
	 * @param boolean AutoOptDonationRefund
	 * @return boolean
	 */
	public function setAutoOptDonationRefund($_AutoOptDonationRefund)
	{
		return ($this->AutoOptDonationRefund = $_AutoOptDonationRefund);
	}
	/**
	 * Get AutoOptDonationRefund
	 * @return boolean
	 */
	public function getAutoOptDonationRefund()
	{
		return $this->AutoOptDonationRefund;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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