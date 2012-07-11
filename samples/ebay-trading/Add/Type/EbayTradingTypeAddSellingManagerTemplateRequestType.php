<?php
/**
 * Class file for EbayTradingTypeAddSellingManagerTemplateRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddSellingManagerTemplateRequestType
 * Documentation : Adds a Selling Manager template. One product can have up to 20 templates associated with it. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeAddSellingManagerTemplateRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The Item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data in your template, i.e. the data needed to list an item. The item data you specify will be used when you list items from the template you are adding.
	 * @var EbayTradingTypeItemType
	 */
	public $Item;
	/**
	 * The SaleTemplateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name you provide for the template. If you don't specify a name, then Item.Title is used as the name.
	 * @var string
	 */
	public $SaleTemplateName;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the product with which the template will be associated. Before calling AddSellingManagerTemplate, you can obtain a product ID from the response of an AddSellingManagerProduct call. That is, after you add a product using AddSellingManagerProduct, a product ID is returned in the SellingManagerProductDetails.ProductID field. The GetSellingManagerTemplates call also returns product IDs. Alternatively, you can obtain information about a user's existing products, including the product IDs, by calling GetSellingManagerInventory.
	 * @var long
	 */
	public $ProductID;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemType Item
	 * @param string SaleTemplateName
	 * @param long ProductID
	 * @return EbayTradingTypeAddSellingManagerTemplateRequestType
	 */
	public function __construct($_Item = null,$_SaleTemplateName = null,$_ProductID = null)
	{
		EbayTradingWsdlClass::__construct(array('Item'=>$_Item,'SaleTemplateName'=>$_SaleTemplateName,'ProductID'=>$_ProductID));
	}
	/**
	 * Set Item
	 * @param ItemType Item
	 * @return ItemType
	 */
	public function setItem($_Item)
	{
		return ($this->Item = $_Item);
	}
	/**
	 * Get Item
	 * @return EbayTradingTypeItemType
	 */
	public function getItem()
	{
		return $this->Item;
	}
	/**
	 * Set SaleTemplateName
	 * @param string SaleTemplateName
	 * @return string
	 */
	public function setSaleTemplateName($_SaleTemplateName)
	{
		return ($this->SaleTemplateName = $_SaleTemplateName);
	}
	/**
	 * Get SaleTemplateName
	 * @return string
	 */
	public function getSaleTemplateName()
	{
		return $this->SaleTemplateName;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>