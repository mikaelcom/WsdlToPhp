<?php
/**
 * Class file for SPListsTypeGetListItemChangesSinceTokenResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeGetListItemChangesSinceTokenResponse
 * @date 07/07/2012
 */
class SPListsTypeGetListItemChangesSinceTokenResponse extends SPListsWsdlClass
{
	/**
	 * The GetListItemChangesSinceTokenResult
	 * @var SPListsTypeGetListItemChangesSinceTokenResult
	 */
	public $GetListItemChangesSinceTokenResult;
	/**
	 * Constructor
	 * @param SPListsTypeGetListItemChangesSinceTokenResult GetListItemChangesSinceTokenResult
	 * @return SPListsTypeGetListItemChangesSinceTokenResponse
	 */
	public function __construct($_GetListItemChangesSinceTokenResult = null)
	{
		parent::__construct(array('GetListItemChangesSinceTokenResult'=>$_GetListItemChangesSinceTokenResult));
	}
	/**
	 * Set GetListItemChangesSinceTokenResult
	 * @param GetListItemChangesSinceTokenResult GetListItemChangesSinceTokenResult
	 * @return GetListItemChangesSinceTokenResult
	 */
	public function setGetListItemChangesSinceTokenResult($_GetListItemChangesSinceTokenResult)
	{
		return ($this->GetListItemChangesSinceTokenResult = $_GetListItemChangesSinceTokenResult);
	}
	/**
	 * Get GetListItemChangesSinceTokenResult
	 * @return SPListsTypeGetListItemChangesSinceTokenResult
	 */
	public function getGetListItemChangesSinceTokenResult()
	{
		return $this->GetListItemChangesSinceTokenResult;
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