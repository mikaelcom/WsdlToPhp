<?php
/**
 * Class file for EbayTradingTypeSetPromotionalSaleListingsResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSetPromotionalSaleListingsResponseType
 * Documentation : Contains the status of a promotional sale.
 * @date 04/07/2012
 */
class EbayTradingTypeSetPromotionalSaleListingsResponseType extends EbayTradingTypeAbstractResponseType
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
	 * Constructor
	 * @param EbayTradingTypePromotionalSaleStatusCodeType Status
	 * @return EbayTradingTypeSetPromotionalSaleListingsResponseType
	 */
	public function __construct($_Status = null)
	{
		EbayTradingWsdlClass::__construct(array('Status'=>$_Status));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>