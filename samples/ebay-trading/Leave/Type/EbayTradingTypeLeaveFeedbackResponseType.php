<?php
/**
 * Class file for EbayTradingTypeLeaveFeedbackResponseType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLeaveFeedbackResponseType
 * Documentation : LeaveFeedback response message includes an acknowledgement if the feedback was successfully left.
 * @date 04/07/2012
 */
class EbayTradingTypeLeaveFeedbackResponseType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The FeedbackID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The ID of the feedback that has been left.
	 * @var string
	 */
	public $FeedbackID;
	/**
	 * Constructor
	 * @param string FeedbackID
	 * @return EbayTradingTypeLeaveFeedbackResponseType
	 */
	public function __construct($_FeedbackID = null)
	{
		EbayTradingWsdlClass::__construct(array('FeedbackID'=>$_FeedbackID));
	}
	/**
	 * Set FeedbackID
	 * @param string FeedbackID
	 * @return string
	 */
	public function setFeedbackID($_FeedbackID)
	{
		return ($this->FeedbackID = $_FeedbackID);
	}
	/**
	 * Get FeedbackID
	 * @return string
	 */
	public function getFeedbackID()
	{
		return $this->FeedbackID;
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