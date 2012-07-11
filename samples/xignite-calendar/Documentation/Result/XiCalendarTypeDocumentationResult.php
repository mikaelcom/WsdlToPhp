<?php
/**
 * Class file for XiCalendarTypeDocumentationResult
 * @date 08/07/2012
 */
/**
 * Class XiCalendarTypeDocumentationResult
 * @date 08/07/2012
 */
class XiCalendarTypeDocumentationResult extends XiCalendarTypeCommon
{
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * Constructor
	 * @param string Text
	 * @return XiCalendarTypeDocumentationResult
	 */
	public function __construct($_Text = null)
	{
		XiCalendarWsdlClass::__construct(array('Text'=>$_Text));
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
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