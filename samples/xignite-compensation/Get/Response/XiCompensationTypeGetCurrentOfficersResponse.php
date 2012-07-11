<?php
/**
 * Class file for XiCompensationTypeGetCurrentOfficersResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetCurrentOfficersResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetCurrentOfficersResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetCurrentOfficersResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeArrayOfOfficer
	 */
	public $GetCurrentOfficersResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeArrayOfOfficer GetCurrentOfficersResult
	 * @return XiCompensationTypeGetCurrentOfficersResponse
	 */
	public function __construct($_GetCurrentOfficersResult = null)
	{
		parent::__construct(array('GetCurrentOfficersResult'=>new XiCompensationTypeArrayOfOfficer($_GetCurrentOfficersResult)));
	}
	/**
	 * Set GetCurrentOfficersResult
	 * @param ArrayOfOfficer GetCurrentOfficersResult
	 * @return ArrayOfOfficer
	 */
	public function setGetCurrentOfficersResult($_GetCurrentOfficersResult)
	{
		return ($this->GetCurrentOfficersResult = $_GetCurrentOfficersResult);
	}
	/**
	 * Get GetCurrentOfficersResult
	 * @return XiCompensationTypeArrayOfOfficer
	 */
	public function getGetCurrentOfficersResult()
	{
		return $this->GetCurrentOfficersResult;
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