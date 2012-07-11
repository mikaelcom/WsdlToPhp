<?php
/**
 * Class file for XiInsiderTypeGetRolesResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetRolesResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetRolesResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetRolesResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfRole
	 */
	public $GetRolesResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeArrayOfRole GetRolesResult
	 * @return XiInsiderTypeGetRolesResponse
	 */
	public function __construct($_GetRolesResult = null)
	{
		parent::__construct(array('GetRolesResult'=>new XiInsiderTypeArrayOfRole($_GetRolesResult)));
	}
	/**
	 * Set GetRolesResult
	 * @param ArrayOfRole GetRolesResult
	 * @return ArrayOfRole
	 */
	public function setGetRolesResult($_GetRolesResult)
	{
		return ($this->GetRolesResult = $_GetRolesResult);
	}
	/**
	 * Get GetRolesResult
	 * @return XiInsiderTypeArrayOfRole
	 */
	public function getGetRolesResult()
	{
		return $this->GetRolesResult;
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