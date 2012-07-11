<?php
/**
 * Class file for EbayTradingTypeGetSellingManagerSaleRecordResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeGetSellingManagerSaleRecordResponseType
 * Documentation : Response to a GetSellingManagerSaleRecord call.
 * @date 04/07/2012
 */
class EbayTradingTypeGetSellingManagerSaleRecordResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The SellingManagerSoldOrder
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Contains the data in a Selling Manager sale record.
	 * @var EbayTradingTypeSellingManagerSoldOrderType
	 */
	public $SellingManagerSoldOrder;
	/**
	 * Constructor
	 * @param EbayTradingTypeSellingManagerSoldOrderType SellingManagerSoldOrder
	 * @return EbayTradingTypeGetSellingManagerSaleRecordResponseType
	 */
	public function __construct($_SellingManagerSoldOrder = null)
	{
		EbayTradingWsdlClass::__construct(array('SellingManagerSoldOrder'=>$_SellingManagerSoldOrder));
	}
	/**
	 * Set SellingManagerSoldOrder
	 * @param SellingManagerSoldOrderType SellingManagerSoldOrder
	 * @return SellingManagerSoldOrderType
	 */
	public function setSellingManagerSoldOrder($_SellingManagerSoldOrder)
	{
		return ($this->SellingManagerSoldOrder = $_SellingManagerSoldOrder);
	}
	/**
	 * Get SellingManagerSoldOrder
	 * @return EbayTradingTypeSellingManagerSoldOrderType
	 */
	public function getSellingManagerSoldOrder()
	{
		return $this->SellingManagerSoldOrder;
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