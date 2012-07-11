<?php
/**
 * Class file for YMailTypeMessageInfo
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMessageInfo
 * @date 02/07/2012
 */
class YMailTypeMessageInfo extends YMailWsdlClass
{
	/**
	 * The flags
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * 	- nillable : false
	 * @var YMailTypeFlag
	 */
	public $flags;
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
	 * The searchinfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeSearchInfo
	 */
	public $searchinfo;
	/**
	 * The inboxservices
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeInboxServices
	 */
	public $inboxservices;
	/**
	 * The folderInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFid
	 */
	public $folderInfo;
	/**
	 * The sourceFolderInfo
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFid
	 */
	public $sourceFolderInfo;
	/**
	 * The mid
	 * @var string
	 */
	public $mid;
	/**
	 * The toEmail
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $toEmail;
	/**
	 * The subject
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $subject;
	/**
	 * The mimeType
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $mimeType;
	/**
	 * The xapparentlyto
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $xapparentlyto;
	/**
	 * The externalPopServer
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $externalPopServer;
	/**
	 * The receivedDate
	 * Meta informations :
	 * 	- use : optional
	 * @var unsignedInt
	 */
	public $receivedDate;
	/**
	 * The size
	 * Meta informations :
	 * 	- use : optional
	 * @var unsignedInt
	 */
	public $size;
	/**
	 * Constructor
	 * @param YMailTypeFlag flags
	 * @param YMailTypeAddress from
	 * @param YMailTypeSearchInfo searchinfo
	 * @param YMailTypeInboxServices inboxservices
	 * @param YMailTypeFid folderInfo
	 * @param YMailTypeFid sourceFolderInfo
	 * @param string mid
	 * @param string toEmail
	 * @param string subject
	 * @param string mimeType
	 * @param string xapparentlyto
	 * @param string externalPopServer
	 * @param unsignedInt receivedDate
	 * @param unsignedInt size
	 * @return YMailTypeMessageInfo
	 */
	public function __construct($_flags,$_from = null,$_searchinfo = null,$_inboxservices = null,$_folderInfo = null,$_sourceFolderInfo = null,$_mid = null,$_toEmail = null,$_subject = null,$_mimeType = null,$_xapparentlyto = null,$_externalPopServer = null,$_receivedDate = null,$_size = null)
	{
		parent::__construct(array('flags'=>$_flags,'from'=>$_from,'searchinfo'=>$_searchinfo,'inboxservices'=>$_inboxservices,'folderInfo'=>$_folderInfo,'sourceFolderInfo'=>$_sourceFolderInfo,'mid'=>$_mid,'toEmail'=>$_toEmail,'subject'=>$_subject,'mimeType'=>$_mimeType,'xapparentlyto'=>$_xapparentlyto,'externalPopServer'=>$_externalPopServer,'receivedDate'=>$_receivedDate,'size'=>$_size));
	}
	/**
	 * Set flags
	 * @param Flag flags
	 * @return Flag
	 */
	public function setFlags($_flags)
	{
		return ($this->flags = $_flags);
	}
	/**
	 * Get flags
	 * @return YMailTypeFlag
	 */
	public function getFlags()
	{
		return $this->flags;
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
	 * Set searchinfo
	 * @param SearchInfo searchinfo
	 * @return SearchInfo
	 */
	public function setSearchinfo($_searchinfo)
	{
		return ($this->searchinfo = $_searchinfo);
	}
	/**
	 * Get searchinfo
	 * @return YMailTypeSearchInfo
	 */
	public function getSearchinfo()
	{
		return $this->searchinfo;
	}
	/**
	 * Set inboxservices
	 * @param InboxServices inboxservices
	 * @return InboxServices
	 */
	public function setInboxservices($_inboxservices)
	{
		return ($this->inboxservices = $_inboxservices);
	}
	/**
	 * Get inboxservices
	 * @return YMailTypeInboxServices
	 */
	public function getInboxservices()
	{
		return $this->inboxservices;
	}
	/**
	 * Set folderInfo
	 * @param Fid folderInfo
	 * @return Fid
	 */
	public function setFolderInfo($_folderInfo)
	{
		return ($this->folderInfo = $_folderInfo);
	}
	/**
	 * Get folderInfo
	 * @return YMailTypeFid
	 */
	public function getFolderInfo()
	{
		return $this->folderInfo;
	}
	/**
	 * Set sourceFolderInfo
	 * @param Fid sourceFolderInfo
	 * @return Fid
	 */
	public function setSourceFolderInfo($_sourceFolderInfo)
	{
		return ($this->sourceFolderInfo = $_sourceFolderInfo);
	}
	/**
	 * Get sourceFolderInfo
	 * @return YMailTypeFid
	 */
	public function getSourceFolderInfo()
	{
		return $this->sourceFolderInfo;
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
	 * Set toEmail
	 * @param string toEmail
	 * @return string
	 */
	public function setToEmail($_toEmail)
	{
		return ($this->toEmail = $_toEmail);
	}
	/**
	 * Get toEmail
	 * @return string
	 */
	public function getToEmail()
	{
		return $this->toEmail;
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
	 * Set mimeType
	 * @param string mimeType
	 * @return string
	 */
	public function setMimeType($_mimeType)
	{
		return ($this->mimeType = $_mimeType);
	}
	/**
	 * Get mimeType
	 * @return string
	 */
	public function getMimeType()
	{
		return $this->mimeType;
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
	 * Set externalPopServer
	 * @param string externalPopServer
	 * @return string
	 */
	public function setExternalPopServer($_externalPopServer)
	{
		return ($this->externalPopServer = $_externalPopServer);
	}
	/**
	 * Get externalPopServer
	 * @return string
	 */
	public function getExternalPopServer()
	{
		return $this->externalPopServer;
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
	 * Set size
	 * @param unsignedInt size
	 * @return unsignedInt
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get size
	 * @return unsignedInt
	 */
	public function getSize()
	{
		return $this->size;
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