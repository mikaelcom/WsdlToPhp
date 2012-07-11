<?php
/**
 * Class file for EbayTradingTypeSellingManagerProductType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerProductType
 * Documentation : Describes a Selling Manager Product
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerProductType extends EbayTradingWsdlClass
{
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for information about the product.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * The SellingManagerTemplateDetailsArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the list of the seller's templates contained in the product, one SellingManagerTemplateType object per template.
	 * @var EbayTradingTypeSellingManagerTemplateDetailsArrayType
	 */
	public $SellingManagerTemplateDetailsArray;
	/**
	 * The SellingManagerProductInventoryStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Container for statistics about the product.
	 * @var EbayTradingTypeSellingManagerProductInventoryStatusType
	 */
	public $SellingManagerProductInventoryStatus;
	/**
	 * The SellingManagerProductSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create mult-variation listings).
	 * @var EbayTradingTypeSellingManagerProductSpecificsType
	 */
	public $SellingManagerProductSpecifics;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerProductDetailsType SellingManagerProductDetails
	 * @param EbayTradingTypeSellingManagerTemplateDetailsArrayType SellingManagerTemplateDetailsArray
	 * @param EbayTradingTypeSellingManagerProductInventoryStatusType SellingManagerProductInventoryStatus
	 * @param EbayTradingTypeSellingManagerProductSpecificsType SellingManagerProductSpecifics
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerProductType
	 */
	public function __construct($_SellingManagerProductDetails = null,$_SellingManagerTemplateDetailsArray = null,$_SellingManagerProductInventoryStatus = null,$_SellingManagerProductSpecifics = null,$_any = null)
	{
		parent::__construct(array('SellingManagerProductDetails'=>$_SellingManagerProductDetails,'SellingManagerTemplateDetailsArray'=>$_SellingManagerTemplateDetailsArray,'SellingManagerProductInventoryStatus'=>$_SellingManagerProductInventoryStatus,'SellingManagerProductSpecifics'=>$_SellingManagerProductSpecifics,'any'=>$_any));
	}
	/**
	 * Set SellingManagerProductDetails
	 * @param SellingManagerProductDetailsType SellingManagerProductDetails
	 * @return SellingManagerProductDetailsType
	 */
	public function setSellingManagerProductDetails($_SellingManagerProductDetails)
	{
		return ($this->SellingManagerProductDetails = $_SellingManagerProductDetails);
	}
	/**
	 * Get SellingManagerProductDetails
	 * @return EbayTradingTypeSellingManagerProductDetailsType
	 */
	public function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * Set SellingManagerTemplateDetailsArray
	 * @param SellingManagerTemplateDetailsArrayType SellingManagerTemplateDetailsArray
	 * @return SellingManagerTemplateDetailsArrayType
	 */
	public function setSellingManagerTemplateDetailsArray($_SellingManagerTemplateDetailsArray)
	{
		return ($this->SellingManagerTemplateDetailsArray = $_SellingManagerTemplateDetailsArray);
	}
	/**
	 * Get SellingManagerTemplateDetailsArray
	 * @return EbayTradingTypeSellingManagerTemplateDetailsArrayType
	 */
	public function getSellingManagerTemplateDetailsArray()
	{
		return $this->SellingManagerTemplateDetailsArray;
	}
	/**
	 * Set SellingManagerProductInventoryStatus
	 * @param SellingManagerProductInventoryStatusType SellingManagerProductInventoryStatus
	 * @return SellingManagerProductInventoryStatusType
	 */
	public function setSellingManagerProductInventoryStatus($_SellingManagerProductInventoryStatus)
	{
		return ($this->SellingManagerProductInventoryStatus = $_SellingManagerProductInventoryStatus);
	}
	/**
	 * Get SellingManagerProductInventoryStatus
	 * @return EbayTradingTypeSellingManagerProductInventoryStatusType
	 */
	public function getSellingManagerProductInventoryStatus()
	{
		return $this->SellingManagerProductInventoryStatus;
	}
	/**
	 * Set SellingManagerProductSpecifics
	 * @param SellingManagerProductSpecificsType SellingManagerProductSpecifics
	 * @return SellingManagerProductSpecificsType
	 */
	public function setSellingManagerProductSpecifics($_SellingManagerProductSpecifics)
	{
		return ($this->SellingManagerProductSpecifics = $_SellingManagerProductSpecifics);
	}
	/**
	 * Get SellingManagerProductSpecifics
	 * @return EbayTradingTypeSellingManagerProductSpecificsType
	 */
	public function getSellingManagerProductSpecifics()
	{
		return $this->SellingManagerProductSpecifics;
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