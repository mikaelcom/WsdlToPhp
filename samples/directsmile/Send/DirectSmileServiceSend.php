<?php
/**
 * Class file for DirectSmileServiceSend
 * @date 02/08/2012
 */
/**
 * Class DirectSmileServiceSend
 * @date 02/08/2012
 */
class DirectSmileServiceSend extends DirectSmileWsdlClass
{
	/**
	 * Method to call SendEmailTemplate
	 * Meta informations :
	 * 	- documentation : Sends an Email containing a Template or html content. The SessionID parameter is included to stay backward compatible, it is not used in the method.
	 * @uses DirectSmileWsdlClass::getSoapClient()
	 * @uses DirectSmileWsdlClass::setResult()
	 * @uses DirectSmileWsdlClass::getResult()
	 * @uses DirectSmileWsdlClass::saveLastError()
	 * @uses DirectSmileTypeSendEmailTemplate::getSessionID()
	 * @uses DirectSmileTypeSendEmailTemplate::getRecipients()
	 * @uses DirectSmileTypeSendEmailTemplate::getReplyTo()
	 * @uses DirectSmileTypeSendEmailTemplate::getSubject()
	 * @uses DirectSmileTypeSendEmailTemplate::getTemplateAlias()
	 * @uses DirectSmileTypeSendEmailTemplate::getMsgCom()
	 * @uses DirectSmileTypeSendEmailTemplate::getHtml()
	 * @uses DirectSmileTypeSendEmailTemplate::getDocumentAlias()
	 * @param DirectSmileTypeSendEmailTemplate SendEmailTemplate
	 * @return DirectSmileTypeSendEmailTemplateResponse
	 */
	public function SendEmailTemplate(DirectSmileTypeSendEmailTemplate $_DirectSmileTypeSendEmailTemplate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->SendEmailTemplate(array('SessionID'=>$_DirectSmileTypeSendEmailTemplate->getSessionID(),'Recipients'=>$_DirectSmileTypeSendEmailTemplate->getRecipients(),'ReplyTo'=>$_DirectSmileTypeSendEmailTemplate->getReplyTo(),'Subject'=>$_DirectSmileTypeSendEmailTemplate->getSubject(),'TemplateAlias'=>$_DirectSmileTypeSendEmailTemplate->getTemplateAlias(),'MsgCom'=>$_DirectSmileTypeSendEmailTemplate->getMsgCom(),'Html'=>$_DirectSmileTypeSendEmailTemplate->getHtml(),'DocumentAlias'=>$_DirectSmileTypeSendEmailTemplate->getDocumentAlias())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return DirectSmileTypeSendEmailTemplateResponse
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>