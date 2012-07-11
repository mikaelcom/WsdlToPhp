<?php
/**
 * Class file for XiGlobalFundamentalsTypeSearchFundamentals
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeSearchFundamentals
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeSearchFundamentals extends XiGlobalFundamentalsWsdlClass
{
	/**
	 * The Pattern
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Pattern;
	/**
	 * Constructor
	 * @param string Pattern
	 * @return XiGlobalFundamentalsTypeSearchFundamentals
	 */
	public function __construct($_Pattern = null)
	{
		parent::__construct(array('Pattern'=>$_Pattern));
	}
	/**
	 * Set Pattern
	 * @param string Pattern
	 * @return string
	 */
	public function setPattern($_Pattern)
	{
		return ($this->Pattern = $_Pattern);
	}
	/**
	 * Get Pattern
	 * @return string
	 */
	public function getPattern()
	{
		return $this->Pattern;
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