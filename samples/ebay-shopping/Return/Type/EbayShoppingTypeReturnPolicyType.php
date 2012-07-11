<?php
/**
 * Class file for EbayShoppingTypeReturnPolicyType
 * @date 05/07/2012
 */
/**
 * Class EbayShoppingTypeReturnPolicyType
 * Documentation : Type for the return policy details of an item.
 * @date 05/07/2012
 */
class EbayShoppingTypeReturnPolicyType extends EbayShoppingWsdlClass
{
	/**
	 * The Refund
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies how a refund will be made, e.g. as an exchange.
	 * @var string
	 */
	public $Refund;
	/**
	 * The ReturnsWithin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the length of time in which the item must be returned under the return policy.
	 * @var string
	 */
	public $ReturnsWithin;
	/**
	 * The ReturnsAccepted
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about returns accepted.
	 * @var string
	 */
	public $ReturnsAccepted;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A description of the return policy for the item.
	 * @var string
	 */
	public $Description;
	/**
	 * The WarrantyOffered
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Information about the warranty offered.
	 * @var string
	 */
	public $WarrantyOffered;
	/**
	 * The WarrantyType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The type of warranty offered.
	 * @var string
	 */
	public $WarrantyType;
	/**
	 * The WarrantyDuration
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The length of the warranty offered.
	 * @var string
	 */
	public $WarrantyDuration;
	/**
	 * The EAN
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the EAN.
	 * @var string
	 */
	public $EAN;
	/**
	 * The ShippingCostPaidBy
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The party who pays the cost of shipping for a returned item.
	 * @var string
	 */
	public $ShippingCostPaidBy;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Refund
	 * @param string ReturnsWithin
	 * @param string ReturnsAccepted
	 * @param string Description
	 * @param string WarrantyOffered
	 * @param string WarrantyType
	 * @param string WarrantyDuration
	 * @param string EAN
	 * @param string ShippingCostPaidBy
	 * @param DOMDocument any
	 * @return EbayShoppingTypeReturnPolicyType
	 */
	public function __construct($_Refund = null,$_ReturnsWithin = null,$_ReturnsAccepted = null,$_Description = null,$_WarrantyOffered = null,$_WarrantyType = null,$_WarrantyDuration = null,$_EAN = null,$_ShippingCostPaidBy = null,$_any = null)
	{
		parent::__construct(array('Refund'=>$_Refund,'ReturnsWithin'=>$_ReturnsWithin,'ReturnsAccepted'=>$_ReturnsAccepted,'Description'=>$_Description,'WarrantyOffered'=>$_WarrantyOffered,'WarrantyType'=>$_WarrantyType,'WarrantyDuration'=>$_WarrantyDuration,'EAN'=>$_EAN,'ShippingCostPaidBy'=>$_ShippingCostPaidBy,'any'=>$_any));
	}
	/**
	 * Set Refund
	 * @param string Refund
	 * @return string
	 */
	public function setRefund($_Refund)
	{
		return ($this->Refund = $_Refund);
	}
	/**
	 * Get Refund
	 * @return string
	 */
	public function getRefund()
	{
		return $this->Refund;
	}
	/**
	 * Set ReturnsWithin
	 * @param string ReturnsWithin
	 * @return string
	 */
	public function setReturnsWithin($_ReturnsWithin)
	{
		return ($this->ReturnsWithin = $_ReturnsWithin);
	}
	/**
	 * Get ReturnsWithin
	 * @return string
	 */
	public function getReturnsWithin()
	{
		return $this->ReturnsWithin;
	}
	/**
	 * Set ReturnsAccepted
	 * @param string ReturnsAccepted
	 * @return string
	 */
	public function setReturnsAccepted($_ReturnsAccepted)
	{
		return ($this->ReturnsAccepted = $_ReturnsAccepted);
	}
	/**
	 * Get ReturnsAccepted
	 * @return string
	 */
	public function getReturnsAccepted()
	{
		return $this->ReturnsAccepted;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set WarrantyOffered
	 * @param string WarrantyOffered
	 * @return string
	 */
	public function setWarrantyOffered($_WarrantyOffered)
	{
		return ($this->WarrantyOffered = $_WarrantyOffered);
	}
	/**
	 * Get WarrantyOffered
	 * @return string
	 */
	public function getWarrantyOffered()
	{
		return $this->WarrantyOffered;
	}
	/**
	 * Set WarrantyType
	 * @param string WarrantyType
	 * @return string
	 */
	public function setWarrantyType($_WarrantyType)
	{
		return ($this->WarrantyType = $_WarrantyType);
	}
	/**
	 * Get WarrantyType
	 * @return string
	 */
	public function getWarrantyType()
	{
		return $this->WarrantyType;
	}
	/**
	 * Set WarrantyDuration
	 * @param string WarrantyDuration
	 * @return string
	 */
	public function setWarrantyDuration($_WarrantyDuration)
	{
		return ($this->WarrantyDuration = $_WarrantyDuration);
	}
	/**
	 * Get WarrantyDuration
	 * @return string
	 */
	public function getWarrantyDuration()
	{
		return $this->WarrantyDuration;
	}
	/**
	 * Set EAN
	 * @param string EAN
	 * @return string
	 */
	public function setEAN($_EAN)
	{
		return ($this->EAN = $_EAN);
	}
	/**
	 * Get EAN
	 * @return string
	 */
	public function getEAN()
	{
		return $this->EAN;
	}
	/**
	 * Set ShippingCostPaidBy
	 * @param string ShippingCostPaidBy
	 * @return string
	 */
	public function setShippingCostPaidBy($_ShippingCostPaidBy)
	{
		return ($this->ShippingCostPaidBy = $_ShippingCostPaidBy);
	}
	/**
	 * Get ShippingCostPaidBy
	 * @return string
	 */
	public function getShippingCostPaidBy()
	{
		return $this->ShippingCostPaidBy;
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