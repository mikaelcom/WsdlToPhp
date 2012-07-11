<?php
/**
 * Class file for XiCompensationTypeGetOfficerResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficerResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficerResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetOfficerResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficer
	 */
	public $GetOfficerResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficer GetOfficerResult
	 * @return XiCompensationTypeGetOfficerResponse
	 */
	public function __construct($_GetOfficerResult = null)
	{
		parent::__construct(array('GetOfficerResult'=>$_GetOfficerResult));
	}
	/**
	 * Set GetOfficerResult
	 * @param Officer GetOfficerResult
	 * @return Officer
	 */
	public function setGetOfficerResult($_GetOfficerResult)
	{
		return ($this->GetOfficerResult = $_GetOfficerResult);
	}
	/**
	 * Get GetOfficerResult
	 * @return XiCompensationTypeOfficer
	 */
	public function getGetOfficerResult()
	{
		return $this->GetOfficerResult;
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