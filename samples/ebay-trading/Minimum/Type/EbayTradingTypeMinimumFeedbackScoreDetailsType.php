<?php
/**
 * Class file for EbayTradingTypeMinimumFeedbackScoreDetailsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeMinimumFeedbackScoreDetailsType
 * Documentation : [Selling] The minimum feedback score used to determine whether a buyer should be blocked from bidding.
 * @date 04/07/2012
 */
class EbayTradingTypeMinimumFeedbackScoreDetailsType extends EbayTradingWsdlClass
{
	/**
	 * The FeedbackScore
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : [Selling] The values supported for the minimum feedback score restriction.
	 * @var int
	 */
	public $FeedbackScore;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int FeedbackScore
	 * @param DOMDocument any
	 * @return EbayTradingTypeMinimumFeedbackScoreDetailsType
	 */
	public function __construct($_FeedbackScore = null,$_any = null)
	{
		parent::__construct(array('FeedbackScore'=>$_FeedbackScore,'any'=>$_any));
	}
	/**
	 * Set FeedbackScore
	 * @param int FeedbackScore
	 * @return int
	 */
	public function setFeedbackScore($_FeedbackScore)
	{
		return ($this->FeedbackScore = $_FeedbackScore);
	}
	/**
	 * Get FeedbackScore
	 * @return int
	 */
	public function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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