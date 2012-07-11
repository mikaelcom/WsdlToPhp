<?php
/**
 * Class file for GGAdwordsTypeBiddingTransition
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeBiddingTransition
 * Documentation : Used to switch a campaign's bidding strategy.
 * @date 03/07/2012
 */
class GGAdwordsTypeBiddingTransition extends GGAdwordsWsdlClass
{
	/**
	 * The targetBiddingStrategy
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : <span class="constraint Required">This field is required and should not be {@code null}.</span>
	 * @var GGAdwordsTypeBiddingStrategy
	 */
	public $targetBiddingStrategy;
	/**
	 * The BiddingTransitionType
	 * Meta informations :
	 * 	- maxOccurs : 1
	 * 	- minOccurs : 0
	 * 	- documentation : Indicates that this instance is a subtype of BiddingTransition. Although this field is returned in the response, it is ignored on input and cannot be selected. Specify xsi:type instead.
	 * @var string
	 */
	public $BiddingTransitionType;
	/**
	 * Constructor
	 * @param GGAdwordsTypeBiddingStrategy targetBiddingStrategy
	 * @param string BiddingTransitionType
	 * @return GGAdwordsTypeBiddingTransition
	 */
	public function __construct($_targetBiddingStrategy = null,$_BiddingTransitionType = null)
	{
		parent::__construct(array('targetBiddingStrategy'=>$_targetBiddingStrategy,'BiddingTransitionType'=>$_BiddingTransitionType));
	}
	/**
	 * Set targetBiddingStrategy
	 * @param BiddingStrategy targetBiddingStrategy
	 * @return BiddingStrategy
	 */
	public function setTargetBiddingStrategy($_targetBiddingStrategy)
	{
		return ($this->targetBiddingStrategy = $_targetBiddingStrategy);
	}
	/**
	 * Get targetBiddingStrategy
	 * @return GGAdwordsTypeBiddingStrategy
	 */
	public function getTargetBiddingStrategy()
	{
		return $this->targetBiddingStrategy;
	}
	/**
	 * Set BiddingTransitionType
	 * @param string BiddingTransitionType
	 * @return string
	 */
	public function setBiddingTransitionType($_BiddingTransitionType)
	{
		return ($this->BiddingTransitionType = $_BiddingTransitionType);
	}
	/**
	 * Get BiddingTransitionType
	 * @return string
	 */
	public function getBiddingTransitionType()
	{
		return $this->BiddingTransitionType;
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