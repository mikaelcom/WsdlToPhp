<?php
/**
 * Class file for XiCompensationTypeGetLastCompensationResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetLastCompensationResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetLastCompensationResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetLastCompensationResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficerCompensation
	 */
	public $GetLastCompensationResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficerCompensation GetLastCompensationResult
	 * @return XiCompensationTypeGetLastCompensationResponse
	 */
	public function __construct($_GetLastCompensationResult = null)
	{
		parent::__construct(array('GetLastCompensationResult'=>$_GetLastCompensationResult));
	}
	/**
	 * Set GetLastCompensationResult
	 * @param OfficerCompensation GetLastCompensationResult
	 * @return OfficerCompensation
	 */
	public function setGetLastCompensationResult($_GetLastCompensationResult)
	{
		return ($this->GetLastCompensationResult = $_GetLastCompensationResult);
	}
	/**
	 * Get GetLastCompensationResult
	 * @return XiCompensationTypeOfficerCompensation
	 */
	public function getGetLastCompensationResult()
	{
		return $this->GetLastCompensationResult;
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