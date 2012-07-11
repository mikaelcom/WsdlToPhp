<?php
/**
 * Class file for EbayTradingTypeReviseInventoryStatusResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeReviseInventoryStatusResponseType
 * Documentation : Returns the Item ID or SKU with changed Price and Quantity for the revised listing.
 * @date 04/07/2012
 */
class EbayTradingTypeReviseInventoryStatusResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The InventoryStatus
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Confirms the quantity and price associated with a listing or variation that was revised.
	 * @var EbayTradingTypeInventoryStatusType
	 */
	public $InventoryStatus;
	/**
	 * The Fees
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Child elements contain the estimated listing fees for a listing that was revised. Use the ItemID to correlate the Fees data with the InventoryStatus data in the response. The fees do not include the Final Value Fee (FVF), which can't be determined until the listing has sales.<br> <br> If you revise a variation in a multi-variation listing, the fees are for the entire listing. The insertion fee and listing fee are affected by the highest priced variation in the listing (which is not necessarily the variation that you passed in the request).<br> <br> Also note that the call returns only one Fees node per listing. For example, if you revise 4 variations from the same multi-variation listing, the response includes 4 InventoryStatus nodes and 1 Fees node.
	 * @var EbayTradingTypeInventoryFeesType
	 */
	public $Fees;
	/**
	 * Constructor
	 * @param EbayTradingTypeInventoryStatusType InventoryStatus
	 * @param EbayTradingTypeInventoryFeesType Fees
	 * @return EbayTradingTypeReviseInventoryStatusResponseType
	 */
	public function __construct($_InventoryStatus = null,$_Fees = null)
	{
		EbayTradingWsdlClass::__construct(array('InventoryStatus'=>$_InventoryStatus,'Fees'=>$_Fees));
	}
	/**
	 * Set InventoryStatus
	 * @param InventoryStatusType InventoryStatus
	 * @return InventoryStatusType
	 */
	public function setInventoryStatus($_InventoryStatus)
	{
		return ($this->InventoryStatus = $_InventoryStatus);
	}
	/**
	 * Get InventoryStatus
	 * @return EbayTradingTypeInventoryStatusType
	 */
	public function getInventoryStatus()
	{
		return $this->InventoryStatus;
	}
	/**
	 * Set Fees
	 * @param InventoryFeesType Fees
	 * @return InventoryFeesType
	 */
	public function setFees($_Fees)
	{
		return ($this->Fees = $_Fees);
	}
	/**
	 * Get Fees
	 * @return EbayTradingTypeInventoryFeesType
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