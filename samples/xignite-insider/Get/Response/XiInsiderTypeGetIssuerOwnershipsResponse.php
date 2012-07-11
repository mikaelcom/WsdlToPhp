<?php
/**
 * Class file for XiInsiderTypeGetIssuerOwnershipsResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetIssuerOwnershipsResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetIssuerOwnershipsResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetIssuerOwnershipsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeIssuerOwnerships
	 */
	public $GetIssuerOwnershipsResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeIssuerOwnerships GetIssuerOwnershipsResult
	 * @return XiInsiderTypeGetIssuerOwnershipsResponse
	 */
	public function __construct($_GetIssuerOwnershipsResult = null)
	{
		parent::__construct(array('GetIssuerOwnershipsResult'=>$_GetIssuerOwnershipsResult));
	}
	/**
	 * Set GetIssuerOwnershipsResult
	 * @param IssuerOwnerships GetIssuerOwnershipsResult
	 * @return IssuerOwnerships
	 */
	public function setGetIssuerOwnershipsResult($_GetIssuerOwnershipsResult)
	{
		return ($this->GetIssuerOwnershipsResult = $_GetIssuerOwnershipsResult);
	}
	/**
	 * Get GetIssuerOwnershipsResult
	 * @return XiInsiderTypeIssuerOwnerships
	 */
	public function getGetIssuerOwnershipsResult()
	{
		return $this->GetIssuerOwnershipsResult;
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