<?php
/**
 * Class file for XiCompensationTypeGetOfficersByYearResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficersByYearResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficersByYearResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetOfficersByYearResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeArrayOfOfficer
	 */
	public $GetOfficersByYearResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeArrayOfOfficer GetOfficersByYearResult
	 * @return XiCompensationTypeGetOfficersByYearResponse
	 */
	public function __construct($_GetOfficersByYearResult = null)
	{
		parent::__construct(array('GetOfficersByYearResult'=>new XiCompensationTypeArrayOfOfficer($_GetOfficersByYearResult)));
	}
	/**
	 * Set GetOfficersByYearResult
	 * @param ArrayOfOfficer GetOfficersByYearResult
	 * @return ArrayOfOfficer
	 */
	public function setGetOfficersByYearResult($_GetOfficersByYearResult)
	{
		return ($this->GetOfficersByYearResult = $_GetOfficersByYearResult);
	}
	/**
	 * Get GetOfficersByYearResult
	 * @return XiCompensationTypeArrayOfOfficer
	 */
	public function getGetOfficersByYearResult()
	{
		return $this->GetOfficersByYearResult;
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