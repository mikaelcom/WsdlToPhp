<?php
/**
 * Class file for EbayTradingTypeAddSellingManagerProductRequestType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddSellingManagerProductRequestType
 * Documentation : Creates a Selling Manager product. Sellers use Selling Manager products to store SYI forms for use as listing templates. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @date 04/07/2012
 */
class EbayTradingTypeAddSellingManagerProductRequestType extends EbayTradingTypeAbstractRequestType
{
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains product information that the seller has recorded, such as a product description and inventory and restocking details.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * The FolderID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier of the folder. This ID is created when the folder is added and is returned by the AddSellingManagerInventoryFolder call.
	 * @var long
	 */
	public $FolderID;
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
	 * @param long FolderID
	 * @param EbayTradingTypeSellingManagerProductSpecificsType SellingManagerProductSpecifics
	 * @return EbayTradingTypeAddSellingManagerProductRequestType
	 */
	public function __construct($_SellingManagerProductDetails = null,$_FolderID = null,$_SellingManagerProductSpecifics = null)
	{
		EbayTradingWsdlClass::__construct(array('SellingManagerProductDetails'=>$_SellingManagerProductDetails,'FolderID'=>$_FolderID,'SellingManagerProductSpecifics'=>$_SellingManagerProductSpecifics));
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