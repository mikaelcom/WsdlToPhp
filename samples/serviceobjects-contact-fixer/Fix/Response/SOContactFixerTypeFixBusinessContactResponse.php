<?php
/**
 * Class file for SOContactFixerTypeFixBusinessContactResponse
 * @date 08/07/2012
 */
/**
 * Class SOContactFixerTypeFixBusinessContactResponse
 * @date 08/07/2012
 */
class SOContactFixerTypeFixBusinessContactResponse extends SOContactFixerWsdlClass
{
	/**
	 * The FixBusinessContactResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOContactFixerTypeContact
	 */
	public $FixBusinessContactResult;
	/**
	 * Constructor
	 * @param SOContactFixerTypeContact FixBusinessContactResult
	 * @return SOContactFixerTypeFixBusinessContactResponse
	 */
	public function __construct($_FixBusinessContactResult = null)
	{
		parent::__construct(array('FixBusinessContactResult'=>$_FixBusinessContactResult));
	}
	/**
	 * Set FixBusinessContactResult
	 * @param Contact FixBusinessContactResult
	 * @return Contact
	 */
	public function setFixBusinessContactResult($_FixBusinessContactResult)
	{
		return ($this->FixBusinessContactResult = $_FixBusinessContactResult);
	}
	/**
	 * Get FixBusinessContactResult
	 * @return SOContactFixerTypeContact
	 */
	public function getFixBusinessContactResult()
	{
		return $this->FixBusinessContactResult;
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