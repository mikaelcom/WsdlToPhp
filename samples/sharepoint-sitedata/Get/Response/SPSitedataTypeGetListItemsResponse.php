<?php
/**
 * Class file for SPSitedataTypeGetListItemsResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetListItemsResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetListItemsResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetListItemsResult
	 * @var string
	 */
	public $GetListItemsResult;
	/**
	 * Constructor
	 * @param string GetListItemsResult
	 * @return SPSitedataTypeGetListItemsResponse
	 */
	public function __construct($_GetListItemsResult = null)
	{
		parent::__construct(array('GetListItemsResult'=>$_GetListItemsResult));
	}
	/**
	 * Set GetListItemsResult
	 * @param string GetListItemsResult
	 * @return string
	 */
	public function setGetListItemsResult($_GetListItemsResult)
	{
		return ($this->GetListItemsResult = $_GetListItemsResult);
	}
	/**
	 * Get GetListItemsResult
	 * @return string
	 */
	public function getGetListItemsResult()
	{
		return $this->GetListItemsResult;
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