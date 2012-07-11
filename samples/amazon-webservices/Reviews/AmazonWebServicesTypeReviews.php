<?php
/**
 * Class file for AmazonWebServicesTypeReviews
 * @date 10/07/2012
 */
/**
 * Class AmazonWebServicesTypeReviews
 * @date 10/07/2012
 */
class AmazonWebServicesTypeReviews extends AmazonWebServicesWsdlClass
{
	/**
	 * The AvgCustomerRating
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $AvgCustomerRating;
	/**
	 * The TotalCustomerReviews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TotalCustomerReviews;
	/**
	 * The CustomerReviews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var CustomerReviewArray
	 */
	public $CustomerReviews;
	/**
	 * Constructor
	 * @param string AvgCustomerRating
	 * @param string TotalCustomerReviews
	 * @param CustomerReviewArray CustomerReviews
	 * @return AmazonWebServicesTypeReviews
	 */
	public function __construct($_AvgCustomerRating = null,$_TotalCustomerReviews = null,$_CustomerReviews = null)
	{
		parent::__construct(array('AvgCustomerRating'=>$_AvgCustomerRating,'TotalCustomerReviews'=>$_TotalCustomerReviews,'CustomerReviews'=>$_CustomerReviews));
	}
	/**
	 * Set AvgCustomerRating
	 * @param string AvgCustomerRating
	 * @return string
	 */
	public function setAvgCustomerRating($_AvgCustomerRating)
	{
		return ($this->AvgCustomerRating = $_AvgCustomerRating);
	}
	/**
	 * Get AvgCustomerRating
	 * @return string
	 */
	public function getAvgCustomerRating()
	{
		return $this->AvgCustomerRating;
	}
	/**
	 * Set TotalCustomerReviews
	 * @param string TotalCustomerReviews
	 * @return string
	 */
	public function setTotalCustomerReviews($_TotalCustomerReviews)
	{
		return ($this->TotalCustomerReviews = $_TotalCustomerReviews);
	}
	/**
	 * Get TotalCustomerReviews
	 * @return string
	 */
	public function getTotalCustomerReviews()
	{
		return $this->TotalCustomerReviews;
	}
	/**
	 * Set CustomerReviews
	 * @param CustomerReviewArray CustomerReviews
	 * @return CustomerReviewArray
	 */
	public function setCustomerReviews($_CustomerReviews)
	{
		return ($this->CustomerReviews = $_CustomerReviews);
	}
	/**
	 * Get CustomerReviews
	 * @return CustomerReviewArray
	 */
	public function getCustomerReviews()
	{
		return $this->CustomerReviews;
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