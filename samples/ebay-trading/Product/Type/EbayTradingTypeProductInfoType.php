<?php
/**
 * Class file for EbayTradingTypeProductInfoType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeProductInfoType
 * Documentation : Unique identifier for the product. See the Developer's Guide for information about eBay product IDs. If the primary and secondary category are both catalog-enabled, this ID corresponds to the primary category.
 * @date 04/07/2012
 */
class EbayTradingTypeProductInfoType extends EbayTradingWsdlClass
{
	/**
	 * The AverageStartPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The average start price (minimum bid), if any, of completed auction items that were listed with Pre-filled Item Information from this product.
	 * @var EbayTradingTypeAmountType
	 */
	public $AverageStartPrice;
	/**
	 * The AverageSoldPrice
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The average sold price (winning bid, Buy It Now price, or fixed price), if any, of completed items that were listed with Pre-filled Item Information from this product.
	 * @var EbayTradingTypeAmountType
	 */
	public $AverageSoldPrice;
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Title associated with the product. This value can be used as the basis for a suggested listing title. If the title is longer than 80 characters, your application should make sure the suggested title has a maximum length of 80 characters so that it will be valid for the AddItem family of calls. <br><br> <span class="tablenote"><b>Note:</b> The maximum length of an eBay Item Title has increased to 80 characters as of September 2011. </span>
	 * @var string
	 */
	public $Title;
	/**
	 * The ProductState
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that the product has changed or will soon change (usually due to a migration from one catalog to another catalog). Typically, this field is returned for up to 90 days for a given product. After that, the product either no longer returns this field or the product is no longer returned (depending on the state change). <br><br> This data is primarily applicable to catalogs used by the US, Germany, Austria, and Switzerland sites. Other sites may undergo catalog changes in the future.
	 * @var EbayTradingTypeProductStateCodeType
	 */
	public $ProductState;
	/**
	 * The productInfoID
	 * @var string
	 */
	public $productInfoID;
	/**
	 * Constructor
	 * @param EbayTradingTypeAmountType AverageStartPrice
	 * @param EbayTradingTypeAmountType AverageSoldPrice
	 * @param string Title
	 * @param EbayTradingTypeProductStateCodeType ProductState
	 * @param string productInfoID
	 * @return EbayTradingTypeProductInfoType
	 */
	public function __construct($_AverageStartPrice = null,$_AverageSoldPrice = null,$_Title = null,$_ProductState = null,$_productInfoID = null)
	{
		parent::__construct(array('AverageStartPrice'=>$_AverageStartPrice,'AverageSoldPrice'=>$_AverageSoldPrice,'Title'=>$_Title,'ProductState'=>$_ProductState,'productInfoID'=>$_productInfoID));
	}
	/**
	 * Set AverageStartPrice
	 * @param AmountType AverageStartPrice
	 * @return AmountType
	 */
	public function setAverageStartPrice($_AverageStartPrice)
	{
		return ($this->AverageStartPrice = $_AverageStartPrice);
	}
	/**
	 * Get AverageStartPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getAverageStartPrice()
	{
		return $this->AverageStartPrice;
	}
	/**
	 * Set AverageSoldPrice
	 * @param AmountType AverageSoldPrice
	 * @return AmountType
	 */
	public function setAverageSoldPrice($_AverageSoldPrice)
	{
		return ($this->AverageSoldPrice = $_AverageSoldPrice);
	}
	/**
	 * Get AverageSoldPrice
	 * @return EbayTradingTypeAmountType
	 */
	public function getAverageSoldPrice()
	{
		return $this->AverageSoldPrice;
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set ProductState
	 * @param ProductStateCodeType ProductState
	 * @return ProductStateCodeType
	 */
	public function setProductState($_ProductState)
	{
		return ($this->ProductState = EbayTradingTypeProductStateCodeType::valueIsValid($_ProductState)?$_ProductState:null);
	}
	/**
	 * Get ProductState
	 * @return EbayTradingTypeProductStateCodeType
	 */
	public function getProductState()
	{
		return $this->ProductState;
	}
	/**
	 * Set productInfoID
	 * @param string productInfoID
	 * @return string
	 */
	public function setProductInfoID($_productInfoID)
	{
		return ($this->productInfoID = $_productInfoID);
	}
	/**
	 * Get productInfoID
	 * @return string
	 */
	public function getProductInfoID()
	{
		return $this->productInfoID;
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