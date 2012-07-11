<?php
/**
 * Class file for YMailTypeMessage
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMessage
 * @date 02/07/2012
 */
class YMailTypeMessage extends YMailWsdlClass
{
	/**
	 * The mid
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $mid;
	/**
	 * The receivedDate
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var unsignedInt
	 */
	public $receivedDate;
	/**
	 * The subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $subject;
	/**
	 * The from
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeAddress
	 */
	public $from;
	/**
	 * The replyto
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeAddress
	 */
	public $replyto;
	/**
	 * The to
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeAddress
	 */
	public $to;
	/**
	 * The cc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeAddress
	 */
	public $cc;
	/**
	 * The bcc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeAddress
	 */
	public $bcc;
	/**
	 * The domainkey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var boolean
	 */
	public $domainkey;
	/**
	 * The domainkeyname
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var string
	 */
	public $domainkeyname;
	/**
	 * The part
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeMessagePart
	 */
	public $part;
	/**
	 * The meta
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeMetaData
	 */
	public $meta;
	/**
	 * The hasBlockedImages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var boolean
	 */
	public $hasBlockedImages;
	/**
	 * The xapparentlyto
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $xapparentlyto;
	/**
	 * The messageId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $messageId;
	/**
	 * The inReplyTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $inReplyTo;
	/**
	 * The references
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $references;
	/**
	 * Constructor
	 * @param string mid
	 * @param unsignedInt receivedDate
	 * @param string subject
	 * @param YMailTypeAddress from
	 * @param YMailTypeAddress replyto
	 * @param YMailTypeAddress to
	 * @param YMailTypeAddress cc
	 * @param YMailTypeAddress bcc
	 * @param boolean domainkey
	 * @param string domainkeyname
	 * @param YMailTypeMessagePart part
	 * @param YMailTypeMetaData meta
	 * @param boolean hasBlockedImages
	 * @param string xapparentlyto
	 * @param string messageId
	 * @param string inReplyTo
	 * @param string references
	 * @return YMailTypeMessage
	 */
	public function __construct($_mid,$_receivedDate,$_subject = null,$_from = null,$_replyto = null,$_to = null,$_cc = null,$_bcc = null,$_domainkey = null,$_domainkeyname = null,$_part = null,$_meta = null,$_hasBlockedImages = null,$_xapparentlyto = null,$_messageId = null,$_inReplyTo = null,$_references = null)
	{
		parent::__construct(array('mid'=>$_mid,'receivedDate'=>$_receivedDate,'subject'=>$_subject,'from'=>$_from,'replyto'=>$_replyto,'to'=>$_to,'cc'=>$_cc,'bcc'=>$_bcc,'domainkey'=>$_domainkey,'domainkeyname'=>$_domainkeyname,'part'=>$_part,'meta'=>$_meta,'hasBlockedImages'=>$_hasBlockedImages,'xapparentlyto'=>$_xapparentlyto,'messageId'=>$_messageId,'inReplyTo'=>$_inReplyTo,'references'=>$_references));
	}
	/**
	 * Set mid
	 * @param string mid
	 * @return string
	 */
	public function setMid($_mid)
	{
		return ($this->mid = $_mid);
	}
	/**
	 * Get mid
	 * @return string
	 */
	public function getMid()
	{
		return $this->mid;
	}
	/**
	 * Set receivedDate
	 * @param unsignedInt receivedDate
	 * @return unsignedInt
	 */
	public function setReceivedDate($_receivedDate)
	{
		return ($this->receivedDate = $_receivedDate);
	}
	/**
	 * Get receivedDate
	 * @return unsignedInt
	 */
	public function getReceivedDate()
	{
		return $this->receivedDate;
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
	 * Set to
	 * @param Address to
	 * @return Address
	 */
	public function setTo($_to)
	{
		return ($this->to = $_to);
	}
	/**
	 * Get to
	 * @return YMailTypeAddress
	 */
	public function getTo()
	{
		return $this->to;
	}
	/**
	 * Set cc
	 * @param Address cc
	 * @return Address
	 */
	public function setCc($_cc)
	{
		return ($this->cc = $_cc);
	}
	/**
	 * Get cc
	 * @return YMailTypeAddress
	 */
	public function getCc()
	{
		return $this->cc;
	}
	/**
	 * Set bcc
	 * @param Address bcc
	 * @return Address
	 */
	public function setBcc($_bcc)
	{
		return ($this->bcc = $_bcc);
	}
	/**
	 * Get bcc
	 * @return YMailTypeAddress
	 */
	public function getBcc()
	{
		return $this->bcc;
	}
	/**
	 * Set domainkey
	 * @param boolean domainkey
	 * @return boolean
	 */
	public function setDomainkey($_domainkey)
	{
		return ($this->domainkey = $_domainkey);
	}
	/**
	 * Get domainkey
	 * @return boolean
	 */
	public function getDomainkey()
	{
		return $this->domainkey;
	}
	/**
	 * Set domainkeyname
	 * @param string domainkeyname
	 * @return string
	 */
	public function setDomainkeyname($_domainkeyname)
	{
		return ($this->domainkeyname = $_domainkeyname);
	}
	/**
	 * Get domainkeyname
	 * @return string
	 */
	public function getDomainkeyname()
	{
		return $this->domainkeyname;
	}
	/**
	 * Set part
	 * @param MessagePart part
	 * @return MessagePart
	 */
	public function setPart($_part)
	{
		return ($this->part = $_part);
	}
	/**
	 * Get part
	 * @return YMailTypeMessagePart
	 */
	public function getPart()
	{
		return $this->part;
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
	 * Set hasBlockedImages
	 * @param boolean hasBlockedImages
	 * @return boolean
	 */
	public function setHasBlockedImages($_hasBlockedImages)
	{
		return ($this->hasBlockedImages = $_hasBlockedImages);
	}
	/**
	 * Get hasBlockedImages
	 * @return boolean
	 */
	public function getHasBlockedImages()
	{
		return $this->hasBlockedImages;
	}
	/**
	 * Set xapparentlyto
	 * @param string xapparentlyto
	 * @return string
	 */
	public function setXapparentlyto($_xapparentlyto)
	{
		return ($this->xapparentlyto = $_xapparentlyto);
	}
	/**
	 * Get xapparentlyto
	 * @return string
	 */
	public function getXapparentlyto()
	{
		return $this->xapparentlyto;
	}
	/**
	 * Set messageId
	 * @param string messageId
	 * @return string
	 */
	public function setMessageId($_messageId)
	{
		return ($this->messageId = $_messageId);
	}
	/**
	 * Get messageId
	 * @return string
	 */
	public function getMessageId()
	{
		return $this->messageId;
	}
	/**
	 * Set inReplyTo
	 * @param string inReplyTo
	 * @return string
	 */
	public function setInReplyTo($_inReplyTo)
	{
		return ($this->inReplyTo = $_inReplyTo);
	}
	/**
	 * Get inReplyTo
	 * @return string
	 */
	public function getInReplyTo()
	{
		return $this->inReplyTo;
	}
	/**
	 * Set references
	 * @param string references
	 * @return string
	 */
	public function setReferences($_references)
	{
		return ($this->references = $_references);
	}
	/**
	 * Get references
	 * @return string
	 */
	public function getReferences()
	{
		return $this->references;
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