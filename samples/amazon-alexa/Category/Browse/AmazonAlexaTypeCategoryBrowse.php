<?php
/**
 * Class file for AmazonAlexaTypeCategoryBrowse
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCategoryBrowse
 * @date 10/07/2012
 */
class AmazonAlexaTypeCategoryBrowse extends AmazonAlexaWsdlClass
{
	/**
	 * The Request
	 * @var AmazonAlexaTypeCategoryBrowseRequest
	 */
	public $Request;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeCategoryBrowseRequest Request
	 * @return AmazonAlexaTypeCategoryBrowse
	 */
	public function __construct($_Request = null)
	{
		parent::__construct(array('Request'=>$_Request));
	}
	/**
	 * Set Request
	 * @param CategoryBrowseRequest Request
	 * @return CategoryBrowseRequest
	 */
	public function setRequest($_Request)
	{
		return ($this->Request = $_Request);
	}
	/**
	 * Get Request
	 * @return AmazonAlexaTypeCategoryBrowseRequest
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