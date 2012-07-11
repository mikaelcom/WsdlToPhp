<?php
/**
 * Class file for EbayTradingTypeNotificationMessageType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNotificationMessageType
 * Documentation : (out) A template for an SMS notification message.
 * @date 04/07/2012
 */
class EbayTradingTypeNotificationMessageType extends EbayTradingTypeAbstractResponseType
{
	/**
	 * The MessageBody
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (out) The SMS message.
	 * @var string
	 */
	public $MessageBody;
	/**
	 * The EIAS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : (out) The EIAS userId.
	 * @var string
	 */
	public $EIAS;
	/**
	 * Constructor
	 * @param string MessageBody
	 * @param string EIAS
	 * @return EbayTradingTypeNotificationMessageType
	 */
	public function __construct($_MessageBody = null,$_EIAS = null)
	{
		EbayTradingWsdlClass::__construct(array('MessageBody'=>$_MessageBody,'EIAS'=>$_EIAS));
	}
	/**
	 * Set MessageBody
	 * @param string MessageBody
	 * @return string
	 */
	public function setMessageBody($_MessageBody)
	{
		return ($this->MessageBody = $_MessageBody);
	}
	/**
	 * Get MessageBody
	 * @return string
	 */
	public function getMessageBody()
	{
		return $this->MessageBody;
	}
	/**
	 * Set EIAS
	 * @param string EIAS
	 * @return string
	 */
	public function setEIAS($_EIAS)
	{
		return ($this->EIAS = $_EIAS);
	}
	/**
	 * Get EIAS
	 * @return string
	 */
	public function getEIAS()
	{
		return $this->EIAS;
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