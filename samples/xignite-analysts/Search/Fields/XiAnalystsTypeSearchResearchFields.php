<?php
/**
 * Class file for XiAnalystsTypeSearchResearchFields
 * @date 08/07/2012
 */
/**
 * Class XiAnalystsTypeSearchResearchFields
 * @date 08/07/2012
 */
class XiAnalystsTypeSearchResearchFields extends XiAnalystsWsdlClass
{
	/**
	 * The pattern
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $pattern;
	/**
	 * Constructor
	 * @param string pattern
	 * @return XiAnalystsTypeSearchResearchFields
	 */
	public function __construct($_pattern = null)
	{
		parent::__construct(array('pattern'=>$_pattern));
	}
	/**
	 * Set pattern
	 * @param string pattern
	 * @return string
	 */
	public function setPattern($_pattern)
	{
		return ($this->pattern = $_pattern);
	}
	/**
	 * Get pattern
	 * @return string
	 */
	public function getPattern()
	{
		return $this->pattern;
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