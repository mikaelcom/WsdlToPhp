<?php
/**
 * Class file for SPListsTypeGetVersionCollectionResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetVersionCollectionResponse
 * @date 07/07/2012
 */
class SPListsTypeGetVersionCollectionResponse extends SPListsWsdlClass
{
	/**
	 * The GetVersionCollectionResult
	 * @var SPListsTypeGetVersionCollectionResult
	 */
	public $GetVersionCollectionResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetVersionCollectionResult GetVersionCollectionResult
	 * @return SPListsTypeGetVersionCollectionResponse
	 */
	public function __construct($_GetVersionCollectionResult = null)
	{
		parent::__construct(array('GetVersionCollectionResult'=>$_GetVersionCollectionResult));
	}
	/**
	 * Set GetVersionCollectionResult
	 * @param GetVersionCollectionResult GetVersionCollectionResult
	 * @return GetVersionCollectionResult
	 */
	public function setGetVersionCollectionResult($_GetVersionCollectionResult)
	{
		return ($this->GetVersionCollectionResult = $_GetVersionCollectionResult);
	}
	/**
	 * Get GetVersionCollectionResult
	 * @return SPListsTypeGetVersionCollectionResult
	 */
	public function getGetVersionCollectionResult()
	{
		return $this->GetVersionCollectionResult;
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