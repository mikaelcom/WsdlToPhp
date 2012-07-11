<?php
/**
 * Class file for EbayTradingTypeSellingManagerTemplateDetailsArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellingManagerTemplateDetailsArrayType
 * Documentation : A list of Selling Manager templates.
 * @date 04/07/2012
 */
class EbayTradingTypeSellingManagerTemplateDetailsArrayType extends EbayTradingWsdlClass
{
	/**
	 * The SellingManagerTemplateDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Selling Manager template details.
	 * @var EbayTradingTypeSellingManagerTemplateDetailsType
	 */
	public $SellingManagerTemplateDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerTemplateDetailsType SellingManagerTemplateDetails
	 * @return EbayTradingTypeSellingManagerTemplateDetailsArrayType
	 */
	public function __construct($_SellingManagerTemplateDetails = null)
	{
		parent::__construct(array('SellingManagerTemplateDetails'=>$_SellingManagerTemplateDetails));
	}
	/**
	 * Set SellingManagerTemplateDetails
	 * @param SellingManagerTemplateDetailsType SellingManagerTemplateDetails
	 * @return SellingManagerTemplateDetailsType
	 */
	public function setSellingManagerTemplateDetails($_SellingManagerTemplateDetails)
	{
		return ($this->SellingManagerTemplateDetails = $_SellingManagerTemplateDetails);
	}
	/**
	 * Get SellingManagerTemplateDetails
	 * @return EbayTradingTypeSellingManagerTemplateDetailsType
	 */
	public function getSellingManagerTemplateDetails()
	{
		return $this->SellingManagerTemplateDetails;
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