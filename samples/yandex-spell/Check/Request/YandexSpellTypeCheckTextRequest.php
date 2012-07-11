<?php
/**
 * Class file for YandexSpellTypeCheckTextRequest
 * @date 10/07/2012
 */
/**
 * Class YandexSpellTypeCheckTextRequest
 * @date 10/07/2012
 */
class YandexSpellTypeCheckTextRequest extends YandexSpellWsdlClass
{
	/**
	 * The text
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $text;
	/**
	 * The lang
	 * @var string
	 */
	public $lang;
	/**
	 * The options
	 * Meta informations :
	 * 	- use : optional
	 * 	- default : 0
	 * @var int
	 */
	public $options;
	/**
	 * The format
	 * Meta informations :
	 * 	- use : optional
	 * 	- default : 
	 * @var string
	 */
	public $format;
	/**
	 * Constructor
	 * @param string text
	 * @param string lang
	 * @param int options
	 * @param string format
	 * @return YandexSpellTypeCheckTextRequest
	 */
	public function __construct($_text,$_lang = null,$_options = 0,$_format = '')
	{
		parent::__construct(array('text'=>$_text,'lang'=>$_lang,'options'=>$_options,'format'=>$_format));
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
	 * Set lang
	 * @param string lang
	 * @return string
	 */
	public function setLang($_lang)
	{
		return ($this->lang = $_lang);
	}
	/**
	 * Get lang
	 * @return string
	 */
	public function getLang()
	{
		return $this->lang;
	}
	/**
	 * Set options
	 * @param int options
	 * @return int
	 */
	public function setOptions($_options)
	{
		return ($this->options = $_options);
	}
	/**
	 * Get options
	 * @return int
	 */
	public function getOptions()
	{
		return $this->options;
	}
	/**
	 * Set format
	 * @param string format
	 * @return string
	 */
	public function setFormat($_format)
	{
		return ($this->format = $_format);
	}
	/**
	 * Get format
	 * @return string
	 */
	public function getFormat()
	{
		return $this->format;
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