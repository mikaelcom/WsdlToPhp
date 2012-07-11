<?php
/**
 * Class file for YMailTypeMessagePart
 * @date 02/07/2012
 */
/**
 * Class YMailTypeMessagePart
 * @date 02/07/2012
 */
class YMailTypeMessagePart extends YMailWsdlClass
{
	/**
	 * The text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $text;
	/**
	 * The attachments
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var YMailTypeAttachmentInfo
	 */
	public $attachments;
	/**
	 * The header
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var YMailTypeMessageHeaderInfo
	 */
	public $header;
	/**
	 * The partId
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $partId;
	/**
	 * The type
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $type;
	/**
	 * The subtype
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $subtype;
	/**
	 * The typeParams
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $typeParams;
	/**
	 * The disposition
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $disposition;
	/**
	 * The dispParams
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $dispParams;
	/**
	 * The encoding
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $encoding;
	/**
	 * The filename
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $filename;
	/**
	 * The size
	 * Meta informations :
	 * 	- use : optional
	 * @var unsignedInt
	 */
	public $size;
	/**
	 * The isTruncated
	 * Meta informations :
	 * 	- default : false
	 * @var boolean
	 */
	public $isTruncated;
	/**
	 * The contentId
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $contentId;
	/**
	 * The referencedInline
	 * Meta informations :
	 * 	- default : false
	 * @var boolean
	 */
	public $referencedInline;
	/**
	 * The thumbnailurl
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $thumbnailurl;
	/**
	 * Constructor
	 * @param string text
	 * @param YMailTypeAttachmentInfo attachments
	 * @param YMailTypeMessageHeaderInfo header
	 * @param string partId
	 * @param string type
	 * @param string subtype
	 * @param string typeParams
	 * @param string disposition
	 * @param string dispParams
	 * @param string encoding
	 * @param string filename
	 * @param unsignedInt size
	 * @param boolean isTruncated
	 * @param string contentId
	 * @param boolean referencedInline
	 * @param string thumbnailurl
	 * @return YMailTypeMessagePart
	 */
	public function __construct($_text = null,$_attachments = null,$_header = null,$_partId = null,$_type = null,$_subtype = null,$_typeParams = null,$_disposition = null,$_dispParams = null,$_encoding = null,$_filename = null,$_size = null,$_isTruncated = false,$_contentId = null,$_referencedInline = false,$_thumbnailurl = null)
	{
		parent::__construct(array('text'=>$_text,'attachments'=>$_attachments,'header'=>$_header,'partId'=>$_partId,'type'=>$_type,'subtype'=>$_subtype,'typeParams'=>$_typeParams,'disposition'=>$_disposition,'dispParams'=>$_dispParams,'encoding'=>$_encoding,'filename'=>$_filename,'size'=>$_size,'isTruncated'=>$_isTruncated,'contentId'=>$_contentId,'referencedInline'=>$_referencedInline,'thumbnailurl'=>$_thumbnailurl));
	}
	/**
	 * Set text
	 * @param string text
	 * @return string
	 */
	public function setText($_text)
	{
		return ($this->text = $_text);
	}
	/**
	 * Get text
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}
	/**
	 * Set attachments
	 * @param AttachmentInfo attachments
	 * @return AttachmentInfo
	 */
	public function setAttachments($_attachments)
	{
		return ($this->attachments = $_attachments);
	}
	/**
	 * Get attachments
	 * @return YMailTypeAttachmentInfo
	 */
	public function getAttachments()
	{
		return $this->attachments;
	}
	/**
	 * Set header
	 * @param MessageHeaderInfo header
	 * @return MessageHeaderInfo
	 */
	public function setHeader($_header)
	{
		return ($this->header = $_header);
	}
	/**
	 * Get header
	 * @return YMailTypeMessageHeaderInfo
	 */
	public function getHeader()
	{
		return $this->header;
	}
	/**
	 * Set partId
	 * @param string partId
	 * @return string
	 */
	public function setPartId($_partId)
	{
		return ($this->partId = $_partId);
	}
	/**
	 * Get partId
	 * @return string
	 */
	public function getPartId()
	{
		return $this->partId;
	}
	/**
	 * Set type
	 * @param string type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get type
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set subtype
	 * @param string subtype
	 * @return string
	 */
	public function setSubtype($_subtype)
	{
		return ($this->subtype = $_subtype);
	}
	/**
	 * Get subtype
	 * @return string
	 */
	public function getSubtype()
	{
		return $this->subtype;
	}
	/**
	 * Set typeParams
	 * @param string typeParams
	 * @return string
	 */
	public function setTypeParams($_typeParams)
	{
		return ($this->typeParams = $_typeParams);
	}
	/**
	 * Get typeParams
	 * @return string
	 */
	public function getTypeParams()
	{
		return $this->typeParams;
	}
	/**
	 * Set disposition
	 * @param string disposition
	 * @return string
	 */
	public function setDisposition($_disposition)
	{
		return ($this->disposition = $_disposition);
	}
	/**
	 * Get disposition
	 * @return string
	 */
	public function getDisposition()
	{
		return $this->disposition;
	}
	/**
	 * Set dispParams
	 * @param string dispParams
	 * @return string
	 */
	public function setDispParams($_dispParams)
	{
		return ($this->dispParams = $_dispParams);
	}
	/**
	 * Get dispParams
	 * @return string
	 */
	public function getDispParams()
	{
		return $this->dispParams;
	}
	/**
	 * Set encoding
	 * @param string encoding
	 * @return string
	 */
	public function setEncoding($_encoding)
	{
		return ($this->encoding = $_encoding);
	}
	/**
	 * Get encoding
	 * @return string
	 */
	public function getEncoding()
	{
		return $this->encoding;
	}
	/**
	 * Set filename
	 * @param string filename
	 * @return string
	 */
	public function setFilename($_filename)
	{
		return ($this->filename = $_filename);
	}
	/**
	 * Get filename
	 * @return string
	 */
	public function getFilename()
	{
		return $this->filename;
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
	 * Set isTruncated
	 * @param boolean isTruncated
	 * @return boolean
	 */
	public function setIsTruncated($_isTruncated)
	{
		return ($this->isTruncated = $_isTruncated);
	}
	/**
	 * Get isTruncated
	 * @return boolean
	 */
	public function getIsTruncated()
	{
		return $this->isTruncated;
	}
	/**
	 * Set contentId
	 * @param string contentId
	 * @return string
	 */
	public function setContentId($_contentId)
	{
		return ($this->contentId = $_contentId);
	}
	/**
	 * Get contentId
	 * @return string
	 */
	public function getContentId()
	{
		return $this->contentId;
	}
	/**
	 * Set referencedInline
	 * @param boolean referencedInline
	 * @return boolean
	 */
	public function setReferencedInline($_referencedInline)
	{
		return ($this->referencedInline = $_referencedInline);
	}
	/**
	 * Get referencedInline
	 * @return boolean
	 */
	public function getReferencedInline()
	{
		return $this->referencedInline;
	}
	/**
	 * Set thumbnailurl
	 * @param string thumbnailurl
	 * @return string
	 */
	public function setThumbnailurl($_thumbnailurl)
	{
		return ($this->thumbnailurl = $_thumbnailurl);
	}
	/**
	 * Get thumbnailurl
	 * @return string
	 */
	public function getThumbnailurl()
	{
		return $this->thumbnailurl;
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