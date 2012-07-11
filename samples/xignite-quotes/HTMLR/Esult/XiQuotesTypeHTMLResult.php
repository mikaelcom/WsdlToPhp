<?php
/**
 * Class file for XiQuotesTypeHTMLResult
 * @date 08/07/2012
 */
/**
 * Class XiQuotesTypeHTMLResult
 * @date 08/07/2012
 */
class XiQuotesTypeHTMLResult extends XiQuotesTypeCommon
{
	/**
	 * The HTML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $HTML;
	/**
	 * Constructor
	 * @param string HTML
	 * @return XiQuotesTypeHTMLResult
	 */
	public function __construct($_HTML = null)
	{
		XiQuotesWsdlClass::__construct(array('HTML'=>$_HTML));
	}
	/**
	 * Set HTML
	 * @param string HTML
	 * @return string
	 */
	public function setHTML($_HTML)
	{
		return ($this->HTML = $_HTML);
	}
	/**
	 * Get HTML
	 * @return string
	 */
	public function getHTML()
	{
		return $this->HTML;
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