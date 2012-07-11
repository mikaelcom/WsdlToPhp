<?php
/**
 * Class file for AmazonAlexaTypeCategoryListings
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryListings
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryListings extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeCategoryListingsRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCategoryListingsRequest Request
	 * @return AmazonAlexaTypeCategoryListings
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param CategoryListingsRequest Request
	 * @return CategoryListingsRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeCategoryListingsRequest
	 */
	public function getRequest()
	{
		return $this->Request;
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