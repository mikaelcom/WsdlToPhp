<?php
/**
 * Class file for XiCompensationTypeGetOfficerOptionsExercisedResponse
 * @date 08/07/2012
 */
/**
 * Class XiCompensationTypeGetOfficerOptionsExercisedResponse
 * @date 08/07/2012
 */
class XiCompensationTypeGetOfficerOptionsExercisedResponse extends XiCompensationWsdlClass
{
	/**
	 * The GetOfficerOptionsExercisedResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiCompensationTypeOfficerOptions
	 */
	public $GetOfficerOptionsExercisedResult;
	/**
	 * Constructor
	 * @param XiCompensationTypeOfficerOptions GetOfficerOptionsExercisedResult
	 * @return XiCompensationTypeGetOfficerOptionsExercisedResponse
	 */
	public function __construct($_GetOfficerOptionsExercisedResult = null)
	{
		parent::__construct(array('GetOfficerOptionsExercisedResult'=>$_GetOfficerOptionsExercisedResult));
	}
	/**
	 * Set GetOfficerOptionsExercisedResult
	 * @param OfficerOptions GetOfficerOptionsExercisedResult
	 * @return OfficerOptions
	 */
	public function setGetOfficerOptionsExercisedResult($_GetOfficerOptionsExercisedResult)
	{
		return ($this->GetOfficerOptionsExercisedResult = $_GetOfficerOptionsExercisedResult);
	}
	/**
	 * Get GetOfficerOptionsExercisedResult
	 * @return XiCompensationTypeOfficerOptions
	 */
	public function getGetOfficerOptionsExercisedResult()
	{
		return $this->GetOfficerOptionsExercisedResult;
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