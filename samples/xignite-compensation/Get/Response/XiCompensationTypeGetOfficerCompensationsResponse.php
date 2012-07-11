<?php
/**
 * Class file for XiCompensationTypeGetOfficerCompensationsResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficerCompensationsResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficerCompensationsResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetOfficerCompensationsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficerCompensations
	 */
	public $GetOfficerCompensationsResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficerCompensations GetOfficerCompensationsResult
	 * @return XiCompensationTypeGetOfficerCompensationsResponse
	 */
	public function __construct($_GetOfficerCompensationsResult = null)
	{
		parent::__construct(array('GetOfficerCompensationsResult'=>$_GetOfficerCompensationsResult));
	}
	/**
	 * Set GetOfficerCompensationsResult
	 * @param OfficerCompensations GetOfficerCompensationsResult
	 * @return OfficerCompensations
	 */
	public function setGetOfficerCompensationsResult($_GetOfficerCompensationsResult)
	{
		return ($this->GetOfficerCompensationsResult = $_GetOfficerCompensationsResult);
	}
	/**
	 * Get GetOfficerCompensationsResult
	 * @return XiCompensationTypeOfficerCompensations
	 */
	public function getGetOfficerCompensationsResult()
	{
		return $this->GetOfficerCompensationsResult;
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