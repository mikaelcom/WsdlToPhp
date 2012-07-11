<?php
/**
 * Class file for SPSitedataTypeGetContentResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetContentResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetContentResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetContentResult
	 * @var string
	 */
	public $GetContentResult;
	/**
	 * The lastItemIdOnPage
	 * @var string
	 */
	public $lastItemIdOnPage;
	/**
	 * Constructor
	 * @param string GetContentResult
	 * @param string lastItemIdOnPage
	 * @return SPSitedataTypeGetContentResponse
	 */
	public function __construct($_GetContentResult = null,$_lastItemIdOnPage = null)
	{
		parent::__construct(array('GetContentResult'=>$_GetContentResult,'lastItemIdOnPage'=>$_lastItemIdOnPage));
	}
	/**
	 * Set GetContentResult
	 * @param string GetContentResult
	 * @return string
	 */
	public function setGetContentResult($_GetContentResult)
	{
		return ($this->GetContentResult = $_GetContentResult);
	}
	/**
	 * Get GetContentResult
	 * @return string
	 */
	public function getGetContentResult()
	{
		return $this->GetContentResult;
	}
	/**
	 * Set lastItemIdOnPage
	 * @param string lastItemIdOnPage
	 * @return string
	 */
	public function setLastItemIdOnPage($_lastItemIdOnPage)
	{
		return ($this->lastItemIdOnPage = $_lastItemIdOnPage);
	}
	/**
	 * Get lastItemIdOnPage
	 * @return string
	 */
	public function getLastItemIdOnPage()
	{
		return $this->lastItemIdOnPage;
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