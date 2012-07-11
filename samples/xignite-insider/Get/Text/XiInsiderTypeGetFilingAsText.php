<?php
/**
 * Class file for XiInsiderTypeGetFilingAsText
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeGetFilingAsText
 * @date 08/07/2012
 */
class XiInsiderTypeGetFilingAsText extends XiInsiderWsdlClass
{
	/**
	 * The TextFileUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TextFileUrl;
	/**
	 * The HTMLize
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $HTMLize;
	/**
	 * Constructor
	 * @param string TextFileUrl
	 * @param boolean HTMLize
	 * @return XiInsiderTypeGetFilingAsText
	 */
	public function __construct($_TextFileUrl = null,$_HTMLize)
	{
		parent::__construct(array('TextFileUrl'=>$_TextFileUrl,'HTMLize'=>$_HTMLize));
	}
	/**
	 * Set TextFileUrl
	 * @param string TextFileUrl
	 * @return string
	 */
	public function setTextFileUrl($_TextFileUrl)
	{
		return ($this->TextFileUrl = $_TextFileUrl);
	}
	/**
	 * Get TextFileUrl
	 * @return string
	 */
	public function getTextFileUrl()
	{
		return $this->TextFileUrl;
	}
	/**
	 * Set HTMLize
	 * @param boolean HTMLize
	 * @return boolean
	 */
	public function setHTMLize($_HTMLize)
	{
		return ($this->HTMLize = $_HTMLize);
	}
	/**
	 * Get HTMLize
	 * @return boolean
	 */
	public function getHTMLize()
	{
		return $this->HTMLize;
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