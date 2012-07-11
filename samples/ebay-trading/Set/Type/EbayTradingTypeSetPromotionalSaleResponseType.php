<?php
/**
 * Class file for EbayTradingTypeSetPromotionalSaleResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetPromotionalSaleResponseType
 * Documentation : Contains the ID and status of a promotional sale. The Promotional Price Display feature enables sellers to apply discounts and/or free shipping across many listings.
 * @date 04/07/2012
 */
class EbayTradingTypeSetPromotionalSaleResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The Status
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the status of a promotional sale.
	 * @var EbayTradingTypePromotionalSaleStatusCodeType
	 */
	public $Status;
	/**
	 * The PromotionalSaleID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the ID of a promotional sale.
	 * @var long
	 */
	public $PromotionalSaleID;
	/**
	 * Constructor
	 * @param EbayTradingTypePromotionalSaleStatusCodeType Status
	 * @param long PromotionalSaleID
	 * @return EbayTradingTypeSetPromotionalSaleResponseType
	 */
	public function __construct($_Status = null,$_PromotionalSaleID = null)
	{
		EbayTradingWsdlClass::__construct(array('Status'=>$_Status,'PromotionalSaleID'=>$_PromotionalSaleID));
	}
	/**
	 * Set Status
	 * @param PromotionalSaleStatusCodeType Status
	 * @return PromotionalSaleStatusCodeType
	 */
	public function setStatus($_Status)
	{
		return ($this->Status = EbayTradingTypePromotionalSaleStatusCodeType::valueIsValid($_Status)?$_Status:null);
	}
	/**
	 * Get Status
	 * @return EbayTradingTypePromotionalSaleStatusCodeType
	 */
	public function getStatus()
	{
		return $this->Status;
	}
	/**
	 * Set PromotionalSaleID
	 * @param long PromotionalSaleID
	 * @return long
	 */
	public function setPromotionalSaleID($_PromotionalSaleID)
	{
		return ($this->PromotionalSaleID = $_PromotionalSaleID);
	}
	/**
	 * Get PromotionalSaleID
	 * @return long
	 */
	public function getPromotionalSaleID()
	{
		return $this->PromotionalSaleID;
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