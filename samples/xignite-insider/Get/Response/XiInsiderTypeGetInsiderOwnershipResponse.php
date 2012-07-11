<?php
/**
 * Class file for XiInsiderTypeGetInsiderOwnershipResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetInsiderOwnershipResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetInsiderOwnershipResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetInsiderOwnershipResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIssuerOwnerships
	 */
	public $GetInsiderOwnershipResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeIssuerOwnerships GetInsiderOwnershipResult
	 * @return XiInsiderTypeGetInsiderOwnershipResponse
	 */
	public function __construct($_GetInsiderOwnershipResult = null)
	{
		parent::__construct(array('GetInsiderOwnershipResult'=>$_GetInsiderOwnershipResult));
	}
	/**
	 * Set GetInsiderOwnershipResult
	 * @param IssuerOwnerships GetInsiderOwnershipResult
	 * @return IssuerOwnerships
	 */
	public function setGetInsiderOwnershipResult($_GetInsiderOwnershipResult)
	{
		return ($this->GetInsiderOwnershipResult = $_GetInsiderOwnershipResult);
	}
	/**
	 * Get GetInsiderOwnershipResult
	 * @return XiInsiderTypeIssuerOwnerships
	 */
	public function getGetInsiderOwnershipResult()
	{
		return $this->GetInsiderOwnershipResult;
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