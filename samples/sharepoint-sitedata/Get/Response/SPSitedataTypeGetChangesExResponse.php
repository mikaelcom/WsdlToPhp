<?php
/**
 * Class file for SPSitedataTypeGetChangesExResponse
 * @date 06/07/2012
 */
/**
 * Class SPSitedataTypeGetChangesExResponse
 * @date 06/07/2012
 */
class SPSitedataTypeGetChangesExResponse extends SPSitedataWsdlClass
{
	/**
	 * The GetChangesExResult
	 * @var string
	 */
	public $GetChangesExResult;
	/**
	 * Constructor
	 * @param string GetChangesExResult
	 * @return SPSitedataTypeGetChangesExResponse
	 */
	public function __construct($_GetChangesExResult = null)
	{
		parent::__construct(array('GetChangesExResult'=>$_GetChangesExResult));
	}
	/**
	 * Set GetChangesExResult
	 * @param string GetChangesExResult
	 * @return string
	 */
	public function setGetChangesExResult($_GetChangesExResult)
	{
		return ($this->GetChangesExResult = $_GetChangesExResult);
	}
	/**
	 * Get GetChangesExResult
	 * @return string
	 */
	public function getGetChangesExResult()
	{
		return $this->GetChangesExResult;
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