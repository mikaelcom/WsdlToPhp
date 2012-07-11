<?php
/**
 * Class file for MicrosoftTranslatorTypeTranslate
 * @date 05/07/2012
 */
/**
 * Class MicrosoftTranslatorTypeTranslate
 * @date 05/07/2012
 */
class MicrosoftTranslatorTypeTranslate extends MicrosoftTranslatorWsdlClass
{
	/**
	 * The appId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $appId;
	/**
	 * The text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $text;
	/**
	 * The from
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $from;
	/**
	 * The to
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $to;
	/**
	 * The contentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $contentType;
	/**
	 * The category
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $category;
	/**
	 * Constructor
	 * @param string appId
	 * @param string text
	 * @param string from
	 * @param string to
	 * @param string contentType
	 * @param string category
	 * @return MicrosoftTranslatorTypeTranslate
	 */
	public function __construct($_appId = null,$_text = null,$_from = null,$_to = null,$_contentType = null,$_category = null)
	{
		parent::__construct(array('appId'=>$_appId,'text'=>$_text,'from'=>$_from,'to'=>$_to,'contentType'=>$_contentType,'category'=>$_category));
	}
	/**
	 * Set appId
	 * @param string appId
	 * @return string
	 */
	public function setAppId($_appId)
	{
		return ($this->appId = $_appId);
	}
	/**
	 * Get appId
	 * @return string
	 */
	public function getAppId()
	{
		return $this->appId;
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
	 * Set from
	 * @param string from
	 * @return string
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get from
	 * @return string
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set to
	 * @param string to
	 * @return string
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get to
	 * @return string
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set contentType
	 * @param string contentType
	 * @return string
	 */
	public function setContentType($_contentType)
	{
		return ($this->contentType = $_contentType);
	}
	/**
	 * Get contentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->contentType;
	}
	/**
	 * Set category
	 * @param string category
	 * @return string
	 */
	public function setCategory($_category)
	{
		return ($this->category = $_category);
	}
	/**
	 * Get category
	 * @return string
	 */
	public function getCategory()
	{
		return $this->category;
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