<?php
/**
 * Class file for XiCompensationTypeGetOfficerOptionsResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficerOptionsResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficerOptionsResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetOfficerOptionsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficerOptions
	 */
	public $GetOfficerOptionsResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficerOptions GetOfficerOptionsResult
	 * @return XiCompensationTypeGetOfficerOptionsResponse
	 */
	public function __construct($_GetOfficerOptionsResult = null)
	{
		parent::__construct(array('GetOfficerOptionsResult'=>$_GetOfficerOptionsResult));
	}
	/**
	 * Set GetOfficerOptionsResult
	 * @param OfficerOptions GetOfficerOptionsResult
	 * @return OfficerOptions
	 */
	public function setGetOfficerOptionsResult($_GetOfficerOptionsResult)
	{
		return ($this->GetOfficerOptionsResult = $_GetOfficerOptionsResult);
	}
	/**
	 * Get GetOfficerOptionsResult
	 * @return XiCompensationTypeOfficerOptions
	 */
	public function getGetOfficerOptionsResult()
	{
		return $this->GetOfficerOptionsResult;
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