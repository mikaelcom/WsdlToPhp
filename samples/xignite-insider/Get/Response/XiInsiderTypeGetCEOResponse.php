<?php
/**
 * Class file for XiInsiderTypeGetCEOResponse
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetCEOResponse
 * @date 08/07/2012
 */
class XiInsiderTypeGetCEOResponse extends XiInsiderWsdlClass
{
	/**
	 * The GetCEOResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeRoster
	 */
	public $GetCEOResult;
	/**
	 * Constructor
	 * @param XiInsiderTypeRoster GetCEOResult
	 * @return XiInsiderTypeGetCEOResponse
	 */
	public function __construct($_GetCEOResult = null)
	{
		parent::__construct(array('GetCEOResult'=>$_GetCEOResult));
	}
	/**
	 * Set GetCEOResult
	 * @param Roster GetCEOResult
	 * @return Roster
	 */
	public function setGetCEOResult($_GetCEOResult)
	{
		return ($this->GetCEOResult = $_GetCEOResult);
	}
	/**
	 * Get GetCEOResult
	 * @return XiInsiderTypeRoster
	 */
	public function getGetCEOResult()
	{
		return $this->GetCEOResult;
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