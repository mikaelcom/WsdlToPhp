<?php
/**
 * Class file for EbayTradingTypeBuyerRoleMetricsType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeBuyerRoleMetricsType
 * Documentation : Specifies 1 year feedback metrics as buyer.
 * @date 04/07/2012
 */
class EbayTradingTypeBuyerRoleMetricsType extends EbayTradingWsdlClass
{
	/**
	 * The PositiveFeedbackLeftCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of positive feedback entries given as a buyer.
	 * @var int
	 */
	public $PositiveFeedbackLeftCount;
	/**
	 * The NegativeFeedbackLeftCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of negative feedback entries given as a buyer.
	 * @var int
	 */
	public $NegativeFeedbackLeftCount;
	/**
	 * The NeutralFeedbackLeftCount
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Count of neutral feedback entries given as a buyer.
	 * @var int
	 */
	public $NeutralFeedbackLeftCount;
	/**
	 * The FeedbackLeftPercent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Percentage of leaving feedback as a buyer.
	 * @var float
	 */
	public $FeedbackLeftPercent;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int PositiveFeedbackLeftCount
	 * @param int NegativeFeedbackLeftCount
	 * @param int NeutralFeedbackLeftCount
	 * @param float FeedbackLeftPercent
	 * @param DOMDocument any
	 * @return EbayTradingTypeBuyerRoleMetricsType
	 */
	public function __construct($_PositiveFeedbackLeftCount = null,$_NegativeFeedbackLeftCount = null,$_NeutralFeedbackLeftCount = null,$_FeedbackLeftPercent = null,$_any = null)
	{
		parent::__construct(array('PositiveFeedbackLeftCount'=>$_PositiveFeedbackLeftCount,'NegativeFeedbackLeftCount'=>$_NegativeFeedbackLeftCount,'NeutralFeedbackLeftCount'=>$_NeutralFeedbackLeftCount,'FeedbackLeftPercent'=>$_FeedbackLeftPercent,'any'=>$_any));
	}
	/**
	 * Set PositiveFeedbackLeftCount
	 * @param int PositiveFeedbackLeftCount
	 * @return int
	 */
	public function setPositiveFeedbackLeftCount($_PositiveFeedbackLeftCount)
	{
		return ($this->PositiveFeedbackLeftCount = $_PositiveFeedbackLeftCount);
	}
	/**
	 * Get PositiveFeedbackLeftCount
	 * @return int
	 */
	public function getPositiveFeedbackLeftCount()
	{
		return $this->PositiveFeedbackLeftCount;
	}
	/**
	 * Set NegativeFeedbackLeftCount
	 * @param int NegativeFeedbackLeftCount
	 * @return int
	 */
	public function setNegativeFeedbackLeftCount($_NegativeFeedbackLeftCount)
	{
		return ($this->NegativeFeedbackLeftCount = $_NegativeFeedbackLeftCount);
	}
	/**
	 * Get NegativeFeedbackLeftCount
	 * @return int
	 */
	public function getNegativeFeedbackLeftCount()
	{
		return $this->NegativeFeedbackLeftCount;
	}
	/**
	 * Set NeutralFeedbackLeftCount
	 * @param int NeutralFeedbackLeftCount
	 * @return int
	 */
	public function setNeutralFeedbackLeftCount($_NeutralFeedbackLeftCount)
	{
		return ($this->NeutralFeedbackLeftCount = $_NeutralFeedbackLeftCount);
	}
	/**
	 * Get NeutralFeedbackLeftCount
	 * @return int
	 */
	public function getNeutralFeedbackLeftCount()
	{
		return $this->NeutralFeedbackLeftCount;
	}
	/**
	 * Set FeedbackLeftPercent
	 * @param float FeedbackLeftPercent
	 * @return float
	 */
	public function setFeedbackLeftPercent($_FeedbackLeftPercent)
	{
		return ($this->FeedbackLeftPercent = $_FeedbackLeftPercent);
	}
	/**
	 * Get FeedbackLeftPercent
	 * @return float
	 */
	public function getFeedbackLeftPercent()
	{
		return $this->FeedbackLeftPercent;
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