<?php
/**
 * Class file for SPUserGroupTypeGetAllUserCollectionFromWebResponse
 * @date 06/07/2012
 */
/**
 * Class SPUserGroupTypeGetAllUserCollectionFromWebResponse
 * @date 06/07/2012
 */
class SPUserGroupTypeGetAllUserCollectionFromWebResponse extends SPUserGroupWsdlClass
{
	/**
	 * The GetAllUserCollectionFromWebResult
	 * @var SPUserGroupTypeGetAllUserCollectionFromWebResult
	 */
	public $GetAllUserCollectionFromWebResult;
	/**
	 * Constructor
	 * @param SPUserGroupTypeGetAllUserCollectionFromWebResult GetAllUserCollectionFromWebResult
	 * @return SPUserGroupTypeGetAllUserCollectionFromWebResponse
	 */
	public function __construct($_GetAllUserCollectionFromWebResult = null)
	{
		parent::__construct(array('GetAllUserCollectionFromWebResult'=>$_GetAllUserCollectionFromWebResult));
	}
	/**
	 * Set GetAllUserCollectionFromWebResult
	 * @param GetAllUserCollectionFromWebResult GetAllUserCollectionFromWebResult
	 * @return GetAllUserCollectionFromWebResult
	 */
	public function setGetAllUserCollectionFromWebResult($_GetAllUserCollectionFromWebResult)
	{
		return ($this->GetAllUserCollectionFromWebResult = $_GetAllUserCollectionFromWebResult);
	}
	/**
	 * Get GetAllUserCollectionFromWebResult
	 * @return SPUserGroupTypeGetAllUserCollectionFromWebResult
	 */
	public function getGetAllUserCollectionFromWebResult()
	{
		return $this->GetAllUserCollectionFromWebResult;
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