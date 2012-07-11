<?php
/**
 * Class file for AmazonWebServicesTypeSellerFeedback
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeSellerFeedback
 * @date 10/07/2012
 */
class AmazonWebServicesTypeSellerFeedback extends AmazonWebServicesWsdlClass
{
	/**
	 * The Feedback
	 * @var FeedbackArray
	 */
	public $Feedback;
	/**
	 * Constructor
	 * @param FeedbackArray Feedback
	 * @return AmazonWebServicesTypeSellerFeedback
	 */
	public function __construct($_Feedback = null)
	{
		parent::__construct(array('Feedback'=>$_Feedback));
	}
	/**
	 * Set Feedback
	 * @param FeedbackArray Feedback
	 * @return FeedbackArray
	 */
	public function setFeedback($_Feedback)
	{
		return ($this->Feedback = $_Feedback);
	}
	/**
	 * Get Feedback
	 * @return FeedbackArray
	 */
	public function getFeedback()
	{
		return $this->Feedback;
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