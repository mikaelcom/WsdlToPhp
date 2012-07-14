<?php
/**
 * Class file for PayPalTypeBMSetInventoryRequestType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMSetInventoryRequestType
 * @date 14/07/2012
 */
class PayPalTypeBMSetInventoryRequestType extends PayPalTypeAbstractRequestType
{
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Hosted Button ID of button you wish to change. Required Character length and limitations: 10 single-byte numeric characters
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The TrackInv
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Is Inventory tracked. Required 0 or 1
	 * @var string
	 */
	public $TrackInv;
	/**
	 * The TrackPnl
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- documentation : Is PNL Tracked. Required 0 or 1
	 * @var string
	 */
	public $TrackPnl;
	/**
	 * The ItemTrackingDetails
	 * @var PayPalTypeItemTrackingDetailsType
	 */
	public $ItemTrackingDetails;
	/**
	 * The OptionIndex
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Option Index. Optional Character length and limitations: 1 single-byte alphanumeric characters
	 * @var string
	 */
	public $OptionIndex;
	/**
	 * The OptionTrackingDetails
	 * @var PayPalTypeOptionTrackingDetailsType
	 */
	public $OptionTrackingDetails;
	/**
	 * The SoldoutURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : URL of page to display when an item is soldout. Optional Character length and limitations: 127 single-byte alphanumeric characters
	 * @var string
	 */
	public $SoldoutURL;
	/**
	 * The ReuseDigitalDownloadKeys
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Whether to use the same digital download key repeatedly. Optional
	 * @var string
	 */
	public $ReuseDigitalDownloadKeys;
	/**
	 * The AppendDigitalDownloadKeys
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- documentation : Whether to append these keys to the list or not (replace). Optional
	 * @var string
	 */
	public $AppendDigitalDownloadKeys;
	/**
	 * The DigitalDownloadKeys
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1000
	 * 	- documentation : Zero or more digital download keys to distribute to customers after transaction is completed. Optional Character length and limitations: 1000 single-byte alphanumeric characters
	 * @var string
	 */
	public $DigitalDownloadKeys;
	/**
	 * Constructor
	 * @param string HostedButtonID
	 * @param string TrackInv
	 * @param string TrackPnl
	 * @param PayPalTypeItemTrackingDetailsType ItemTrackingDetails
	 * @param string OptionIndex
	 * @param PayPalTypeOptionTrackingDetailsType OptionTrackingDetails
	 * @param string SoldoutURL
	 * @param string ReuseDigitalDownloadKeys
	 * @param string AppendDigitalDownloadKeys
	 * @param string DigitalDownloadKeys
	 * @return PayPalTypeBMSetInventoryRequestType
	 */
	public function __construct($_HostedButtonID,$_TrackInv,$_TrackPnl,$_ItemTrackingDetails = null,$_OptionIndex = null,$_OptionTrackingDetails = null,$_SoldoutURL = null,$_ReuseDigitalDownloadKeys = null,$_AppendDigitalDownloadKeys = null,$_DigitalDownloadKeys = null)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_HostedButtonID,'TrackInv'=>$_TrackInv,'TrackPnl'=>$_TrackPnl,'ItemTrackingDetails'=>$_ItemTrackingDetails,'OptionIndex'=>$_OptionIndex,'OptionTrackingDetails'=>$_OptionTrackingDetails,'SoldoutURL'=>$_SoldoutURL,'ReuseDigitalDownloadKeys'=>$_ReuseDigitalDownloadKeys,'AppendDigitalDownloadKeys'=>$_AppendDigitalDownloadKeys,'DigitalDownloadKeys'=>$_DigitalDownloadKeys));
	}
	/**
	 * Set HostedButtonID
	 * @param string HostedButtonID
	 * @return string
	 */
	public function setHostedButtonID($_HostedButtonID)
	{
		return ($this->HostedButtonID = $_HostedButtonID);
	}
	/**
	 * Get HostedButtonID
	 * @return string
	 */
	public function getHostedButtonID()
	{
		return $this->HostedButtonID;
	}
	/**
	 * Set TrackInv
	 * @param string TrackInv
	 * @return string
	 */
	public function setTrackInv($_TrackInv)
	{
		return ($this->TrackInv = $_TrackInv);
	}
	/**
	 * Get TrackInv
	 * @return string
	 */
	public function getTrackInv()
	{
		return $this->TrackInv;
	}
	/**
	 * Set TrackPnl
	 * @param string TrackPnl
	 * @return string
	 */
	public function setTrackPnl($_TrackPnl)
	{
		return ($this->TrackPnl = $_TrackPnl);
	}
	/**
	 * Get TrackPnl
	 * @return string
	 */
	public function getTrackPnl()
	{
		return $this->TrackPnl;
	}
	/**
	 * Set ItemTrackingDetails
	 * @param ItemTrackingDetailsType ItemTrackingDetails
	 * @return ItemTrackingDetailsType
	 */
	public function setItemTrackingDetails($_ItemTrackingDetails)
	{
		return ($this->ItemTrackingDetails = $_ItemTrackingDetails);
	}
	/**
	 * Get ItemTrackingDetails
	 * @return PayPalTypeItemTrackingDetailsType
	 */
	public function getItemTrackingDetails()
	{
		return $this->ItemTrackingDetails;
	}
	/**
	 * Set OptionIndex
	 * @param string OptionIndex
	 * @return string
	 */
	public function setOptionIndex($_OptionIndex)
	{
		return ($this->OptionIndex = $_OptionIndex);
	}
	/**
	 * Get OptionIndex
	 * @return string
	 */
	public function getOptionIndex()
	{
		return $this->OptionIndex;
	}
	/**
	 * Set OptionTrackingDetails
	 * @param OptionTrackingDetailsType OptionTrackingDetails
	 * @return OptionTrackingDetailsType
	 */
	public function setOptionTrackingDetails($_OptionTrackingDetails)
	{
		return ($this->OptionTrackingDetails = $_OptionTrackingDetails);
	}
	/**
	 * Get OptionTrackingDetails
	 * @return PayPalTypeOptionTrackingDetailsType
	 */
	public function getOptionTrackingDetails()
	{
		return $this->OptionTrackingDetails;
	}
	/**
	 * Set SoldoutURL
	 * @param string SoldoutURL
	 * @return string
	 */
	public function setSoldoutURL($_SoldoutURL)
	{
		return ($this->SoldoutURL = $_SoldoutURL);
	}
	/**
	 * Get SoldoutURL
	 * @return string
	 */
	public function getSoldoutURL()
	{
		return $this->SoldoutURL;
	}
	/**
	 * Set ReuseDigitalDownloadKeys
	 * @param string ReuseDigitalDownloadKeys
	 * @return string
	 */
	public function setReuseDigitalDownloadKeys($_ReuseDigitalDownloadKeys)
	{
		return ($this->ReuseDigitalDownloadKeys = $_ReuseDigitalDownloadKeys);
	}
	/**
	 * Get ReuseDigitalDownloadKeys
	 * @return string
	 */
	public function getReuseDigitalDownloadKeys()
	{
		return $this->ReuseDigitalDownloadKeys;
	}
	/**
	 * Set AppendDigitalDownloadKeys
	 * @param string AppendDigitalDownloadKeys
	 * @return string
	 */
	public function setAppendDigitalDownloadKeys($_AppendDigitalDownloadKeys)
	{
		return ($this->AppendDigitalDownloadKeys = $_AppendDigitalDownloadKeys);
	}
	/**
	 * Get AppendDigitalDownloadKeys
	 * @return string
	 */
	public function getAppendDigitalDownloadKeys()
	{
		return $this->AppendDigitalDownloadKeys;
	}
	/**
	 * Set DigitalDownloadKeys
	 * @param string DigitalDownloadKeys
	 * @return string
	 */
	public function setDigitalDownloadKeys($_DigitalDownloadKeys)
	{
		return ($this->DigitalDownloadKeys = $_DigitalDownloadKeys);
	}
	/**
	 * Get DigitalDownloadKeys
	 * @return string
	 */
	public function getDigitalDownloadKeys()
	{
		return $this->DigitalDownloadKeys;
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