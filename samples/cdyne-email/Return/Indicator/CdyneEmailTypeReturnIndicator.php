<?php
/**
 * Class file for CdyneEmailTypeReturnIndicator
 * @date 02/07/2012
 */
/**
 * Class CdyneEmailTypeReturnIndicator
 * @date 02/07/2012
 */
class CdyneEmailTypeReturnIndicator extends CdyneEmailWsdlClass
{
	/**
	 * The ResponseText
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ResponseText;
	/**
	 * The ResponseCode
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $ResponseCode;
	/**
	 * The LastMailServer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LastMailServer;
	/**
	 * The GoodEmail
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $GoodEmail;
	/**
	 * Constructor
	 * @param string ResponseText
	 * @param int ResponseCode
	 * @param string LastMailServer
	 * @param boolean GoodEmail
	 * @return CdyneEmailTypeReturnIndicator
	 */
	public function __construct($_ResponseText = null,$_ResponseCode,$_LastMailServer = null,$_GoodEmail)
	{
		parent::__construct(array('ResponseText'=>$_ResponseText,'ResponseCode'=>$_ResponseCode,'LastMailServer'=>$_LastMailServer,'GoodEmail'=>$_GoodEmail));
	}
	/**
	 * Set ResponseText
	 * @param string ResponseText
	 * @return string
	 */
	public function setResponseText($_ResponseText)
	{
		return ($this->ResponseText = $_ResponseText);
	}
	/**
	 * Get ResponseText
	 * @return string
	 */
	public function getResponseText()
	{
		return $this->ResponseText;
	}
	/**
	 * Set ResponseCode
	 * @param int ResponseCode
	 * @return int
	 */
	public function setResponseCode($_ResponseCode)
	{
		return ($this->ResponseCode = $_ResponseCode);
	}
	/**
	 * Get ResponseCode
	 * @return int
	 */
	public function getResponseCode()
	{
		return $this->ResponseCode;
	}
	/**
	 * Set LastMailServer
	 * @param string LastMailServer
	 * @return string
	 */
	public function setLastMailServer($_LastMailServer)
	{
		return ($this->LastMailServer = $_LastMailServer);
	}
	/**
	 * Get LastMailServer
	 * @return string
	 */
	public function getLastMailServer()
	{
		return $this->LastMailServer;
	}
	/**
	 * Set GoodEmail
	 * @param boolean GoodEmail
	 * @return boolean
	 */
	public function setGoodEmail($_GoodEmail)
	{
		return ($this->GoodEmail = $_GoodEmail);
	}
	/**
	 * Get GoodEmail
	 * @return boolean
	 */
	public function getGoodEmail()
	{
		return $this->GoodEmail;
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