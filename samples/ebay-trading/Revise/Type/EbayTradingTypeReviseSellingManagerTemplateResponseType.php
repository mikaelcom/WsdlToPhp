<?php
/**
 * Class file for EbayTradingTypeReviseSellingManagerTemplateResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseSellingManagerTemplateResponseType
 * Documentation : Returns the template ID and the estimated fees for the revised listing.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseSellingManagerTemplateResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SaleTemplateID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : This sale template ID uniquely identifies the template that was revised in the request. This sale template ID should match the template ID specified in the request. specified for the call.
	 * @var long
	 */
	public $SaleTemplateID;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Child elements contain the estimated listing fees for the revised item listing. The fees do not include the Final Value Fee (FVF), which cannot be determined until an item is sold. Revising an item does not itself incur a fee. However, certain item properties are fee-based and result in the return of fees in the call's response. Not applicable to Half.com.
	 * @var EbayTradingTypeFeesType
	 */
	public $Fees;
	/**
	 * The CategoryID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the primary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.PrimaryCategory was mapped to a new ID by eBay. If the primary category has not changed or it has expired with no replacement, CategoryID does not return a value. Not applicable to Half.com.
	 * @var string
	 */
	public $CategoryID;
	/**
	 * The Category2ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : ID of the secondary category in which the item was listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID passed in Item.SecondaryCategory was mapped to a new ID by eBay. If the secondary category has not changed or it has expired with no replacement, Category2ID does not return a value. Not applicable to Half.com.
	 * @var string
	 */
	public $Category2ID;
	/**
	 * The VerifyOnly
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Instead of revising, only verifies the template.
	 * @var boolean
	 */
	public $VerifyOnly;
	/**
	 * The SaleTemplateName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the sale template.
	 * @var string
	 */
	public $SaleTemplateName;
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The details of the product that this template belongs to.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * Constructor
	 * @param long SaleTemplateID
	 * @param EbayTradingTypeFeesType Fees
	 * @param string CategoryID
	 * @param string Category2ID
	 * @param boolean VerifyOnly
	 * @param string SaleTemplateName
	 * @param EbayTradingTypeSellingManagerProductDetailsType SellingManagerProductDetails
	 * @return EbayTradingTypeReviseSellingManagerTemplateResponseType
	 */
	public function __construct($_SaleTemplateID = null,$_Fees = null,$_CategoryID = null,$_Category2ID = null,$_VerifyOnly = null,$_SaleTemplateName = null,$_SellingManagerProductDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('SaleTemplateID'=>$_SaleTemplateID,'Fees'=>$_Fees,'CategoryID'=>$_CategoryID,'Category2ID'=>$_Category2ID,'VerifyOnly'=>$_VerifyOnly,'SaleTemplateName'=>$_SaleTemplateName,'SellingManagerProductDetails'=>$_SellingManagerProductDetails));
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
	 * Set CategoryID
	 * @param string CategoryID
	 * @return string
	 */
	public function setCategoryID($_CategoryID)
	{
		return ($this->CategoryID = $_CategoryID);
	}
	/**
	 * Get CategoryID
	 * @return string
	 */
	public function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * Set Category2ID
	 * @param string Category2ID
	 * @return string
	 */
	public function setCategory2ID($_Category2ID)
	{
		return ($this->Category2ID = $_Category2ID);
	}
	/**
	 * Get Category2ID
	 * @return string
	 */
	public function getCategory2ID()
	{
		return $this->Category2ID;
	}
	/**
	 * Set VerifyOnly
	 * @param boolean VerifyOnly
	 * @return boolean
	 */
	public function setVerifyOnly($_VerifyOnly)
	{
		return ($this->VerifyOnly = $_VerifyOnly);
	}
	/**
	 * Get VerifyOnly
	 * @return boolean
	 */
	public function getVerifyOnly()
	{
		return $this->VerifyOnly;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>