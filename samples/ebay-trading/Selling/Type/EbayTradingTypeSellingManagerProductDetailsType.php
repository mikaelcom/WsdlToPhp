<?php
/**
 * Class file for EbayTradingTypeSellingManagerProductDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerProductDetailsType
 * Documentation : Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerProductDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The ProductName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of a Selling Manager product. The AddSellingManagerProduct call is used to create a Selling Manager product.
	 * @var string
	 */
	public $ProductName;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of a Selling Manager product. When you call AddSellingManagerProduct, a product ID is returned for the product created. When you use this ID to make subsequent calls, such as AddSellingManagerTemplate, the ProductID you provide on input is returned in the output.
	 * @var long
	 */
	public $ProductID;
	/**
	 * The CustomLabel
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Custom label of this product.
	 * @var string
	 */
	public $CustomLabel;
	/**
	 * The QuantityAvailable
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Quantity of items in the seller's inventory for this product.
	 * @var int
	 */
	public $QuantityAvailable;
	/**
	 * The UnitCost
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Cost of each item of this product.
	 * @var EbayTradingTypeAmountType
	 */
	public $UnitCost;
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the inventory folder that contains the product. Value is initially returned in the AddSellingManagerInventoryFolder response.
	 * @var long
	 */
	public $FolderID;
	/**
	 * The RestockAlert
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies whether a restock alert is triggered for the product or not.
	 * @var boolean
	 */
	public $RestockAlert;
	/**
	 * The RestockThreshold
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies the quantity at which a restock alert should be triggered.
	 * @var int
	 */
	public $RestockThreshold;
	/**
	 * The VendorInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Primary vendor information. Vendor information is returned only if it has been set.
	 * @var EbayTradingTypeSellingManagerVendorDetailsType
	 */
	public $VendorInfo;
	/**
	 * The Note
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Seller's note about this product.
	 * @var string
	 */
	public $Note;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ProductName
	 * @param long ProductID
	 * @param string CustomLabel
	 * @param int QuantityAvailable
	 * @param EbayTradingTypeAmountType UnitCost
	 * @param long FolderID
	 * @param boolean RestockAlert
	 * @param int RestockThreshold
	 * @param EbayTradingTypeSellingManagerVendorDetailsType VendorInfo
	 * @param string Note
	 * @param DOMDocument any
	 * @return EbayTradingTypeSellingManagerProductDetailsType
	 */
	public function __construct($_ProductName = null,$_ProductID = null,$_CustomLabel = null,$_QuantityAvailable = null,$_UnitCost = null,$_FolderID = null,$_RestockAlert = null,$_RestockThreshold = null,$_VendorInfo = null,$_Note = null,$_any = null)
	{
		parent::__construct(array('ProductName'=>$_ProductName,'ProductID'=>$_ProductID,'CustomLabel'=>$_CustomLabel,'QuantityAvailable'=>$_QuantityAvailable,'UnitCost'=>$_UnitCost,'FolderID'=>$_FolderID,'RestockAlert'=>$_RestockAlert,'RestockThreshold'=>$_RestockThreshold,'VendorInfo'=>$_VendorInfo,'Note'=>$_Note,'any'=>$_any));
	}
	/**
	 * Set ProductName
	 * @param string ProductName
	 * @return string
	 */
	public function setProductName($_ProductName)
	{
		return ($this->ProductName = $_ProductName);
	}
	/**
	 * Get ProductName
	 * @return string
	 */
	public function getProductName()
	{
		return $this->ProductName;
	}
	/**
	 * Set ProductID
	 * @param long ProductID
	 * @return long
	 */
	public function setProductID($_ProductID)
	{
		return ($this->ProductID = $_ProductID);
	}
	/**
	 * Get ProductID
	 * @return long
	 */
	public function getProductID()
	{
		return $this->ProductID;
	}
	/**
	 * Set CustomLabel
	 * @param string CustomLabel
	 * @return string
	 */
	public function setCustomLabel($_CustomLabel)
	{
		return ($this->CustomLabel = $_CustomLabel);
	}
	/**
	 * Get CustomLabel
	 * @return string
	 */
	public function getCustomLabel()
	{
		return $this->CustomLabel;
	}
	/**
	 * Set QuantityAvailable
	 * @param int QuantityAvailable
	 * @return int
	 */
	public function setQuantityAvailable($_QuantityAvailable)
	{
		return ($this->QuantityAvailable = $_QuantityAvailable);
	}
	/**
	 * Get QuantityAvailable
	 * @return int
	 */
	public function getQuantityAvailable()
	{
		return $this->QuantityAvailable;
	}
	/**
	 * Set UnitCost
	 * @param AmountType UnitCost
	 * @return AmountType
	 */
	public function setUnitCost($_UnitCost)
	{
		return ($this->UnitCost = $_UnitCost);
	}
	/**
	 * Get UnitCost
	 * @return EbayTradingTypeAmountType
	 */
	public function getUnitCost()
	{
		return $this->UnitCost;
	}
	/**
	 * Set FolderID
	 * @param long FolderID
	 * @return long
	 */
	public function setFolderID($_FolderID)
	{
		return ($this->FolderID = $_FolderID);
	}
	/**
	 * Get FolderID
	 * @return long
	 */
	public function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * Set RestockAlert
	 * @param boolean RestockAlert
	 * @return boolean
	 */
	public function setRestockAlert($_RestockAlert)
	{
		return ($this->RestockAlert = $_RestockAlert);
	}
	/**
	 * Get RestockAlert
	 * @return boolean
	 */
	public function getRestockAlert()
	{
		return $this->RestockAlert;
	}
	/**
	 * Set RestockThreshold
	 * @param int RestockThreshold
	 * @return int
	 */
	public function setRestockThreshold($_RestockThreshold)
	{
		return ($this->RestockThreshold = $_RestockThreshold);
	}
	/**
	 * Get RestockThreshold
	 * @return int
	 */
	public function getRestockThreshold()
	{
		return $this->RestockThreshold;
	}
	/**
	 * Set VendorInfo
	 * @param SellingManagerVendorDetailsType VendorInfo
	 * @return SellingManagerVendorDetailsType
	 */
	public function setVendorInfo($_VendorInfo)
	{
		return ($this->VendorInfo = $_VendorInfo);
	}
	/**
	 * Get VendorInfo
	 * @return EbayTradingTypeSellingManagerVendorDetailsType
	 */
	public function getVendorInfo()
	{
		return $this->VendorInfo;
	}
	/**
	 * Set Note
	 * @param string Note
	 * @return string
	 */
	public function setNote($_Note)
	{
		return ($this->Note = $_Note);
	}
	/**
	 * Get Note
	 * @return string
	 */
	public function getNote()
	{
		return $this->Note;
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