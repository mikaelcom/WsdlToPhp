<?php
/**
 * Class file for YMailTypeSimpleMessageBody
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSimpleMessageBody
 * @date 02/07/2012
 */
class YMailTypeSimpleMessageBody extends YMailWsdlClass
{
	/**
	 * The text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $text;
	/**
	 * The html
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $html;
	/**
	 * The attachment
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeComposeAttachment
	 */
	public $attachment;
	/**
	 * Constructor
	 * @param string text
	 * @param string html
	 * @param YMailTypeComposeAttachment attachment
	 * @return YMailTypeSimpleMessageBody
	 */
	public function __construct($_text = null,$_html = null,$_attachment = null)
	{
		parent::__construct(array('text'=>$_text,'html'=>$_html,'attachment'=>$_attachment));
	}
	/**
	 * Set text
	 * @param string text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
	}
	/**
	 * Get text
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}
	/**
	 * Set html
	 * @param string html
	 * @return string
	 */
	public function setHtml($_html)
	{
		return ($this->html = $_html);
	}
	/**
	 * Get html
	 * @return string
	 */
	public function getHtml()
	{
		return $this->html;
	}
	/**
	 * Set attachment
	 * @param ComposeAttachment attachment
	 * @return ComposeAttachment
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return YMailTypeComposeAttachment
	 */
	public function getAttachment()
	{
		return $this->attachment;
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