<?php
/**
 * Class file for AmazonWebServicesTypeFeedback
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeFeedback
 * @date 10/07/2012
 */
class AmazonWebServicesTypeFeedback extends AmazonWebServicesWsdlClass
{
	/**
	 * The FeedbackRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $FeedbackRating;
	/**
	 * The FeedbackComments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $FeedbackComments;
	/**
	 * The FeedbackDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $FeedbackDate;
	/**
	 * The FeedbackRater
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $FeedbackRater;
	/**
	 * Constructor
	 * @param string FeedbackRating
	 * @param string FeedbackComments
	 * @param string FeedbackDate
	 * @param string FeedbackRater
	 * @return AmazonWebServicesTypeFeedback
	 */
	public function __construct($_FeedbackRating = null,$_FeedbackComments = null,$_FeedbackDate = null,$_FeedbackRater = null)
	{
		parent::__construct(array('FeedbackRating'=>$_FeedbackRating,'FeedbackComments'=>$_FeedbackComments,'FeedbackDate'=>$_FeedbackDate,'FeedbackRater'=>$_FeedbackRater));
	}
	/**
	 * Set FeedbackRating
	 * @param string FeedbackRating
	 * @return string
	 */
	public function setFeedbackRating($_FeedbackRating)
	{
		return ($this->FeedbackRating = $_FeedbackRating);
	}
	/**
	 * Get FeedbackRating
	 * @return string
	 */
	public function getFeedbackRating()
	{
		return $this->FeedbackRating;
	}
	/**
	 * Set FeedbackComments
	 * @param string FeedbackComments
	 * @return string
	 */
	public function setFeedbackComments($_FeedbackComments)
	{
		return ($this->FeedbackComments = $_FeedbackComments);
	}
	/**
	 * Get FeedbackComments
	 * @return string
	 */
	public function getFeedbackComments()
	{
		return $this->FeedbackComments;
	}
	/**
	 * Set FeedbackDate
	 * @param string FeedbackDate
	 * @return string
	 */
	public function setFeedbackDate($_FeedbackDate)
	{
		return ($this->FeedbackDate = $_FeedbackDate);
	}
	/**
	 * Get FeedbackDate
	 * @return string
	 */
	public function getFeedbackDate()
	{
		return $this->FeedbackDate;
	}
	/**
	 * Set FeedbackRater
	 * @param string FeedbackRater
	 * @return string
	 */
	public function setFeedbackRater($_FeedbackRater)
	{
		return ($this->FeedbackRater = $_FeedbackRater);
	}
	/**
	 * Get FeedbackRater
	 * @return string
	 */
	public function getFeedbackRater()
	{
		return $this->FeedbackRater;
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