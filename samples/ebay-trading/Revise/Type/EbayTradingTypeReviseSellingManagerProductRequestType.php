<?php
/**
 * Class file for EbayTradingTypeReviseSellingManagerProductRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseSellingManagerProductRequestType
 * Documentation : Revises a Selling Manager product. <br><br> This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseSellingManagerProductRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The details of the product that is being revised.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * The SellingManagerFolderDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The details of the folder for this product.
	 * @var EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public $SellingManagerFolderDetails;
	/**
	 * The DeletedField
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Specifies the name of a field to remove from a Selling Manager product. The request can contain zero, one, or many instances of DeletedField (one for each field to be removed). DeletedField accepts the following path names, which remove the corresponding fields:<br><br> SellingManagerProductDetails.CustomLabel<br> SellingManagerProductDetails.QuantityAvailable<br> SellingManagerProductDetails.UnitCost<br> These values are case-sensitive. Use values that match the case of the schema element names.
	 * @var string
	 */
	public $DeletedField;
	/**
	 * The SellingManagerProductSpecifics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Specifies an eBay category associated with the product, defines Item Specifics that are relevant to the product, and defines variations available for the product (which may be used to create mult-variation listings).
	 * @var EbayTradingTypeSellingManagerProductSpecificsType
	 */
	public $SellingManagerProductSpecifics;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerProductDetailsType SellingManagerProductDetails
	 * @param EbayTradingTypeSellingManagerFolderDetailsType SellingManagerFolderDetails
	 * @param string DeletedField
	 * @param EbayTradingTypeSellingManagerProductSpecificsType SellingManagerProductSpecifics
	 * @return EbayTradingTypeReviseSellingManagerProductRequestType
	 */
	public function __construct($_SellingManagerProductDetails = null,$_SellingManagerFolderDetails = null,$_DeletedField = null,$_SellingManagerProductSpecifics = null)
	{
		EbayTradingWsdlClass::__construct(array('SellingManagerProductDetails'=>$_SellingManagerProductDetails,'SellingManagerFolderDetails'=>$_SellingManagerFolderDetails,'DeletedField'=>$_DeletedField,'SellingManagerProductSpecifics'=>$_SellingManagerProductSpecifics));
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
	 * Set SellingManagerFolderDetails
	 * @param SellingManagerFolderDetailsType SellingManagerFolderDetails
	 * @return SellingManagerFolderDetailsType
	 */
	public function setSellingManagerFolderDetails($_SellingManagerFolderDetails)
	{
		return ($this->SellingManagerFolderDetails = $_SellingManagerFolderDetails);
	}
	/**
	 * Get SellingManagerFolderDetails
	 * @return EbayTradingTypeSellingManagerFolderDetailsType
	 */
	public function getSellingManagerFolderDetails()
	{
		return $this->SellingManagerFolderDetails;
	}
	/**
	 * Set DeletedField
	 * @param string DeletedField
	 * @return string
	 */
	public function setDeletedField($_DeletedField)
	{
		return ($this->DeletedField = $_DeletedField);
	}
	/**
	 * Get DeletedField
	 * @return string
	 */
	public function getDeletedField()
	{
		return $this->DeletedField;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>