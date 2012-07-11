<?php
/**
 * Class file for XiInsiderTypeGetInsiderOwnershipsResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetInsiderOwnershipsResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetInsiderOwnershipsResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetInsiderOwnershipsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeInsiderOwnerships
	 */
	public $GetInsiderOwnershipsResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeInsiderOwnerships GetInsiderOwnershipsResult
	 * @return XiInsiderTypeGetInsiderOwnershipsResponse
	 */
	public function __construct($_GetInsiderOwnershipsResult = null)
	{
		parent::__construct(array('GetInsiderOwnershipsResult'=>$_GetInsiderOwnershipsResult));
	}
	/**
	 * Set GetInsiderOwnershipsResult
	 * @param InsiderOwnerships GetInsiderOwnershipsResult
	 * @return InsiderOwnerships
	 */
	public function setGetInsiderOwnershipsResult($_GetInsiderOwnershipsResult)
	{
		return ($this->GetInsiderOwnershipsResult = $_GetInsiderOwnershipsResult);
	}
	/**
	 * Get GetInsiderOwnershipsResult
	 * @return XiInsiderTypeInsiderOwnerships
	 */
	public function getGetInsiderOwnershipsResult()
	{
		return $this->GetInsiderOwnershipsResult;
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