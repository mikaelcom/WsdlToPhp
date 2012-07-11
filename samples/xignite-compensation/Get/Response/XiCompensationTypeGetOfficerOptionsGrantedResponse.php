<?php
/**
 * Class file for XiCompensationTypeGetOfficerOptionsGrantedResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficerOptionsGrantedResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficerOptionsGrantedResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetOfficerOptionsGrantedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficerOptions
	 */
	public $GetOfficerOptionsGrantedResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficerOptions GetOfficerOptionsGrantedResult
	 * @return XiCompensationTypeGetOfficerOptionsGrantedResponse
	 */
	public function __construct($_GetOfficerOptionsGrantedResult = null)
	{
		parent::__construct(array('GetOfficerOptionsGrantedResult'=>$_GetOfficerOptionsGrantedResult));
	}
	/**
	 * Set GetOfficerOptionsGrantedResult
	 * @param OfficerOptions GetOfficerOptionsGrantedResult
	 * @return OfficerOptions
	 */
	public function setGetOfficerOptionsGrantedResult($_GetOfficerOptionsGrantedResult)
	{
		return ($this->GetOfficerOptionsGrantedResult = $_GetOfficerOptionsGrantedResult);
	}
	/**
	 * Get GetOfficerOptionsGrantedResult
	 * @return XiCompensationTypeOfficerOptions
	 */
	public function getGetOfficerOptionsGrantedResult()
	{
		return $this->GetOfficerOptionsGrantedResult;
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