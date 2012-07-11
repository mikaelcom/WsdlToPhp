<?php
/**
 * Class file for EbayTradingTypeFeedbackPeriodArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackPeriodArrayType
 * Documentation : Container for a set of feedback statistics. Contains zero one or multiple FeedbackPeriod objects. Output only, for the summary feedback data returned by GetFeedback.
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackPeriodArrayType extends EbayTradingWsdlClass
{
	/**
	 * The FeedbackPeriod
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains one feedback statistic giving length of the period being reported (e.g. last 7 days prior to the call), and total number of feedback entries (of the type given by the container, e.g. positive feedback) submitted during the indicated period. Returned if no detail level is specified.
	 * @var EbayTradingTypeFeedbackPeriodType
	 */
	public $FeedbackPeriod;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeedbackPeriodType FeedbackPeriod
	 * @return EbayTradingTypeFeedbackPeriodArrayType
	 */
	public function __construct($_FeedbackPeriod = null)
	{
		parent::__construct(array('FeedbackPeriod'=>$_FeedbackPeriod));
	}
	/**
	 * Set FeedbackPeriod
	 * @param FeedbackPeriodType FeedbackPeriod
	 * @return FeedbackPeriodType
	 */
	public function setFeedbackPeriod($_FeedbackPeriod)
	{
		return ($this->FeedbackPeriod = $_FeedbackPeriod);
	}
	/**
	 * Get FeedbackPeriod
	 * @return EbayTradingTypeFeedbackPeriodType
	 */
	public function getFeedbackPeriod()
	{
		return $this->FeedbackPeriod;
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