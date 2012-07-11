<?php
/**
 * Class file for SPListsTypeAddListResponse
 * @date 07/07/2012
 */
/**
 * Class SPListsTypeAddListResponse
 * @date 07/07/2012
 */
class SPListsTypeAddListResponse extends SPListsWsdlClass
{
	/**
	 * The AddListResult
	 * @var SPListsTypeAddListResult
	 */
	public $AddListResult;
	/**
	 * Constructor
	 * @param SPListsTypeAddListResult AddListResult
	 * @return SPListsTypeAddListResponse
	 */
	public function __construct($_AddListResult = null)
	{
		parent::__construct(array('AddListResult'=>$_AddListResult));
	}
	/**
	 * Set AddListResult
	 * @param AddListResult AddListResult
	 * @return AddListResult
	 */
	public function setAddListResult($_AddListResult)
	{
		return ($this->AddListResult = $_AddListResult);
	}
	/**
	 * Get AddListResult
	 * @return SPListsTypeAddListResult
	 */
	public function getAddListResult()
	{
		return $this->AddListResult;
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