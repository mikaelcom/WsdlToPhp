<?php
/**
 * Class file for PayPalTypeBMGetInventoryResponseType
 * @date 14/07/2012
 */
/**
 * Class PayPalTypeBMGetInventoryResponseType
 * @date 14/07/2012
 */
class PayPalTypeBMGetInventoryResponseType extends PayPalTypeAbstractResponseType
{
	/**
	 * The HostedButtonID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HostedButtonID;
	/**
	 * The TrackInv
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TrackInv;
	/**
	 * The TrackPnl
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
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
	 * @var string
	 */
	public $OptionIndex;
	/**
	 * The OptionName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $OptionName;
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
	 * @var string
	 */
	public $SoldoutURL;
	/**
	 * The DigitalDownloadKeys
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1000
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
	 * @param string OptionName
	 * @param PayPalTypeOptionTrackingDetailsType OptionTrackingDetails
	 * @param string SoldoutURL
	 * @param string DigitalDownloadKeys
	 * @return PayPalTypeBMGetInventoryResponseType
	 */
	public function __construct($_HostedButtonID,$_TrackInv,$_TrackPnl,$_ItemTrackingDetails = null,$_OptionIndex = null,$_OptionName = null,$_OptionTrackingDetails = null,$_SoldoutURL = null,$_DigitalDownloadKeys = null)
	{
		PayPalWsdlClass::__construct(array('HostedButtonID'=>$_HostedButtonID,'TrackInv'=>$_TrackInv,'TrackPnl'=>$_TrackPnl,'ItemTrackingDetails'=>$_ItemTrackingDetails,'OptionIndex'=>$_OptionIndex,'OptionName'=>$_OptionName,'OptionTrackingDetails'=>$_OptionTrackingDetails,'SoldoutURL'=>$_SoldoutURL,'DigitalDownloadKeys'=>$_DigitalDownloadKeys));
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
	 * Set OptionName
	 * @param string OptionName
	 * @return string
	 */
	public function setOptionName($_OptionName)
	{
		return ($this->OptionName = $_OptionName);
	}
	/**
	 * Get OptionName
	 * @return string
	 */
	public function getOptionName()
	{
		return $this->OptionName;
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