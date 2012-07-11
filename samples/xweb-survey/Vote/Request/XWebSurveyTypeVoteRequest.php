<?php
/**
 * Class file for XWebSurveyTypeVoteRequest
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeVoteRequest
 * @date 09/07/2012
 */
class XWebSurveyTypeVoteRequest extends XWebSurveyWsdlClass
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
	 * The Option_ID
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var positiveInteger
	 */
	public $Option_ID;
	/**
	 * Constructor
	 * @param positiveInteger Survey_ID
	 * @param positiveInteger Option_ID
	 * @return XWebSurveyTypeVoteRequest
	 */
	public function __construct($_Survey_ID,$_Option_ID)
	{
		parent::__construct(array('Survey_ID'=>$_Survey_ID,'Option_ID'=>$_Option_ID));
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
	 * Set Option_ID
	 * @param positiveInteger Option_ID
	 * @return positiveInteger
	 */
	public function setOption_ID($_Option_ID)
	{
		return ($this->Option_ID = $_Option_ID);
	}
	/**
	 * Get Option_ID
	 * @return positiveInteger
	 */
	public function getOption_ID()
	{
		return $this->Option_ID;
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