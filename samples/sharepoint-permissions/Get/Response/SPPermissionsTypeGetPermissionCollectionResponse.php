<?php
/**
 * Class file for SPPermissionsTypeGetPermissionCollectionResponse
 * @date 06/07/2012
 */
/**
 * Class SPPermissionsTypeGetPermissionCollectionResponse
 * @date 06/07/2012
 */
class SPPermissionsTypeGetPermissionCollectionResponse extends SPPermissionsWsdlClass
{
	/**
	 * The GetPermissionCollectionResult
	 * @var SPPermissionsTypeGetPermissionCollectionResult
	 */
	public $GetPermissionCollectionResult;
	/**
	 * Constructor
	 * @param SPPermissionsTypeGetPermissionCollectionResult GetPermissionCollectionResult
	 * @return SPPermissionsTypeGetPermissionCollectionResponse
	 */
	public function __construct($_GetPermissionCollectionResult = null)
	{
		parent::__construct(array('GetPermissionCollectionResult'=>$_GetPermissionCollectionResult));
	}
	/**
	 * Set GetPermissionCollectionResult
	 * @param GetPermissionCollectionResult GetPermissionCollectionResult
	 * @return GetPermissionCollectionResult
	 */
	public function setGetPermissionCollectionResult($_GetPermissionCollectionResult)
	{
		return ($this->GetPermissionCollectionResult = $_GetPermissionCollectionResult);
	}
	/**
	 * Get GetPermissionCollectionResult
	 * @return SPPermissionsTypeGetPermissionCollectionResult
	 */
	public function getGetPermissionCollectionResult()
	{
		return $this->GetPermissionCollectionResult;
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