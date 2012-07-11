<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerTemplatesResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerTemplatesResponseType
 * Documentation : Contains the templates requested on input. Each SellingManagerTemplateType object in the response contains the data for one Selling Manager template.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerTemplatesResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SellingManagerTemplateDetailsArray
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data of the templates requested on input. A Selling Manager template contains the data needed to list an item. Empty if no items are available that match the request.
	 * @var EbayTradingTypeSellingManagerTemplateDetailsArrayType
	 */
	public $SellingManagerTemplateDetailsArray;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerTemplateDetailsArrayType SellingManagerTemplateDetailsArray
	 * @return EbayTradingTypeGetSellingManagerTemplatesResponseType
	 */
	public function __construct($_SellingManagerTemplateDetailsArray = null)
	{
		EbayTradingWsdlClass::__construct(array('SellingManagerTemplateDetailsArray'=>$_SellingManagerTemplateDetailsArray));
	}
	/**
	 * Set SellingManagerTemplateDetailsArray
	 * @param SellingManagerTemplateDetailsArrayType SellingManagerTemplateDetailsArray
	 * @return SellingManagerTemplateDetailsArrayType
	 */
	public function setSellingManagerTemplateDetailsArray($_SellingManagerTemplateDetailsArray)
	{
		return ($this->SellingManagerTemplateDetailsArray = $_SellingManagerTemplateDetailsArray);
	}
	/**
	 * Get SellingManagerTemplateDetailsArray
	 * @return EbayTradingTypeSellingManagerTemplateDetailsArrayType
	 */
	public function getSellingManagerTemplateDetailsArray()
	{
		return $this->SellingManagerTemplateDetailsArray;
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