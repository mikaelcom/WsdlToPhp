<?php
/**
 * Class file for EbayTradingTypeDeleteSellingManagerProductResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDeleteSellingManagerProductResponseType
 * Documentation : Response for deleting a Selling Manager product.
 * @date 04/07/2012
 */
class EbayTradingTypeDeleteSellingManagerProductResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The DeletedSellingManagerProductDetails
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The details of the product.
	 * @var EbayTradingTypeSellingManagerProductDetailsType
	 */
	public $DeletedSellingManagerProductDetails;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerProductDetailsType DeletedSellingManagerProductDetails
	 * @return EbayTradingTypeDeleteSellingManagerProductResponseType
	 */
	public function __construct($_DeletedSellingManagerProductDetails = null)
	{
		EbayTradingWsdlClass::__construct(array('DeletedSellingManagerProductDetails'=>$_DeletedSellingManagerProductDetails));
	}
	/**
	 * Set DeletedSellingManagerProductDetails
	 * @param SellingManagerProductDetailsType DeletedSellingManagerProductDetails
	 * @return SellingManagerProductDetailsType
	 */
	public function setDeletedSellingManagerProductDetails($_DeletedSellingManagerProductDetails)
	{
		return ($this->DeletedSellingManagerProductDetails = $_DeletedSellingManagerProductDetails);
	}
	/**
	 * Get DeletedSellingManagerProductDetails
	 * @return EbayTradingTypeSellingManagerProductDetailsType
	 */
	public function getDeletedSellingManagerProductDetails()
	{
		return $this->DeletedSellingManagerProductDetails;
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