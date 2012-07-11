<?php
/**
 * Class file for SPListsTypeGetListCollectionResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListCollectionResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListCollectionResponse extends SPListsWsdlClass
{
	/**
	 * The GetListCollectionResult
	 * @var SPListsTypeGetListCollectionResult
	 */
	public $GetListCollectionResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListCollectionResult GetListCollectionResult
	 * @return SPListsTypeGetListCollectionResponse
	 */
	public function __construct($_GetListCollectionResult = null)
	{
		parent::__construct(array('GetListCollectionResult'=>$_GetListCollectionResult));
	}
	/**
	 * Set GetListCollectionResult
	 * @param GetListCollectionResult GetListCollectionResult
	 * @return GetListCollectionResult
	 */
	public function setGetListCollectionResult($_GetListCollectionResult)
	{
		return ($this->GetListCollectionResult = $_GetListCollectionResult);
	}
	/**
	 * Get GetListCollectionResult
	 * @return SPListsTypeGetListCollectionResult
	 */
	public function getGetListCollectionResult()
	{
		return $this->GetListCollectionResult;
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