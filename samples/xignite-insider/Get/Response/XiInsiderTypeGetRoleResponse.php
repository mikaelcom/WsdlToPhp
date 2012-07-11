<?php
/**
 * Class file for XiInsiderTypeGetRoleResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetRoleResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetRoleResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetRoleResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfRole
	 */
	public $GetRoleResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeArrayOfRole GetRoleResult
	 * @return XiInsiderTypeGetRoleResponse
	 */
	public function __construct($_GetRoleResult = null)
	{
		parent::__construct(array('GetRoleResult'=>new XiInsiderTypeArrayOfRole($_GetRoleResult)));
	}
	/**
	 * Set GetRoleResult
	 * @param ArrayOfRole GetRoleResult
	 * @return ArrayOfRole
	 */
	public function setGetRoleResult($_GetRoleResult)
	{
		return ($this->GetRoleResult = $_GetRoleResult);
	}
	/**
	 * Get GetRoleResult
	 * @return XiInsiderTypeArrayOfRole
	 */
	public function getGetRoleResult()
	{
		return $this->GetRoleResult;
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