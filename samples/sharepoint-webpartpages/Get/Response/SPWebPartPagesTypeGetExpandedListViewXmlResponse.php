<?php
/**
 * Class file for SPWebPartPagesTypeGetExpandedListViewXmlResponse
 * @date 06/07/2012
 */
/**
 * Class SPWebPartPagesTypeGetExpandedListViewXmlResponse
 * @date 06/07/2012
 */
class SPWebPartPagesTypeGetExpandedListViewXmlResponse extends SPWebPartPagesWsdlClass
{
	/**
	 * The GetExpandedListViewXmlResult
	 * @var string
	 */
	public $GetExpandedListViewXmlResult;
	/**
	 * Constructor
	 * @param string GetExpandedListViewXmlResult
	 * @return SPWebPartPagesTypeGetExpandedListViewXmlResponse
	 */
	public function __construct($_GetExpandedListViewXmlResult = null)
	{
		parent::__construct(array('GetExpandedListViewXmlResult'=>$_GetExpandedListViewXmlResult));
	}
	/**
	 * Set GetExpandedListViewXmlResult
	 * @param string GetExpandedListViewXmlResult
	 * @return string
	 */
	public function setGetExpandedListViewXmlResult($_GetExpandedListViewXmlResult)
	{
		return ($this->GetExpandedListViewXmlResult = $_GetExpandedListViewXmlResult);
	}
	/**
	 * Get GetExpandedListViewXmlResult
	 * @return string
	 */
	public function getGetExpandedListViewXmlResult()
	{
		return $this->GetExpandedListViewXmlResult;
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