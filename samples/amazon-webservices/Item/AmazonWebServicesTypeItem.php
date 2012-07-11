<?php
/**
 * Class file for AmazonWebServicesTypeItem
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeItem
 * @date 10/07/2012
 */
class AmazonWebServicesTypeItem extends AmazonWebServicesWsdlClass
{
	/**
	 * The ItemId
	 * @var string
	 */
	public $ItemId;
	/**
	 * The ProductName
	 * @var string
	 */
	public $ProductName;
	/**
	 * The Catalog
	 * @var string
	 */
	public $Catalog;
	/**
	 * The Asin
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Asin;
	/**
	 * The ExchangeId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ExchangeId;
	/**
	 * The Quantity
	 * @var string
	 */
	public $Quantity;
	/**
	 * The ListPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $ListPrice;
	/**
	 * The OurPrice
	 * @var string
	 */
	public $OurPrice;
	/**
	 * Constructor
	 * @param string ItemId
	 * @param string ProductName
	 * @param string Catalog
	 * @param string Asin
	 * @param string ExchangeId
	 * @param string Quantity
	 * @param string ListPrice
	 * @param string OurPrice
	 * @return AmazonWebServicesTypeItem
	 */
	public function __construct($_ItemId = null,$_ProductName = null,$_Catalog = null,$_Asin = null,$_ExchangeId = null,$_Quantity = null,$_ListPrice = null,$_OurPrice = null)
	{
		parent::__construct(array('ItemId'=>$_ItemId,'ProductName'=>$_ProductName,'Catalog'=>$_Catalog,'Asin'=>$_Asin,'ExchangeId'=>$_ExchangeId,'Quantity'=>$_Quantity,'ListPrice'=>$_ListPrice,'OurPrice'=>$_OurPrice));
	}
	/**
	 * Set ItemId
	 * @param string ItemId
	 * @return string
	 */
	public function setItemId($_ItemId)
	{
		return ($this->ItemId = $_ItemId);
	}
	/**
	 * Get ItemId
	 * @return string
	 */
	public function getItemId()
	{
		return $this->ItemId;
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
	 * Set Catalog
	 * @param string Catalog
	 * @return string
	 */
	public function setCatalog($_Catalog)
	{
		return ($this->Catalog = $_Catalog);
	}
	/**
	 * Get Catalog
	 * @return string
	 */
	public function getCatalog()
	{
		return $this->Catalog;
	}
	/**
	 * Set Asin
	 * @param string Asin
	 * @return string
	 */
	public function setAsin($_Asin)
	{
		return ($this->Asin = $_Asin);
	}
	/**
	 * Get Asin
	 * @return string
	 */
	public function getAsin()
	{
		return $this->Asin;
	}
	/**
	 * Set ExchangeId
	 * @param string ExchangeId
	 * @return string
	 */
	public function setExchangeId($_ExchangeId)
	{
		return ($this->ExchangeId = $_ExchangeId);
	}
	/**
	 * Get ExchangeId
	 * @return string
	 */
	public function getExchangeId()
	{
		return $this->ExchangeId;
	}
	/**
	 * Set Quantity
	 * @param string Quantity
	 * @return string
	 */
	public function setQuantity($_Quantity)
	{
		return ($this->Quantity = $_Quantity);
	}
	/**
	 * Get Quantity
	 * @return string
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}
	/**
	 * Set ListPrice
	 * @param string ListPrice
	 * @return string
	 */
	public function setListPrice($_ListPrice)
	{
		return ($this->ListPrice = $_ListPrice);
	}
	/**
	 * Get ListPrice
	 * @return string
	 */
	public function getListPrice()
	{
		return $this->ListPrice;
	}
	/**
	 * Set OurPrice
	 * @param string OurPrice
	 * @return string
	 */
	public function setOurPrice($_OurPrice)
	{
		return ($this->OurPrice = $_OurPrice);
	}
	/**
	 * Get OurPrice
	 * @return string
	 */
	public function getOurPrice()
	{
		return $this->OurPrice;
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