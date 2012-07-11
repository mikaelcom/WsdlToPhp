<?php
/**
 * Class file for XiNewsTypeBriefing
 * @date 08/07/2012
 */
/**
 * Class XiNewsTypeBriefing
 * @date 08/07/2012
 */
class XiNewsTypeBriefing extends XiNewsTypeCommon
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The Time
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Time;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * The Html
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Html;
	/**
	 * Constructor
	 * @param string Title
	 * @param string Time
	 * @param string Text
	 * @param string Html
	 * @return XiNewsTypeBriefing
	 */
	public function __construct($_Title = null,$_Time = null,$_Text = null,$_Html = null)
	{
		XiNewsWsdlClass::__construct(array('Title'=>$_Title,'Time'=>$_Time,'Text'=>$_Text,'Html'=>$_Html));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set Time
	 * @param string Time
	 * @return string
	 */
	public function setTime($_Time)
	{
		return ($this->Time = $_Time);
	}
	/**
	 * Get Time
	 * @return string
	 */
	public function getTime()
	{
		return $this->Time;
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
	 * Set Html
	 * @param string Html
	 * @return string
	 */
	public function setHtml($_Html)
	{
		return ($this->Html = $_Html);
	}
	/**
	 * Get Html
	 * @return string
	 */
	public function getHtml()
	{
		return $this->Html;
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