<?php
/**
 * Class file for EbayTradingTypeItemTotalsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemTotalsType
 * Documentation : Details about items involved in the summary for the specified time period.
 * @date 04/07/2012
 */
class EbayTradingTypeItemTotalsType extends EbayTradingWsdlClass
{
	/**
	 * The TotalQuantity
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Number of items involved in the summary.
	 * @var long
	 */
	public $TotalQuantity;
	/**
	 * The TotalValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Total value associated with the items in this summary.
	 * @var EbayTradingTypeAmountType
	 */
	public $TotalValue;
	/**
	 * Constructor
	 * @param long TotalQuantity
	 * @param EbayTradingTypeAmountType TotalValue
	 * @return EbayTradingTypeItemTotalsType
	 */
	public function __construct($_TotalQuantity = null,$_TotalValue = null)
	{
		parent::__construct(array('TotalQuantity'=>$_TotalQuantity,'TotalValue'=>$_TotalValue));
	}
	/**
	 * Set TotalQuantity
	 * @param long TotalQuantity
	 * @return long
	 */
	public function setTotalQuantity($_TotalQuantity)
	{
		return ($this->TotalQuantity = $_TotalQuantity);
	}
	/**
	 * Get TotalQuantity
	 * @return long
	 */
	public function getTotalQuantity()
	{
		return $this->TotalQuantity;
	}
	/**
	 * Set TotalValue
	 * @param AmountType TotalValue
	 * @return AmountType
	 */
	public function setTotalValue($_TotalValue)
	{
		return ($this->TotalValue = $_TotalValue);
	}
	/**
	 * Get TotalValue
	 * @return EbayTradingTypeAmountType
	 */
	public function getTotalValue()
	{
		return $this->TotalValue;
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