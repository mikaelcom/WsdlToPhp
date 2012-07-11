<?php
/**
 * Class file for EbayTradingTypeFeedbackDetailArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeFeedbackDetailArrayType
 * Documentation : Contains multiple individual feedback detail entries.
 * @date 04/07/2012
 */
class EbayTradingTypeFeedbackDetailArrayType extends EbayTradingWsdlClass
{
	/**
	 * The FeedbackDetail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : Contains a single feedback detail entry. Output only.
	 * @var EbayTradingTypeFeedbackDetailType
	 */
	public $FeedbackDetail;
	/**
	 * Constructor
	 * @param EbayTradingTypeFeedbackDetailType FeedbackDetail
	 * @return EbayTradingTypeFeedbackDetailArrayType
	 */
	public function __construct($_FeedbackDetail = null)
	{
		parent::__construct(array('FeedbackDetail'=>$_FeedbackDetail));
	}
	/**
	 * Set FeedbackDetail
	 * @param FeedbackDetailType FeedbackDetail
	 * @return FeedbackDetailType
	 */
	public function setFeedbackDetail($_FeedbackDetail)
	{
		return ($this->FeedbackDetail = $_FeedbackDetail);
	}
	/**
	 * Get FeedbackDetail
	 * @return EbayTradingTypeFeedbackDetailType
	 */
	public function getFeedbackDetail()
	{
		return $this->FeedbackDetail;
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