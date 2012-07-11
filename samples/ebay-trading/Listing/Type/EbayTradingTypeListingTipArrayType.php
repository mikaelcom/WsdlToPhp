<?php
/**
 * Class file for EbayTradingTypeListingTipArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeListingTipArrayType
 * Documentation : (out) Contains a list of tips on improving a listing's details, if any.
 * @date 04/07/2012
 */
class EbayTradingTypeListingTipArrayType extends EbayTradingWsdlClass
{
	/**
	 * The ListingTip
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : An individual tip on improving a listing's details.
	 * @var EbayTradingTypeListingTipType
	 */
	public $ListingTip;
	/**
	 * Constructor
	 * @param EbayTradingTypeListingTipType ListingTip
	 * @return EbayTradingTypeListingTipArrayType
	 */
	public function __construct($_ListingTip = null)
	{
		parent::__construct(array('ListingTip'=>$_ListingTip));
	}
	/**
	 * Set ListingTip
	 * @param ListingTipType ListingTip
	 * @return ListingTipType
	 */
	public function setListingTip($_ListingTip)
	{
		return ($this->ListingTip = $_ListingTip);
	}
	/**
	 * Get ListingTip
	 * @return EbayTradingTypeListingTipType
	 */
	public function getListingTip()
	{
		return $this->ListingTip;
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