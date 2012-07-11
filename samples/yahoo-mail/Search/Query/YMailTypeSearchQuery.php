<?php
/**
 * Class file for YMailTypeSearchQuery
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchQuery
 * @date 02/07/2012
 */
class YMailTypeSearchQuery extends YMailWsdlClass
{
	/**
	 * The attachmenttype
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSearchAttachmentType
	 */
	public $attachmenttype;
	/**
	 * The query
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $query;
	/**
	 * The from
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $from;
	/**
	 * The frommatchmode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSearchMatchMode
	 */
	public $frommatchmode;
	/**
	 * The rcpt
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $rcpt;
	/**
	 * The rcptmatchmode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSearchMatchMode
	 */
	public $rcptmatchmode;
	/**
	 * The rcptmode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : toonly
	 * @var YMailTypeSearchRecipientMode
	 */
	public $rcptmode;
	/**
	 * The subject
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $subject;
	/**
	 * The subjectmatchmode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSearchMatchMode
	 */
	public $subjectmatchmode;
	/**
	 * The body
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $body;
	/**
	 * The bodymatchmode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSearchMatchMode
	 */
	public $bodymatchmode;
	/**
	 * The searchtype
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSearchType
	 */
	public $searchtype;
	/**
	 * The date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var dateTime
	 */
	public $date;
	/**
	 * The datemode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- default : ignoredate
	 * @var YMailTypeSearchDateCheck
	 */
	public $datemode;
	/**
	 * The fid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $fid;
	/**
	 * The flags
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var YMailTypeFlag
	 */
	public $flags;
	/**
	 * The daterange
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeSearchDateRange
	 */
	public $daterange;
	/**
	 * The attmimetype
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var string
	 */
	public $attmimetype;
	/**
	 * Constructor
	 * @param YMailTypeSearchAttachmentType attachmenttype
	 * @param string query
	 * @param string from
	 * @param YMailTypeSearchMatchMode frommatchmode
	 * @param string rcpt
	 * @param YMailTypeSearchMatchMode rcptmatchmode
	 * @param YMailTypeSearchRecipientMode rcptmode
	 * @param string subject
	 * @param YMailTypeSearchMatchMode subjectmatchmode
	 * @param string body
	 * @param YMailTypeSearchMatchMode bodymatchmode
	 * @param YMailTypeSearchType searchtype
	 * @param dateTime date
	 * @param YMailTypeSearchDateCheck datemode
	 * @param string fid
	 * @param YMailTypeFlag flags
	 * @param YMailTypeSearchDateRange daterange
	 * @param string attmimetype
	 * @return YMailTypeSearchQuery
	 */
	public function __construct($_attachmenttype = null,$_query = null,$_from = null,$_frommatchmode = null,$_rcpt = null,$_rcptmatchmode = null,$_rcptmode = 'toonly',$_subject = null,$_subjectmatchmode = null,$_body = null,$_bodymatchmode = null,$_searchtype = null,$_date = null,$_datemode = 'ignoredate',$_fid = null,$_flags = null,$_daterange = null,$_attmimetype = null)
	{
		parent::__construct(array('attachmenttype'=>$_attachmenttype,'query'=>$_query,'from'=>$_from,'frommatchmode'=>$_frommatchmode,'rcpt'=>$_rcpt,'rcptmatchmode'=>$_rcptmatchmode,'rcptmode'=>$_rcptmode,'subject'=>$_subject,'subjectmatchmode'=>$_subjectmatchmode,'body'=>$_body,'bodymatchmode'=>$_bodymatchmode,'searchtype'=>$_searchtype,'date'=>$_date,'datemode'=>$_datemode,'fid'=>$_fid,'flags'=>$_flags,'daterange'=>$_daterange,'attmimetype'=>$_attmimetype));
	}
	/**
	 * Set attachmenttype
	 * @param SearchAttachmentType attachmenttype
	 * @return SearchAttachmentType
	 */
	public function setAttachmenttype($_attachmenttype)
	{
		return ($this->attachmenttype = YMailTypeSearchAttachmentType::valueIsValid($_attachmenttype)?$_attachmenttype:null);
	}
	/**
	 * Get attachmenttype
	 * @return YMailTypeSearchAttachmentType
	 */
	public function getAttachmenttype()
	{
		return $this->attachmenttype;
	}
	/**
	 * Set query
	 * @param string query
	 * @return string
	 */
	public function setQuery($_query)
	{
		return ($this->query = $_query);
	}
	/**
	 * Get query
	 * @return string
	 */
	public function getQuery()
	{
		return $this->query;
	}
	/**
	 * Set from
	 * @param string from
	 * @return string
	 */
	public function setFrom($_from)
	{
		return ($this->from = $_from);
	}
	/**
	 * Get from
	 * @return string
	 */
	public function getFrom()
	{
		return $this->from;
	}
	/**
	 * Set frommatchmode
	 * @param SearchMatchMode frommatchmode
	 * @return SearchMatchMode
	 */
	public function setFrommatchmode($_frommatchmode)
	{
		return ($this->frommatchmode = YMailTypeSearchMatchMode::valueIsValid($_frommatchmode)?$_frommatchmode:null);
	}
	/**
	 * Get frommatchmode
	 * @return YMailTypeSearchMatchMode
	 */
	public function getFrommatchmode()
	{
		return $this->frommatchmode;
	}
	/**
	 * Set rcpt
	 * @param string rcpt
	 * @return string
	 */
	public function setRcpt($_rcpt)
	{
		return ($this->rcpt = $_rcpt);
	}
	/**
	 * Get rcpt
	 * @return string
	 */
	public function getRcpt()
	{
		return $this->rcpt;
	}
	/**
	 * Set rcptmatchmode
	 * @param SearchMatchMode rcptmatchmode
	 * @return SearchMatchMode
	 */
	public function setRcptmatchmode($_rcptmatchmode)
	{
		return ($this->rcptmatchmode = YMailTypeSearchMatchMode::valueIsValid($_rcptmatchmode)?$_rcptmatchmode:null);
	}
	/**
	 * Get rcptmatchmode
	 * @return YMailTypeSearchMatchMode
	 */
	public function getRcptmatchmode()
	{
		return $this->rcptmatchmode;
	}
	/**
	 * Set rcptmode
	 * @param SearchRecipientMode rcptmode
	 * @return SearchRecipientMode
	 */
	public function setRcptmode($_rcptmode)
	{
		return ($this->rcptmode = YMailTypeSearchRecipientMode::valueIsValid($_rcptmode)?$_rcptmode:null);
	}
	/**
	 * Get rcptmode
	 * @return YMailTypeSearchRecipientMode
	 */
	public function getRcptmode()
	{
		return $this->rcptmode;
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
	 * Set subjectmatchmode
	 * @param SearchMatchMode subjectmatchmode
	 * @return SearchMatchMode
	 */
	public function setSubjectmatchmode($_subjectmatchmode)
	{
		return ($this->subjectmatchmode = YMailTypeSearchMatchMode::valueIsValid($_subjectmatchmode)?$_subjectmatchmode:null);
	}
	/**
	 * Get subjectmatchmode
	 * @return YMailTypeSearchMatchMode
	 */
	public function getSubjectmatchmode()
	{
		return $this->subjectmatchmode;
	}
	/**
	 * Set body
	 * @param string body
	 * @return string
	 */
	public function setBody($_body)
	{
		return ($this->body = $_body);
	}
	/**
	 * Get body
	 * @return string
	 */
	public function getBody()
	{
		return $this->body;
	}
	/**
	 * Set bodymatchmode
	 * @param SearchMatchMode bodymatchmode
	 * @return SearchMatchMode
	 */
	public function setBodymatchmode($_bodymatchmode)
	{
		return ($this->bodymatchmode = YMailTypeSearchMatchMode::valueIsValid($_bodymatchmode)?$_bodymatchmode:null);
	}
	/**
	 * Get bodymatchmode
	 * @return YMailTypeSearchMatchMode
	 */
	public function getBodymatchmode()
	{
		return $this->bodymatchmode;
	}
	/**
	 * Set searchtype
	 * @param SearchType searchtype
	 * @return SearchType
	 */
	public function setSearchtype($_searchtype)
	{
		return ($this->searchtype = YMailTypeSearchType::valueIsValid($_searchtype)?$_searchtype:null);
	}
	/**
	 * Get searchtype
	 * @return YMailTypeSearchType
	 */
	public function getSearchtype()
	{
		return $this->searchtype;
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
	 * Set datemode
	 * @param SearchDateCheck datemode
	 * @return SearchDateCheck
	 */
	public function setDatemode($_datemode)
	{
		return ($this->datemode = YMailTypeSearchDateCheck::valueIsValid($_datemode)?$_datemode:null);
	}
	/**
	 * Get datemode
	 * @return YMailTypeSearchDateCheck
	 */
	public function getDatemode()
	{
		return $this->datemode;
	}
	/**
	 * Set fid
	 * @param string fid
	 * @return string
	 */
	public function setFid($_fid)
	{
		return ($this->fid = $_fid);
	}
	/**
	 * Get fid
	 * @return string
	 */
	public function getFid()
	{
		return $this->fid;
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
	 * Set daterange
	 * @param SearchDateRange daterange
	 * @return SearchDateRange
	 */
	public function setDaterange($_daterange)
	{
		return ($this->daterange = $_daterange);
	}
	/**
	 * Get daterange
	 * @return YMailTypeSearchDateRange
	 */
	public function getDaterange()
	{
		return $this->daterange;
	}
	/**
	 * Set attmimetype
	 * @param string attmimetype
	 * @return string
	 */
	public function setAttmimetype($_attmimetype)
	{
		return ($this->attmimetype = $_attmimetype);
	}
	/**
	 * Get attmimetype
	 * @return string
	 */
	public function getAttmimetype()
	{
		return $this->attmimetype;
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