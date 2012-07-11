<?php
/**
 * Class file for XiInsiderTypeGetOfficersResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetOfficersResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetOfficersResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetOfficersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRoster
	 */
	public $GetOfficersResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeRoster GetOfficersResult
	 * @return XiInsiderTypeGetOfficersResponse
	 */
	public function __construct($_GetOfficersResult = null)
	{
		parent::__construct(array('GetOfficersResult'=>$_GetOfficersResult));
	}
	/**
	 * Set GetOfficersResult
	 * @param Roster GetOfficersResult
	 * @return Roster
	 */
	public function setGetOfficersResult($_GetOfficersResult)
	{
		return ($this->GetOfficersResult = $_GetOfficersResult);
	}
	/**
	 * Get GetOfficersResult
	 * @return XiInsiderTypeRoster
	 */
	public function getGetOfficersResult()
	{
		return $this->GetOfficersResult;
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