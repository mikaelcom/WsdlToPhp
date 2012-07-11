<?php
/**
 * Class file for XiInsiderTypeGetDirectorsResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetDirectorsResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetDirectorsResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetDirectorsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRoster
	 */
	public $GetDirectorsResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeRoster GetDirectorsResult
	 * @return XiInsiderTypeGetDirectorsResponse
	 */
	public function __construct($_GetDirectorsResult = null)
	{
		parent::__construct(array('GetDirectorsResult'=>$_GetDirectorsResult));
	}
	/**
	 * Set GetDirectorsResult
	 * @param Roster GetDirectorsResult
	 * @return Roster
	 */
	public function setGetDirectorsResult($_GetDirectorsResult)
	{
		return ($this->GetDirectorsResult = $_GetDirectorsResult);
	}
	/**
	 * Get GetDirectorsResult
	 * @return XiInsiderTypeRoster
	 */
	public function getGetDirectorsResult()
	{
		return $this->GetDirectorsResult;
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