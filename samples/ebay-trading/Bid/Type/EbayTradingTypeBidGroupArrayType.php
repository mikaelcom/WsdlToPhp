<?php
/**
 * Class file for EbayTradingTypeBidGroupArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBidGroupArrayType
 * Documentation : Contains a list of items that are part of a bid group.
 * @date 04/07/2012
 */
class EbayTradingTypeBidGroupArrayType extends EbayTradingWsdlClass
{
	/**
	 * The BidGroup
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a list of bid groups.
	 * @var EbayTradingTypeBidGroupType
	 */
	public $BidGroup;
	/**
	 * Constructor
	 * @param EbayTradingTypeBidGroupType BidGroup
	 * @return EbayTradingTypeBidGroupArrayType
	 */
	public function __construct($_BidGroup = null)
	{
		parent::__construct(array('BidGroup'=>$_BidGroup));
	}
	/**
	 * Set BidGroup
	 * @param BidGroupType BidGroup
	 * @return BidGroupType
	 */
	public function setBidGroup($_BidGroup)
	{
		return ($this->BidGroup = $_BidGroup);
	}
	/**
	 * Get BidGroup
	 * @return EbayTradingTypeBidGroupType
	 */
	public function getBidGroup()
	{
		return $this->BidGroup;
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