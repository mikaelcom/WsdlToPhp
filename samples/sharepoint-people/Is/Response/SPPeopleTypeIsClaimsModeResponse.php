<?php
/**
 * Class file for SPPeopleTypeIsClaimsModeResponse
 * @date 06/07/2012
 */
/**
 * Class SPPeopleTypeIsClaimsModeResponse
 * @date 06/07/2012
 */
class SPPeopleTypeIsClaimsModeResponse extends SPPeopleWsdlClass
{
	/**
	 * The IsClaimsModeResult
	 * @var boolean
	 */
	public $IsClaimsModeResult;
	/**
	 * Constructor
	 * @param boolean IsClaimsModeResult
	 * @return SPPeopleTypeIsClaimsModeResponse
	 */
	public function __construct($_IsClaimsModeResult = null)
	{
		parent::__construct(array('IsClaimsModeResult'=>$_IsClaimsModeResult));
	}
	/**
	 * Set IsClaimsModeResult
	 * @param boolean IsClaimsModeResult
	 * @return boolean
	 */
	public function setIsClaimsModeResult($_IsClaimsModeResult)
	{
		return ($this->IsClaimsModeResult = $_IsClaimsModeResult);
	}
	/**
	 * Get IsClaimsModeResult
	 * @return boolean
	 */
	public function getIsClaimsModeResult()
	{
		return $this->IsClaimsModeResult;
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