<?php
/**
 * Class file for GGAdwordsTypeConversionOptimizerBiddingTransition
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeConversionOptimizerBiddingTransition
 * Documentation : Used to switch a campaign's bidding strategy to conversion optimizer.
 * @date 03/07/2012
 */
class GGAdwordsTypeConversionOptimizerBiddingTransition extends GGAdwordsTypeBiddingTransition
{
	/**
	 * The useSavedBids
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicate to use the existing bids, if there are previously saved CPA bids for the AdGroup during transition of campaign from {@link ManualCPC} to {@link ConversionOptimizer}.
	 * @var boolean
	 */
	public $useSavedBids;
	/**
	 * Constructor
	 * @param boolean useSavedBids
	 * @return GGAdwordsTypeConversionOptimizerBiddingTransition
	 */
	public function __construct($_useSavedBids = null)
	{
		GGAdwordsWsdlClass::__construct(array('useSavedBids'=>$_useSavedBids));
	}
	/**
	 * Set useSavedBids
	 * @param boolean useSavedBids
	 * @return boolean
	 */
	public function setUseSavedBids($_useSavedBids)
	{
		return ($this->useSavedBids = $_useSavedBids);
	}
	/**
	 * Get useSavedBids
	 * @return boolean
	 */
	public function getUseSavedBids()
	{
		return $this->useSavedBids;
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