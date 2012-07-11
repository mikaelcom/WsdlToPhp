<?php
/**
 * Class file for XWebSurveyTypeDeleteSurveyRequest
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeDeleteSurveyRequest
 * @date 09/07/2012
 */
class XWebSurveyTypeDeleteSurveyRequest extends XWebSurveyWsdlClass
{
	/**
	 * The Survey_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Survey_ID;
	/**
	 * Constructor
	 * @param positiveInteger Survey_ID
	 * @return XWebSurveyTypeDeleteSurveyRequest
	 */
	public function __construct($_Survey_ID)
	{
		parent::__construct(array('Survey_ID'=>$_Survey_ID));
	}
	/**
	 * Set Survey_ID
	 * @param positiveInteger Survey_ID
	 * @return positiveInteger
	 */
	public function setSurvey_ID($_Survey_ID)
	{
		return ($this->Survey_ID = $_Survey_ID);
	}
	/**
	 * Get Survey_ID
	 * @return positiveInteger
	 */
	public function getSurvey_ID()
	{
		return $this->Survey_ID;
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