<?php
/**
 * Class file for SPListsTypeGetListContentTypesAndPropertiesResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListContentTypesAndPropertiesResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListContentTypesAndPropertiesResponse extends SPListsWsdlClass
{
	/**
	 * The GetListContentTypesAndPropertiesResult
	 * @var SPListsTypeGetListContentTypesAndPropertiesResult
	 */
	public $GetListContentTypesAndPropertiesResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListContentTypesAndPropertiesResult GetListContentTypesAndPropertiesResult
	 * @return SPListsTypeGetListContentTypesAndPropertiesResponse
	 */
	public function __construct($_GetListContentTypesAndPropertiesResult = null)
	{
		parent::__construct(array('GetListContentTypesAndPropertiesResult'=>$_GetListContentTypesAndPropertiesResult));
	}
	/**
	 * Set GetListContentTypesAndPropertiesResult
	 * @param GetListContentTypesAndPropertiesResult GetListContentTypesAndPropertiesResult
	 * @return GetListContentTypesAndPropertiesResult
	 */
	public function setGetListContentTypesAndPropertiesResult($_GetListContentTypesAndPropertiesResult)
	{
		return ($this->GetListContentTypesAndPropertiesResult = $_GetListContentTypesAndPropertiesResult);
	}
	/**
	 * Get GetListContentTypesAndPropertiesResult
	 * @return SPListsTypeGetListContentTypesAndPropertiesResult
	 */
	public function getGetListContentTypesAndPropertiesResult()
	{
		return $this->GetListContentTypesAndPropertiesResult;
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