<?php
/**
 * Class file for XiEdgarTypeGetManagementOwnershipResponse
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeGetManagementOwnershipResponse
 * @date 08/07/2012
 */
class XiEdgarTypeGetManagementOwnershipResponse extends XiEdgarWsdlClass
{
	/**
	 * The GetManagementOwnershipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiEdgarTypeManagementOwnership
	 */
	public $GetManagementOwnershipResult;
	/**
	 * Constructor
	 * @param XiEdgarTypeManagementOwnership GetManagementOwnershipResult
	 * @return XiEdgarTypeGetManagementOwnershipResponse
	 */
	public function __construct($_GetManagementOwnershipResult = null)
	{
		parent::__construct(array('GetManagementOwnershipResult'=>$_GetManagementOwnershipResult));
	}
	/**
	 * Set GetManagementOwnershipResult
	 * @param ManagementOwnership GetManagementOwnershipResult
	 * @return ManagementOwnership
	 */
	public function setGetManagementOwnershipResult($_GetManagementOwnershipResult)
	{
		return ($this->GetManagementOwnershipResult = $_GetManagementOwnershipResult);
	}
	/**
	 * Get GetManagementOwnershipResult
	 * @return XiEdgarTypeManagementOwnership
	 */
	public function getGetManagementOwnershipResult()
	{
		return $this->GetManagementOwnershipResult;
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