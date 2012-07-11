<?php
/**
 * Class file for EbayTradingTypeReturnPolicyDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReturnPolicyDetailsType
 * Documentation : Type for the return policy details of an item.
 * @date 04/07/2012
 */
class EbayTradingTypeReturnPolicyDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The Refund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : How the seller will compensate the buyer for a returned item (such as money back or exchange).
	 * @var EbayTradingTypeRefundDetailsType
	 */
	public $Refund;
	/**
	 * The ReturnsWithin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Time period within which the buyer can return the item, starting from the day they receive the item.
	 * @var EbayTradingTypeReturnsWithinDetailsType
	 */
	public $ReturnsWithin;
	/**
	 * The ReturnsAccepted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Whether the seller allows the buyer to return the item.
	 * @var EbayTradingTypeReturnsAcceptedDetailsType
	 */
	public $ReturnsAccepted;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the site supports a text description of the seller's return policy.
	 * @var boolean
	 */
	public $Description;
	/**
	 * The WarrantyOffered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Whether the item includes a warranty.
	 * @var EbayTradingTypeWarrantyOfferedDetailsType
	 */
	public $WarrantyOffered;
	/**
	 * The WarrantyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The type of warranty offered.
	 * @var EbayTradingTypeWarrantyTypeDetailsType
	 */
	public $WarrantyType;
	/**
	 * The WarrantyDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The length of the warranty offered.
	 * @var EbayTradingTypeWarrantyDurationDetailsType
	 */
	public $WarrantyDuration;
	/**
	 * The EAN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : If true, the site supports specifying a European Article Number (EAN) with the return policy.
	 * @var boolean
	 */
	public $EAN;
	/**
	 * The ShippingCostPaidBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The party who pays the shipping cost for a returned item.
	 * @var EbayTradingTypeShippingCostPaidByDetailsType
	 */
	public $ShippingCostPaidBy;
	/**
	 * The DetailVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
	 * @var string
	 */
	public $DetailVersion;
	/**
	 * The UpdateTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
	 * @var dateTime
	 */
	public $UpdateTime;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeRefundDetailsType Refund
	 * @param EbayTradingTypeReturnsWithinDetailsType ReturnsWithin
	 * @param EbayTradingTypeReturnsAcceptedDetailsType ReturnsAccepted
	 * @param boolean Description
	 * @param EbayTradingTypeWarrantyOfferedDetailsType WarrantyOffered
	 * @param EbayTradingTypeWarrantyTypeDetailsType WarrantyType
	 * @param EbayTradingTypeWarrantyDurationDetailsType WarrantyDuration
	 * @param boolean EAN
	 * @param EbayTradingTypeShippingCostPaidByDetailsType ShippingCostPaidBy
	 * @param string DetailVersion
	 * @param dateTime UpdateTime
	 * @param DOMDocument any
	 * @return EbayTradingTypeReturnPolicyDetailsType
	 */
	public function __construct($_Refund = null,$_ReturnsWithin = null,$_ReturnsAccepted = null,$_Description = null,$_WarrantyOffered = null,$_WarrantyType = null,$_WarrantyDuration = null,$_EAN = null,$_ShippingCostPaidBy = null,$_DetailVersion = null,$_UpdateTime = null,$_any = null)
	{
		parent::__construct(array('Refund'=>$_Refund,'ReturnsWithin'=>$_ReturnsWithin,'ReturnsAccepted'=>$_ReturnsAccepted,'Description'=>$_Description,'WarrantyOffered'=>$_WarrantyOffered,'WarrantyType'=>$_WarrantyType,'WarrantyDuration'=>$_WarrantyDuration,'EAN'=>$_EAN,'ShippingCostPaidBy'=>$_ShippingCostPaidBy,'DetailVersion'=>$_DetailVersion,'UpdateTime'=>$_UpdateTime,'any'=>$_any));
	}
	/**
	 * Set Refund
	 * @param RefundDetailsType Refund
	 * @return RefundDetailsType
	 */
	public function setRefund($_Refund)
	{
		return ($this->Refund = $_Refund);
	}
	/**
	 * Get Refund
	 * @return EbayTradingTypeRefundDetailsType
	 */
	public function getRefund()
	{
		return $this->Refund;
	}
	/**
	 * Set ReturnsWithin
	 * @param ReturnsWithinDetailsType ReturnsWithin
	 * @return ReturnsWithinDetailsType
	 */
	public function setReturnsWithin($_ReturnsWithin)
	{
		return ($this->ReturnsWithin = $_ReturnsWithin);
	}
	/**
	 * Get ReturnsWithin
	 * @return EbayTradingTypeReturnsWithinDetailsType
	 */
	public function getReturnsWithin()
	{
		return $this->ReturnsWithin;
	}
	/**
	 * Set ReturnsAccepted
	 * @param ReturnsAcceptedDetailsType ReturnsAccepted
	 * @return ReturnsAcceptedDetailsType
	 */
	public function setReturnsAccepted($_ReturnsAccepted)
	{
		return ($this->ReturnsAccepted = $_ReturnsAccepted);
	}
	/**
	 * Get ReturnsAccepted
	 * @return EbayTradingTypeReturnsAcceptedDetailsType
	 */
	public function getReturnsAccepted()
	{
		return $this->ReturnsAccepted;
	}
	/**
	 * Set Description
	 * @param boolean Description
	 * @return boolean
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return boolean
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set WarrantyOffered
	 * @param WarrantyOfferedDetailsType WarrantyOffered
	 * @return WarrantyOfferedDetailsType
	 */
	public function setWarrantyOffered($_WarrantyOffered)
	{
		return ($this->WarrantyOffered = $_WarrantyOffered);
	}
	/**
	 * Get WarrantyOffered
	 * @return EbayTradingTypeWarrantyOfferedDetailsType
	 */
	public function getWarrantyOffered()
	{
		return $this->WarrantyOffered;
	}
	/**
	 * Set WarrantyType
	 * @param WarrantyTypeDetailsType WarrantyType
	 * @return WarrantyTypeDetailsType
	 */
	public function setWarrantyType($_WarrantyType)
	{
		return ($this->WarrantyType = $_WarrantyType);
	}
	/**
	 * Get WarrantyType
	 * @return EbayTradingTypeWarrantyTypeDetailsType
	 */
	public function getWarrantyType()
	{
		return $this->WarrantyType;
	}
	/**
	 * Set WarrantyDuration
	 * @param WarrantyDurationDetailsType WarrantyDuration
	 * @return WarrantyDurationDetailsType
	 */
	public function setWarrantyDuration($_WarrantyDuration)
	{
		return ($this->WarrantyDuration = $_WarrantyDuration);
	}
	/**
	 * Get WarrantyDuration
	 * @return EbayTradingTypeWarrantyDurationDetailsType
	 */
	public function getWarrantyDuration()
	{
		return $this->WarrantyDuration;
	}
	/**
	 * Set EAN
	 * @param boolean EAN
	 * @return boolean
	 */
	public function setEAN($_EAN)
	{
		return ($this->EAN = $_EAN);
	}
	/**
	 * Get EAN
	 * @return boolean
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set ShippingCostPaidBy
	 * @param ShippingCostPaidByDetailsType ShippingCostPaidBy
	 * @return ShippingCostPaidByDetailsType
	 */
	public function setShippingCostPaidBy($_ShippingCostPaidBy)
	{
		return ($this->ShippingCostPaidBy = $_ShippingCostPaidBy);
	}
	/**
	 * Get ShippingCostPaidBy
	 * @return EbayTradingTypeShippingCostPaidByDetailsType
	 */
	public function getShippingCostPaidBy()
	{
		return $this->ShippingCostPaidBy;
	}
	/**
	 * Set DetailVersion
	 * @param string DetailVersion
	 * @return string
	 */
	public function setDetailVersion($_DetailVersion)
	{
		return ($this->DetailVersion = $_DetailVersion);
	}
	/**
	 * Get DetailVersion
	 * @return string
	 */
	public function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * Set UpdateTime
	 * @param dateTime UpdateTime
	 * @return dateTime
	 */
	public function setUpdateTime($_UpdateTime)
	{
		return ($this->UpdateTime = $_UpdateTime);
	}
	/**
	 * Get UpdateTime
	 * @return dateTime
	 */
	public function getUpdateTime()
	{
		return $this->UpdateTime;
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