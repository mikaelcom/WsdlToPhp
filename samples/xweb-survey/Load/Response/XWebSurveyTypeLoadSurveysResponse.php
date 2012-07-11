<?php
/**
 * Class file for XWebSurveyTypeLoadSurveysResponse
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeLoadSurveysResponse
 * @date 09/07/2012
 */
class XWebSurveyTypeLoadSurveysResponse extends XWebSurveyWsdlClass
{
	/**
	 * The Survey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebSurveyTypeSurvey
	 */
	public $Survey;
	/**
	 * Constructor
	 * @param XWebSurveyTypeSurvey Survey
	 * @return XWebSurveyTypeLoadSurveysResponse
	 */
	public function __construct($_Survey = null)
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