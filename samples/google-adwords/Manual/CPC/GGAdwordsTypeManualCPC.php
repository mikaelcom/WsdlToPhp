<?php
/**
 * Class file for GGAdwordsTypeManualCPC
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeManualCPC
 * Documentation : Manual click based bidding where user pays per click. For more information, see the article <a href="http://adwords.google.com/support/aw/bin/answer.py?answer=159957" >What is Enhanced CPC?</a>. <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @date 03/07/2012
 */
class GGAdwordsTypeManualCPC extends GGAdwordsTypeBiddingStrategy
{
	/**
	 * The enhancedCpcEnabled
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : The enhanced CPC bidding option for the campaign, which enables bids to be enhanced based on conversion optimizer data. <span class="constraint Selectable">This field can be selected using the value "EnhancedCpcEnabled".</span><span class="constraint Filterable">This field can be filtered on.</span>
	 * @var boolean
	 */
	public $enhancedCpcEnabled;
	/**
	 * Constructor
	 * @param boolean enhancedCpcEnabled
	 * @return GGAdwordsTypeManualCPC
	 */
	public function __construct($_enhancedCpcEnabled = null)
	{
		GGAdwordsWsdlClass::__construct(array('enhancedCpcEnabled'=>$_enhancedCpcEnabled));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>