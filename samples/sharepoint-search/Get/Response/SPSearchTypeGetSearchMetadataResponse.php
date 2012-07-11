<?php
/**
 * Class file for SPSearchTypeGetSearchMetadataResponse
 * @date 06/07/2012
 */
/**
 * Class SPSearchTypeGetSearchMetadataResponse
 * @date 06/07/2012
 */
class SPSearchTypeGetSearchMetadataResponse extends SPSearchWsdlClass
{
	/**
	 * The GetSearchMetadataResult
	 * @var SPSearchTypeGetSearchMetadataResult
	 */
	public $GetSearchMetadataResult;
	/**
	 * Constructor
	 * @param SPSearchTypeGetSearchMetadataResult GetSearchMetadataResult
	 * @return SPSearchTypeGetSearchMetadataResponse
	 */
	public function __construct($_GetSearchMetadataResult = null)
	{
		parent::__construct(array('GetSearchMetadataResult'=>$_GetSearchMetadataResult));
	}
	/**
	 * Set GetSearchMetadataResult
	 * @param GetSearchMetadataResult GetSearchMetadataResult
	 * @return GetSearchMetadataResult
	 */
	public function setGetSearchMetadataResult($_GetSearchMetadataResult)
	{
		return ($this->GetSearchMetadataResult = $_GetSearchMetadataResult);
	}
	/**
	 * Get GetSearchMetadataResult
	 * @return SPSearchTypeGetSearchMetadataResult
	 */
	public function getGetSearchMetadataResult()
	{
		return $this->GetSearchMetadataResult;
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