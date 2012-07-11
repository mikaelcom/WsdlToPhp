<?php
/**
 * Class file for GGAdwordsTypeBudgetOptimizer
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBudgetOptimizer
 * Documentation : In budget optimizer, Google automatically places bids for the user based on their daily/monthly budget. <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @date 03/07/2012
 */
class GGAdwordsTypeBudgetOptimizer extends GGAdwordsTypeBiddingStrategy
{
	/**
	 * The enhancedCpcEnabled
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The enhanced CPC bidding option for the campaign, which enables bids to be enhanced based on conversion optimizer data. For more information about enhanced CPC, see the article <a href="http://adwords.google.com/support/aw/bin/answer.py?answer=159957" >What is Enhanced CPC?</a>. <span class="constraint Selectable">This field can be selected using the value "EnhancedCpcEnabled".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var boolean
	 */
	public $enhancedCpcEnabled;
	/**
	 * The bidCeiling
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Ceiling on bids placed by the budget optimizer. <span class="constraint Selectable">This field can be selected using the value "BidCeiling".</span>
	 * @var GGAdwordsTypeMoney
	 */
	public $bidCeiling;
	/**
	 * Constructor
	 * @param boolean enhancedCpcEnabled
	 * @param GGAdwordsTypeMoney bidCeiling
	 * @return GGAdwordsTypeBudgetOptimizer
	 */
	public function __construct($_enhancedCpcEnabled = null,$_bidCeiling = null)
	{
		GGAdwordsWsdlClass::__construct(array('enhancedCpcEnabled'=>$_enhancedCpcEnabled,'bidCeiling'=>$_bidCeiling));
	}
	/**
	 * Set enhancedCpcEnabled
	 * @param boolean enhancedCpcEnabled
	 * @return boolean
	 */
	public function setEnhancedCpcEnabled($_enhancedCpcEnabled)
	{
		return ($this->enhancedCpcEnabled = $_enhancedCpcEnabled);
	}
	/**
	 * Get enhancedCpcEnabled
	 * @return boolean
	 */
	public function getEnhancedCpcEnabled()
	{
		return $this->enhancedCpcEnabled;
	}
	/**
	 * Set bidCeiling
	 * @param Money bidCeiling
	 * @return Money
	 */
	public function setBidCeiling($_bidCeiling)
	{
		return ($this->bidCeiling = $_bidCeiling);
	}
	/**
	 * Get bidCeiling
	 * @return GGAdwordsTypeMoney
	 */
	public function getBidCeiling()
	{
		return $this->bidCeiling;
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