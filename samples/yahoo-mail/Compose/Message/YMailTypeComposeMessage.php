<?php
/**
 * Class file for YMailTypeComposeMessage
 * @date 02/07/2012
 */
/**
 * Class YMailTypeComposeMessage
 * @date 02/07/2012
 */
class YMailTypeComposeMessage extends YMailWsdlClass
{
	/**
	 * The subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $subject;
	/**
	 * The inreplyto
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $inreplyto;
	/**
	 * The from
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var YMailTypeAddress
	 */
	public $from;
	/**
	 * The to
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeComposeAddress
	 */
	public $to;
	/**
	 * The replyto
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeAddress
	 */
	public $replyto;
	/**
	 * The cc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var YMailTypeComposeAddress
	 */
	public $cc;
	/**
	 * The bcc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- nillable : true
	 * @var YMailTypeComposeAddress
	 */
	public $bcc;
	/**
	 * The date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $date;
	/**
	 * The body
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeComposeMessagePart
	 */
	public $body;
	/**
	 * The simplebody
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSimpleMessageBody
	 */
	public $simplebody;
	/**
	 * The meta
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeMetaData
	 */
	public $meta;
	/**
	 * The mailer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $mailer;
	/**
	 * Constructor
	 * @param string subject
	 * @param string inreplyto
	 * @param YMailTypeAddress from
	 * @param YMailTypeComposeAddress to
	 * @param YMailTypeAddress replyto
	 * @param YMailTypeComposeAddress cc
	 * @param YMailTypeComposeAddress bcc
	 * @param dateTime date
	 * @param YMailTypeComposeMessagePart body
	 * @param YMailTypeSimpleMessageBody simplebody
	 * @param YMailTypeMetaData meta
	 * @param string mailer
	 * @return YMailTypeComposeMessage
	 */
	public function __construct($_subject = null,$_inreplyto = null,$_from,$_to = null,$_replyto = null,$_cc = null,$_bcc = null,$_date = null,$_body = null,$_simplebody = null,$_meta = null,$_mailer = null)
	{
		parent::__construct(array('subject'=>$_subject,'inreplyto'=>$_inreplyto,'from'=>$_from,'to'=>$_to,'replyto'=>$_replyto,'cc'=>$_cc,'bcc'=>$_bcc,'date'=>$_date,'body'=>$_body,'simplebody'=>$_simplebody,'meta'=>$_meta,'mailer'=>$_mailer));
	}
	/**
	 * Set subject
	 * @param string subject
	 * @return string
	 */
	public function setSubject($_subject)
	{
		return ($this->subject = $_subject);
	}
	/**
	 * Get subject
	 * @return string
	 */
	public function getSubject()
	{
		return $this->subject;
	}
	/**
	 * Set inreplyto
	 * @param string inreplyto
	 * @return string
	 */
	public function setInreplyto($_inreplyto)
	{
		return ($this->inreplyto = $_inreplyto);
	}
	/**
	 * Get inreplyto
	 * @return string
	 */
	public function getInreplyto()
	{
		return $this->inreplyto;
	}
	/**
	 * Set from
	 * @param Address from
	 * @return Address
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get from
	 * @return YMailTypeAddress
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set to
	 * @param ComposeAddress to
	 * @return ComposeAddress
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get to
	 * @return YMailTypeComposeAddress
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set replyto
	 * @param Address replyto
	 * @return Address
	 */
	public function setReplyto($_replyto)
	{
		return ($this->replyto = $_replyto);
	}
	/**
	 * Get replyto
	 * @return YMailTypeAddress
	 */
	public function getReplyto()
	{
		return $this->replyto;
	}
	/**
	 * Set cc
	 * @param ComposeAddress cc
	 * @return ComposeAddress
	 */
	public function setCc($_cc)
	{
		return ($this->cc = $_cc);
	}
	/**
	 * Get cc
	 * @return YMailTypeComposeAddress
	 */
	public function getCc()
	{
		return $this->cc;
	}
	/**
	 * Set bcc
	 * @param ComposeAddress bcc
	 * @return ComposeAddress
	 */
	public function setBcc($_bcc)
	{
		return ($this->bcc = $_bcc);
	}
	/**
	 * Get bcc
	 * @return YMailTypeComposeAddress
	 */
	public function getBcc()
	{
		return $this->bcc;
	}
	/**
	 * Set date
	 * @param dateTime date
	 * @return dateTime
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set body
	 * @param ComposeMessagePart body
	 * @return ComposeMessagePart
	 */
	public function setBody($_body)
	{
		return ($this->body = $_body);
	}
	/**
	 * Get body
	 * @return YMailTypeComposeMessagePart
	 */
	public function getBody()
	{
		return $this->body;
	}
	/**
	 * Set simplebody
	 * @param SimpleMessageBody simplebody
	 * @return SimpleMessageBody
	 */
	public function setSimplebody($_simplebody)
	{
		return ($this->simplebody = $_simplebody);
	}
	/**
	 * Get simplebody
	 * @return YMailTypeSimpleMessageBody
	 */
	public function getSimplebody()
	{
		return $this->simplebody;
	}
	/**
	 * Set meta
	 * @param MetaData meta
	 * @return MetaData
	 */
	public function setMeta($_meta)
	{
		return ($this->meta = $_meta);
	}
	/**
	 * Get meta
	 * @return YMailTypeMetaData
	 */
	public function getMeta()
	{
		return $this->meta;
	}
	/**
	 * Set mailer
	 * @param string mailer
	 * @return string
	 */
	public function setMailer($_mailer)
	{
		return ($this->mailer = $_mailer);
	}
	/**
	 * Get mailer
	 * @return string
	 */
	public function getMailer()
	{
		return $this->mailer;
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