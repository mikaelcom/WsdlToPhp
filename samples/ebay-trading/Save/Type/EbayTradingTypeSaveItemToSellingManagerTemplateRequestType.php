<?php
/**
 * Class file for EbayTradingTypeSaveItemToSellingManagerTemplateRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSaveItemToSellingManagerTemplateRequestType
 * Documentation : Creates a Selling Manager listing template that is similar to an item. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeSaveItemToSellingManagerTemplateRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The ItemID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ItemID which should be created as a template and saved to inventory.
	 * @var EbayTradingTypeItemIDType
	 */
	public $ItemID;
	/**
	 * The ProductID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Associates the new template with a product.
	 * @var long
	 */
	public $ProductID;
	/**
	 * The TemplateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Name associated with the template. If no name is submitted, the template will be named automatically.
	 * @var string
	 */
	public $TemplateName;
	/**
	 * Constructor
	 * @param EbayTradingTypeItemIDType ItemID
	 * @param long ProductID
	 * @param string TemplateName
	 * @return EbayTradingTypeSaveItemToSellingManagerTemplateRequestType
	 */
	public function __construct($_ItemID = null,$_ProductID = null,$_TemplateName = null)
	{
		EbayTradingWsdlClass::__construct(array('ItemID'=>$_ItemID,'ProductID'=>$_ProductID,'TemplateName'=>$_TemplateName));
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
	 * Set TemplateName
	 * @param string TemplateName
	 * @return string
	 */
	public function setTemplateName($_TemplateName)
	{
		return ($this->TemplateName = $_TemplateName);
	}
	/**
	 * Get TemplateName
	 * @return string
	 */
	public function getTemplateName()
	{
		return $this->TemplateName;
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