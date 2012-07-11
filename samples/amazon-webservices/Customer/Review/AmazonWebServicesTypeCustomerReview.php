<?php
/**
 * Class file for AmazonWebServicesTypeCustomerReview
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeCustomerReview
 * @date 10/07/2012
 */
class AmazonWebServicesTypeCustomerReview extends AmazonWebServicesWsdlClass
{
	/**
	 * The Rating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Rating;
	/**
	 * The Summary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Summary;
	/**
	 * The Comment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Comment;
	/**
	 * Constructor
	 * @param string Rating
	 * @param string Summary
	 * @param string Comment
	 * @return AmazonWebServicesTypeCustomerReview
	 */
	public function __construct($_Rating = null,$_Summary = null,$_Comment = null)
	{
		parent::__construct(array('Rating'=>$_Rating,'Summary'=>$_Summary,'Comment'=>$_Comment));
	}
	/**
	 * Set Rating
	 * @param string Rating
	 * @return string
	 */
	public function setRating($_Rating)
	{
		return ($this->Rating = $_Rating);
	}
	/**
	 * Get Rating
	 * @return string
	 */
	public function getRating()
	{
		return $this->Rating;
	}
	/**
	 * Set Summary
	 * @param string Summary
	 * @return string
	 */
	public function setSummary($_Summary)
	{
		return ($this->Summary = $_Summary);
	}
	/**
	 * Get Summary
	 * @return string
	 */
	public function getSummary()
	{
		return $this->Summary;
	}
	/**
	 * Set Comment
	 * @param string Comment
	 * @return string
	 */
	public function setComment($_Comment)
	{
		return ($this->Comment = $_Comment);
	}
	/**
	 * Get Comment
	 * @return string
	 */
	public function getComment()
	{
		return $this->Comment;
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