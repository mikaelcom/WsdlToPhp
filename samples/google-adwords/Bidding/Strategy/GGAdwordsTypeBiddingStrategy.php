<?php
/**
 * Class file for GGAdwordsTypeBiddingStrategy
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBiddingStrategy
 * Documentation : A campaign's bidding strategy, such as manual CPC, manual CPM, budget optimizer, etc. <span class="constraint AdxEnabled">This is disabled for AdX.</span>
 * @date 03/07/2012
 */
class GGAdwordsTypeBiddingStrategy extends GGAdwordsWsdlClass
{
	/**
	 * The BiddingStrategyType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of BiddingStrategy. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $BiddingStrategyType;
	/**
	 * Constructor
	 * @param string BiddingStrategyType
	 * @return GGAdwordsTypeBiddingStrategy
	 */
	public function __construct($_BiddingStrategyType = null)
	{
		parent::__construct(array('BiddingStrategyType'=>$_BiddingStrategyType));
	}
	/**
	 * Set BiddingStrategyType
	 * @param string BiddingStrategyType
	 * @return string
	 */
	public function setBiddingStrategyType($_BiddingStrategyType)
	{
		return ($this->BiddingStrategyType = $_BiddingStrategyType);
	}
	/**
	 * Get BiddingStrategyType
	 * @return string
	 */
	public function getBiddingStrategyType()
	{
		return $this->BiddingStrategyType;
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