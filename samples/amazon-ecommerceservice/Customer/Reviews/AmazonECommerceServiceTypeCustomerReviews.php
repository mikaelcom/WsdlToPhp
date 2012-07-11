<?php
/**
 * Class file for AmazonECommerceServiceTypeCustomerReviews
 * @date 10/07/2012
 */
/**
 * Class AmazonECommerceServiceTypeCustomerReviews
 * @date 10/07/2012
 */
class AmazonECommerceServiceTypeCustomerReviews extends AmazonECommerceServiceWsdlClass
{
	/**
	 * The IFrameURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $IFrameURL;
	/**
	 * The HasReviews
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $HasReviews;
	/**
	 * Constructor
	 * @param string IFrameURL
	 * @param boolean HasReviews
	 * @return AmazonECommerceServiceTypeCustomerReviews
	 */
	public function __construct($_IFrameURL = null,$_HasReviews = null)
	{
		parent::__construct(array('IFrameURL'=>$_IFrameURL,'HasReviews'=>$_HasReviews));
	}
	/**
	 * Set IFrameURL
	 * @param string IFrameURL
	 * @return string
	 */
	public function setIFrameURL($_IFrameURL)
	{
		return ($this->IFrameURL = $_IFrameURL);
	}
	/**
	 * Get IFrameURL
	 * @return string
	 */
	public function getIFrameURL()
	{
		return $this->IFrameURL;
	}
	/**
	 * Set HasReviews
	 * @param boolean HasReviews
	 * @return boolean
	 */
	public function setHasReviews($_HasReviews)
	{
		return ($this->HasReviews = $_HasReviews);
	}
	/**
	 * Get HasReviews
	 * @return boolean
	 */
	public function getHasReviews()
	{
		return $this->HasReviews;
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