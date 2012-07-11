<?php
/**
 * Class file for XWebSurveyTypeOptions
 * @date 09/07/2012
 */
/**
 * Class XWebSurveyTypeOptions
 * @date 09/07/2012
 */
class XWebSurveyTypeOptions extends XWebSurveyWsdlClass
{
	/**
	 * The Option
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 255
	 * @var XWebSurveyTypeOptionType
	 */
	public $Option;
	/**
	 * Constructor
	 * @param XWebSurveyTypeOptionType Option
	 * @return XWebSurveyTypeOptions
	 */
	public function __construct($_Option = null)
	{
		parent::__construct(array('Option'=>$_Option));
	}
	/**
	 * Set Option
	 * @param OptionType Option
	 * @return OptionType
	 */
	public function setOption($_Option)
	{
		return ($this->Option = $_Option);
	}
	/**
	 * Get Option
	 * @return XWebSurveyTypeOptionType
	 */
	public function getOption()
	{
		return $this->Option;
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