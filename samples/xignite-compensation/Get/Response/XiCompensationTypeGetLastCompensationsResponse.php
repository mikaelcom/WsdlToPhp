<?php
/**
 * Class file for XiCompensationTypeGetLastCompensationsResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetLastCompensationsResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetLastCompensationsResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetLastCompensationsResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeArrayOfOfficerCompensation
	 */
	public $GetLastCompensationsResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeArrayOfOfficerCompensation GetLastCompensationsResult
	 * @return XiCompensationTypeGetLastCompensationsResponse
	 */
	public function __construct($_GetLastCompensationsResult = null)
	{
		parent::__construct(array('GetLastCompensationsResult'=>new XiCompensationTypeArrayOfOfficerCompensation($_GetLastCompensationsResult)));
	}
	/**
	 * Set GetLastCompensationsResult
	 * @param ArrayOfOfficerCompensation GetLastCompensationsResult
	 * @return ArrayOfOfficerCompensation
	 */
	public function setGetLastCompensationsResult($_GetLastCompensationsResult)
	{
		return ($this->GetLastCompensationsResult = $_GetLastCompensationsResult);
	}
	/**
	 * Get GetLastCompensationsResult
	 * @return XiCompensationTypeArrayOfOfficerCompensation
	 */
	public function getGetLastCompensationsResult()
	{
		return $this->GetLastCompensationsResult;
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