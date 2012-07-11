<?php
/**
 * Class file for EbayTradingTypeAddSellingManagerTemplateResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeAddSellingManagerTemplateResponseType
 * Documentation : Contains values indicating template information for a newly-exported item.
 * @date 04/07/2012
 */
class EbayTradingTypeAddSellingManagerTemplateResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the primary category in which the item would be listed.
	 * @var long
	 */
	public $CategoryID;
	/**
	 * The Category2ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the secondary category (if any) in which the item would be listed.
	 * @var long
	 */
	public $Category2ID;
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the Selling Manager template. Store this value, for use in other Selling Manager calls.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * The SaleTemplateGroupID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Ignore this value. For the output value that indicates the ID of the product associated with the template, use SellingManagerProductDetails.ProductID.
	 * @var long
	 */
	public $SaleTemplateGroupID;
	/**
	 * The SaleTemplateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the template, as it will appear in Selling Manager Pro. This name is the input value you provided in the SaleTemplateName field. If you didn't specify a value for SaleTemplateName, then Item.Title is used as the name.
	 * @var string
	 */
	public $SaleTemplateName;
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The details of the product with which the template is associated.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements contain the estimated listing fees for the new listing template. Note that the fee will only be charged when an item is created from the template. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * Constructor
	 * @param long CategoryID
	 * @param long Category2ID
	 * @param long SaleTemplateID
	 * @param long SaleTemplateGroupID
	 * @param string SaleTemplateName
	 * @param EbayTradingTypeSellingManagerProductDetailsType SellingManagerProductDetails
	 * @param EbayTradingTypeFeesType Fees
	 * @return EbayTradingTypeAddSellingManagerTemplateResponseType
	 */
	public function __construct($_CategoryID = null,$_Category2ID = null,$_SaleTemplateID = null,$_SaleTemplateGroupID = null,$_SaleTemplateName = null,$_SellingManagerProductDetails = null,$_Fees = null)
	{
		EbayTradingWsdlClass::__construct(array('CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID,'SaleTemplateID'=>$_SaleTemplateID,'SaleTemplateGroupID'=>$_SaleTemplateGroupID,'SaleTemplateName'=>$_SaleTemplateName,'SellingManagerProductDetails'=>$_SellingManagerProductDetails,'Fees'=>$_Fees));
	}
	/**
	 * Set CategoryID
	 * @param long CategoryID
	 * @return long
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return long
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set Category2ID
	 * @param long Category2ID
	 * @return long
	 */
	public function setCategory2ID($_Category2ID)
	{
		return ($this->Category2ID = $_Category2ID);
	}
	/**
	 * Get Category2ID
	 * @return long
	 */
	public function getCategory2ID()
	{
		return $this->Category2ID;
	}
	/**
	 * Set SaleTemplateID
	 * @param long SaleTemplateID
	 * @return long
	 */
	public function setSaleTemplateID($_SaleTemplateID)
	{
		return ($this->SaleTemplateID = $_SaleTemplateID);
	}
	/**
	 * Get SaleTemplateID
	 * @return long
	 */
	public function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * Set SaleTemplateGroupID
	 * @param long SaleTemplateGroupID
	 * @return long
	 */
	public function setSaleTemplateGroupID($_SaleTemplateGroupID)
	{
		return ($this->SaleTemplateGroupID = $_SaleTemplateGroupID);
	}
	/**
	 * Get SaleTemplateGroupID
	 * @return long
	 */
	public function getSaleTemplateGroupID()
	{
		return $this->SaleTemplateGroupID;
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
	 * Set Fees
	 * @param FeesType Fees
	 * @return FeesType
	 */
	public function setFees($_Fees)
	{
		return ($this->Fees = $_Fees);
	}
	/**
	 * Get Fees
	 * @return EbayTradingTypeFeesType
	 */
	public function getFees()
	{
		return $this->Fees;
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