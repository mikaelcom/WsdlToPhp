<?php
/**
 * Class file for EbayTradingTypeSellerDiscountType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerDiscountType
 * Documentation : Type that defines the <b>SellerDiscount</b> container, which contains the ID, name, and amount of the seller discount.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerDiscountType extends EbayTradingWsdlClass
{
	/**
	 * The CampaignID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for a seller discount campaign. This ID is automatically created when the seller creates the discount campaign. This field is always returned with the <b>SellerDiscount</b> container.
	 * @var long
	 */
	public $CampaignID;
	/**
	 * The CampaignDisplayName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the seller discount campaign. This name is created by the seller. The name for a discount campaign is optional, so this field will only be returned with the <b>SellerDiscount</b> container if defined for the discount campaign.
	 * @var string
	 */
	public $CampaignDisplayName;
	/**
	 * The ItemDiscountAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The dollar amount of the order line item discount. The original purchase price (denoted in <b>OriginalItemPrice</b>) will be reduced by this value.
	 * @var EbayTradingTypeAmountType
	 */
	public $ItemDiscountAmount;
	/**
	 * The ShippingDiscountAmount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The dollar amount of the shipping discount applied to the order line item. Note that shipping discounts have not yet been enabled for seller discount campaigns, so this field will not be returned until shipping discounts are enabled.
	 * @var EbayTradingTypeAmountType
	 */
	public $ShippingDiscountAmount;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param long CampaignID
	 * @param string CampaignDisplayName
	 * @param EbayTradingTypeAmountType ItemDiscountAmount
	 * @param EbayTradingTypeAmountType ShippingDiscountAmount
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellerDiscountType
	 */
	public function __construct($_CampaignID = null,$_CampaignDisplayName = null,$_ItemDiscountAmount = null,$_ShippingDiscountAmount = null,$_any = null)
	{
		parent::__construct(array('CampaignID'=>$_CampaignID,'CampaignDisplayName'=>$_CampaignDisplayName,'ItemDiscountAmount'=>$_ItemDiscountAmount,'ShippingDiscountAmount'=>$_ShippingDiscountAmount,'any'=>$_any));
	}
	/**
	 * Set CampaignID
	 * @param long CampaignID
	 * @return long
	 */
	public function setCampaignID($_CampaignID)
	{
		return ($this->CampaignID = $_CampaignID);
	}
	/**
	 * Get CampaignID
	 * @return long
	 */
	public function getCampaignID()
	{
		return $this->CampaignID;
	}
	/**
	 * Set CampaignDisplayName
	 * @param string CampaignDisplayName
	 * @return string
	 */
	public function setCampaignDisplayName($_CampaignDisplayName)
	{
		return ($this->CampaignDisplayName = $_CampaignDisplayName);
	}
	/**
	 * Get CampaignDisplayName
	 * @return string
	 */
	public function getCampaignDisplayName()
	{
		return $this->CampaignDisplayName;
	}
	/**
	 * Set ItemDiscountAmount
	 * @param AmountType ItemDiscountAmount
	 * @return AmountType
	 */
	public function setItemDiscountAmount($_ItemDiscountAmount)
	{
		return ($this->ItemDiscountAmount = $_ItemDiscountAmount);
	}
	/**
	 * Get ItemDiscountAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getItemDiscountAmount()
	{
		return $this->ItemDiscountAmount;
	}
	/**
	 * Set ShippingDiscountAmount
	 * @param AmountType ShippingDiscountAmount
	 * @return AmountType
	 */
	public function setShippingDiscountAmount($_ShippingDiscountAmount)
	{
		return ($this->ShippingDiscountAmount = $_ShippingDiscountAmount);
	}
	/**
	 * Get ShippingDiscountAmount
	 * @return EbayTradingTypeAmountType
	 */
	public function getShippingDiscountAmount()
	{
		return $this->ShippingDiscountAmount;
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