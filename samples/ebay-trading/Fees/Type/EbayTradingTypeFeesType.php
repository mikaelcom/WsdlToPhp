<?php
/**
 * Class file for EbayTradingTypeFeesType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeesType
 * Documentation : Identifies a set of one or more fees that a member pays to eBay (or an eBay company). Instances of this type can hold one or more fees.
 * @date 04/07/2012
 */
class EbayTradingTypeFeesType extends EbayTradingWsdlClass
{
	/**
	 * The Fee
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains the name, fee, and possible discount amount for an item listing feature. A Fee container is returned for each listing feature, even if the associated cost (Fee value) is 0.
	 * @var EbayTradingTypeFeeType
	 */
	public $Fee;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeeType Fee
	 * @return EbayTradingTypeFeesType
	 */
	public function __construct($_Fee = null)
	{
		parent::__construct(array('Fee'=>$_Fee));
	}
	/**
	 * Set Fee
	 * @param FeeType Fee
	 * @return FeeType
	 */
	public function setFee($_Fee)
	{
		return ($this->Fee = $_Fee);
	}
	/**
	 * Get Fee
	 * @return EbayTradingTypeFeeType
	 */
	public function getFee()
	{
		return $this->Fee;
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