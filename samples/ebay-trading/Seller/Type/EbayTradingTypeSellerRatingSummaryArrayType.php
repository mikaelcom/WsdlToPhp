<?php
/**
 * Class file for EbayTradingTypeSellerRatingSummaryArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeSellerRatingSummaryArrayType
 * Documentation : Contains DSR feedback metrics for different periods.
 * @date 04/07/2012
 */
class EbayTradingTypeSellerRatingSummaryArrayType extends EbayTradingWsdlClass
{
	/**
	 * The AverageRatingSummary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Average detailed seller ratings for specific periods.
	 * @var EbayTradingTypeAverageRatingSummaryType
	 */
	public $AverageRatingSummary;
	/**
	 * Constructor
	 * @param EbayTradingTypeAverageRatingSummaryType AverageRatingSummary
	 * @return EbayTradingTypeSellerRatingSummaryArrayType
	 */
	public function __construct($_AverageRatingSummary = null)
	{
		parent::__construct(array('AverageRatingSummary'=>$_AverageRatingSummary));
	}
	/**
	 * Set AverageRatingSummary
	 * @param AverageRatingSummaryType AverageRatingSummary
	 * @return AverageRatingSummaryType
	 */
	public function setAverageRatingSummary($_AverageRatingSummary)
	{
		return ($this->AverageRatingSummary = $_AverageRatingSummary);
	}
	/**
	 * Get AverageRatingSummary
	 * @return EbayTradingTypeAverageRatingSummaryType
	 */
	public function getAverageRatingSummary()
	{
		return $this->AverageRatingSummary;
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