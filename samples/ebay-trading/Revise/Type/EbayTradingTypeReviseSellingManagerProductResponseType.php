<?php
/**
 * Class file for EbayTradingTypeReviseSellingManagerProductResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseSellingManagerProductResponseType
 * Documentation : Response for revising a Selling Manager product.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseSellingManagerProductResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The details of the product.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $SellingManagerProductDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerProductDetailsType SellingManagerProductDetails
	 * @return EbayTradingTypeReviseSellingManagerProductResponseType
	 */
	public function __construct($_SellingManagerProductDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('SellingManagerProductDetails'=>$_SellingManagerProductDetails));
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