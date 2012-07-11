<?php
/**
 * Class file for OvhTypeResponderEmailStruct
 * @date 02/07/2012
 */
/**
 * Class OvhTypeResponderEmailStruct
 * @date 02/07/2012
 */
class OvhTypeResponderEmailStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The responder
	 * @var string
	 */
	public $responder;
	/**
	 * The content
	 * @var string
	 */
	public $content;
	/**
	 * The hasPop
	 * @var boolean
	 */
	public $hasPop;
	/**
	 * The hasAlias
	 * @var boolean
	 */
	public $hasAlias;
	/**
	 * Constructor
	 * @param string domain
	 * @param string responder
	 * @param string content
	 * @param boolean hasPop
	 * @param boolean hasAlias
	 * @return OvhTypeResponderEmailStruct
	 */
	public function __construct($_domain = null,$_responder = null,$_content = null,$_hasPop = null,$_hasAlias = null)
	{
		parent::__construct(array('domain'=>$_domain,'responder'=>$_responder,'content'=>$_content,'hasPop'=>$_hasPop,'hasAlias'=>$_hasAlias));
	}
	/**
	 * Set domain
	 * @param string domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get domain
	 * @return string
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set responder
	 * @param string responder
	 * @return string
	 */
	public function setResponder($_responder)
	{
		return ($this->responder = $_responder);
	}
	/**
	 * Get responder
	 * @return string
	 */
	public function getResponder()
	{
		return $this->responder;
	}
	/**
	 * Set content
	 * @param string content
	 * @return string
	 */
	public function setContent($_content)
	{
		return ($this->content = $_content);
	}
	/**
	 * Get content
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}
	/**
	 * Set hasPop
	 * @param boolean hasPop
	 * @return boolean
	 */
	public function setHasPop($_hasPop)
	{
		return ($this->hasPop = $_hasPop);
	}
	/**
	 * Get hasPop
	 * @return boolean
	 */
	public function getHasPop()
	{
		return $this->hasPop;
	}
	/**
	 * Set hasAlias
	 * @param boolean hasAlias
	 * @return boolean
	 */
	public function setHasAlias($_hasAlias)
	{
		return ($this->hasAlias = $_hasAlias);
	}
	/**
	 * Get hasAlias
	 * @return boolean
	 */
	public function getHasAlias()
	{
		return $this->hasAlias;
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