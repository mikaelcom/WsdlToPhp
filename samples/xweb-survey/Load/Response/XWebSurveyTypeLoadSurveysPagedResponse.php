<?php
/**
 * Class file for XWebSurveyTypeLoadSurveysPagedResponse
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeLoadSurveysPagedResponse
 * @date 09/07/2012
 */
class XWebSurveyTypeLoadSurveysPagedResponse extends XWebSurveyWsdlClass
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
	 * The Total_Record_Count
	 * @var anonymous18
	 */
	public $Total_Record_Count;
	/**
	 * Constructor
	 * @param XWebSurveyTypeSurvey Survey
	 * @param anonymous18 Total_Record_Count
	 * @return XWebSurveyTypeLoadSurveysPagedResponse
	 */
	public function __construct($_Survey = null,$_Total_Record_Count = null)
	{
		parent::__construct(array('Survey'=>$_Survey,'Total_Record_Count'=>$_Total_Record_Count));
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
	 * Set Total_Record_Count
	 * @param anonymous18 Total_Record_Count
	 * @return anonymous18
	 */
	public function setTotal_Record_Count($_Total_Record_Count)
	{
		return ($this->Total_Record_Count = $_Total_Record_Count);
	}
	/**
	 * Get Total_Record_Count
	 * @return anonymous18
	 */
	public function getTotal_Record_Count()
	{
		return $this->Total_Record_Count;
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