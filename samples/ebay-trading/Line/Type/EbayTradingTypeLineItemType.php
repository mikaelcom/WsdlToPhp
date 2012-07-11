<?php
/**
 * Class file for EbayTradingTypeLineItemType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLineItemType
 * Documentation : This type provides information about one order line item in a Global Exchange package. The package can contain multiple units of a given order line item. <br/><br/> <span class="tablenote"> <strong>Note:</strong> The Global Exchange program is available for testing with simulated responses in the Sandbox in mid-June 2012. The full functionality of the Global Exchange program will be available in August 2012. </span>
 * @date 04/07/2012
 */
class EbayTradingTypeLineItemType extends EbayTradingWsdlClass
{
	/**
	 * The Quantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The number of units of the order line item in this package; this is required for customs. The seller must ensure that this matches the quantity of the order line item enclosed in the package. <br/><br/> This value must be a positive integer, and it can't be greater than the quantity of this item specified in the original transaction.
	 * @var int
	 */
	public $Quantity;
	/**
	 * The CountryOfOrigin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The Country of Manufacture for the order line item; this is required for customs. This should identify the country in which more than 50% of the value of the item was created. <br/><br/> This value must conform to the ISO 3166 two-letter country code standard. Use the <strong>GeteBayDetails</strong> call to see the list of currently supported codes, and the English names associated with each code (e.g., KY="Cayman Islands").
	 * @var string
	 */
	public $CountryOfOrigin;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : A description of the order line item, based on its <strong>ItemID</strong>.
	 * @var string
	 */
	public $Description;
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Unique identifier for the eBay item listing of the order line item. A listing can have multiple order line items (transactions), but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is required for each <b>ItemTransactionID</b> node included in the request.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The TransactionID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- documentation : Unique identifier for an eBay order line item (transaction). The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> value can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair.
	 * @var string
	 */
	public $TransactionID;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int Quantity
	 * @param string CountryOfOrigin
	 * @param string Description
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param string TransactionID
	 * @param DOMDocument any
	 * @return EbayTradingTypeLineItemType
	 */
	public function __construct($_Quantity = null,$_CountryOfOrigin = null,$_Description = null,$_ItemID,$_TransactionID,$_any = null)
	{
		parent::__construct(array('Quantity'=>$_Quantity,'CountryOfOrigin'=>$_CountryOfOrigin,'Description'=>$_Description,'ItemID'=>$_ItemID,'TransactionID'=>$_TransactionID,'any'=>$_any));
	}
	/**
	 * Set Quantity
	 * @param int Quantity
	 * @return int
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set CountryOfOrigin
	 * @param string CountryOfOrigin
	 * @return string
	 */
	public function setCountryOfOrigin($_CountryOfOrigin)
	{
		return ($this->CountryOfOrigin = $_CountryOfOrigin);
	}
	/**
	 * Get CountryOfOrigin
	 * @return string
	 */
	public function getCountryOfOrigin()
	{
		return $this->CountryOfOrigin;
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
	 * Set TransactionID
	 * @param string TransactionID
	 * @return string
	 */
	public function setTransactionID($_TransactionID)
	{
		return ($this->TransactionID = $_TransactionID);
	}
	/**
	 * Get TransactionID
	 * @return string
	 */
	public function getTransactionID()
	{
		return $this->TransactionID;
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