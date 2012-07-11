<?php
/**
 * Class file for XiInsiderTypeGetRosterResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetRosterResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetRosterResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetRosterResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRoster
	 */
	public $GetRosterResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeRoster GetRosterResult
	 * @return XiInsiderTypeGetRosterResponse
	 */
	public function __construct($_GetRosterResult = null)
	{
		parent::__construct(array('GetRosterResult'=>$_GetRosterResult));
	}
	/**
	 * Set GetRosterResult
	 * @param Roster GetRosterResult
	 * @return Roster
	 */
	public function setGetRosterResult($_GetRosterResult)
	{
		return ($this->GetRosterResult = $_GetRosterResult);
	}
	/**
	 * Get GetRosterResult
	 * @return XiInsiderTypeRoster
	 */
	public function getGetRosterResult()
	{
		return $this->GetRosterResult;
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