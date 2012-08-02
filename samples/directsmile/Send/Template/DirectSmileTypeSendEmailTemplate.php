<?php
/**
 * Class file for DirectSmileTypeSendEmailTemplate
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeSendEmailTemplate
 * @date 02/08/2012
 */
class DirectSmileTypeSendEmailTemplate extends DirectSmileWsdlClass
{
	/**
	 * The SessionID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $SessionID;
	/**
	 * The Recipients
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Recipients;
	/**
	 * The ReplyTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReplyTo;
	/**
	 * The Subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Subject;
	/**
	 * The TemplateAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $TemplateAlias;
	/**
	 * The MsgCom
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MsgCom;
	/**
	 * The Html
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Html;
	/**
	 * The DocumentAlias
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DocumentAlias;
	/**
	 * Constructor
	 * @param string SessionID
	 * @param string Recipients
	 * @param string ReplyTo
	 * @param string Subject
	 * @param string TemplateAlias
	 * @param string MsgCom
	 * @param string Html
	 * @param string DocumentAlias
	 * @return DirectSmileTypeSendEmailTemplate
	 */
	public function __construct($_SessionID = null,$_Recipients = null,$_ReplyTo = null,$_Subject = null,$_TemplateAlias = null,$_MsgCom = null,$_Html = null,$_DocumentAlias = null)
	{
		parent::__construct(array('SessionID'=>$_SessionID,'Recipients'=>$_Recipients,'ReplyTo'=>$_ReplyTo,'Subject'=>$_Subject,'TemplateAlias'=>$_TemplateAlias,'MsgCom'=>$_MsgCom,'Html'=>$_Html,'DocumentAlias'=>$_DocumentAlias));
	}
	/**
	 * Set SessionID
	 * @param string SessionID
	 * @return string
	 */
	public function setSessionID($_SessionID)
	{
		return ($this->SessionID = $_SessionID);
	}
	/**
	 * Get SessionID
	 * @return string
	 */
	public function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * Set Recipients
	 * @param string Recipients
	 * @return string
	 */
	public function setRecipients($_Recipients)
	{
		return ($this->Recipients = $_Recipients);
	}
	/**
	 * Get Recipients
	 * @return string
	 */
	public function getRecipients()
	{
		return $this->Recipients;
	}
	/**
	 * Set ReplyTo
	 * @param string ReplyTo
	 * @return string
	 */
	public function setReplyTo($_ReplyTo)
	{
		return ($this->ReplyTo = $_ReplyTo);
	}
	/**
	 * Get ReplyTo
	 * @return string
	 */
	public function getReplyTo()
	{
		return $this->ReplyTo;
	}
	/**
	 * Set Subject
	 * @param string Subject
	 * @return string
	 */
	public function setSubject($_Subject)
	{
		return ($this->Subject = $_Subject);
	}
	/**
	 * Get Subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
	}
	/**
	 * Set TemplateAlias
	 * @param string TemplateAlias
	 * @return string
	 */
	public function setTemplateAlias($_TemplateAlias)
	{
		return ($this->TemplateAlias = $_TemplateAlias);
	}
	/**
	 * Get TemplateAlias
	 * @return string
	 */
	public function getTemplateAlias()
	{
		return $this->TemplateAlias;
	}
	/**
	 * Set MsgCom
	 * @param string MsgCom
	 * @return string
	 */
	public function setMsgCom($_MsgCom)
	{
		return ($this->MsgCom = $_MsgCom);
	}
	/**
	 * Get MsgCom
	 * @return string
	 */
	public function getMsgCom()
	{
		return $this->MsgCom;
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
	 * Set DocumentAlias
	 * @param string DocumentAlias
	 * @return string
	 */
	public function setDocumentAlias($_DocumentAlias)
	{
		return ($this->DocumentAlias = $_DocumentAlias);
	}
	/**
	 * Get DocumentAlias
	 * @return string
	 */
	public function getDocumentAlias()
	{
		return $this->DocumentAlias;
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