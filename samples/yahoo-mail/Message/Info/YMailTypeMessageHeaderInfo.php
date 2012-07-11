<?php
/**
 * Class file for YMailTypeMessageHeaderInfo
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMessageHeaderInfo
 * @date 02/07/2012
 */
class YMailTypeMessageHeaderInfo extends YMailWsdlClass
{
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
	 * The inReplyTo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $inReplyTo;
	/**
	 * Constructor
	 * @param unsignedInt receivedDate
	 * @param string subject
	 * @param YMailTypeAddress from
	 * @param YMailTypeAddress replyto
	 * @param YMailTypeAddress to
	 * @param YMailTypeAddress cc
	 * @param string inReplyTo
	 * @return YMailTypeMessageHeaderInfo
	 */
	public function __construct($_receivedDate,$_subject = null,$_from = null,$_replyto = null,$_to = null,$_cc = null,$_inReplyTo = null)
	{
		parent::__construct(array('receivedDate'=>$_receivedDate,'subject'=>$_subject,'from'=>$_from,'replyto'=>$_replyto,'to'=>$_to,'cc'=>$_cc,'inReplyTo'=>$_inReplyTo));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>