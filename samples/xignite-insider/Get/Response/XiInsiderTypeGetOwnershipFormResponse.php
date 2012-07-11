<?php
/**
 * Class file for XiInsiderTypeGetOwnershipFormResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetOwnershipFormResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetOwnershipFormResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetOwnershipFormResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeOwnershipDocument
	 */
	public $GetOwnershipFormResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeOwnershipDocument GetOwnershipFormResult
	 * @return XiInsiderTypeGetOwnershipFormResponse
	 */
	public function __construct($_GetOwnershipFormResult = null)
	{
		parent::__construct(array('GetOwnershipFormResult'=>$_GetOwnershipFormResult));
	}
	/**
	 * Set GetOwnershipFormResult
	 * @param ownershipDocument GetOwnershipFormResult
	 * @return ownershipDocument
	 */
	public function setGetOwnershipFormResult($_GetOwnershipFormResult)
	{
		return ($this->GetOwnershipFormResult = $_GetOwnershipFormResult);
	}
	/**
	 * Get GetOwnershipFormResult
	 * @return XiInsiderTypeownershipDocument
	 */
	public function getGetOwnershipFormResult()
	{
		return $this->GetOwnershipFormResult;
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