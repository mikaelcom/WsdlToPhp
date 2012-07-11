<?php
/**
 * Class file for XWebSurveyTypeProcessSurveyRequest
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeProcessSurveyRequest
 * @date 09/07/2012
 */
class XWebSurveyTypeProcessSurveyRequest extends XWebSurveyWsdlClass
{
	/**
	 * The Survey
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XWebSurveyTypeSurvey
	 */
	public $Survey;
	/**
	 * Constructor
	 * @param XWebSurveyTypeSurvey Survey
	 * @return XWebSurveyTypeProcessSurveyRequest
	 */
	public function __construct($_Survey)
	{
		parent::__construct(array('Survey'=>$_Survey));
	}
	/**
	 * Set Survey
	 * @param Survey Survey
	 * @return Survey
	 */
	public function setSurvey($_Survey)
	{
		return ($this->Survey = $_Survey);
	}
	/**
	 * Get Survey
	 * @return XWebSurveyTypeSurvey
	 */
	public function getSurvey()
	{
		return $this->Survey;
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