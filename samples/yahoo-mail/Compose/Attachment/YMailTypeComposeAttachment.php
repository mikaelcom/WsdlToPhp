<?php
/**
 * Class file for YMailTypeComposeAttachment
 * @date 02/07/2012
 */
/**
 * Class YMailTypeComposeAttachment
 * @date 02/07/2012
 */
class YMailTypeComposeAttachment extends YMailWsdlClass
{
	/**
	 * The data
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $data;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The subtype
	 * @var string
	 */
	public $subtype;
	/**
	 * The attachment
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $attachment;
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
	 * The charset
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $charset;
	/**
	 * The contentid
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $contentid;
	/**
	 * The disposition
	 * Meta informations :
	 * 	- use : optional
	 * @var string
	 */
	public $disposition;
	/**
	 * Constructor
	 * @param string data
	 * @param string type
	 * @param string subtype
	 * @param string attachment
	 * @param string encoding
	 * @param string filename
	 * @param string charset
	 * @param string contentid
	 * @param string disposition
	 * @return YMailTypeComposeAttachment
	 */
	public function __construct($_data = null,$_type = null,$_subtype = null,$_attachment = null,$_encoding = null,$_filename = null,$_charset = null,$_contentid = null,$_disposition = null)
	{
		parent::__construct(array('data'=>$_data,'type'=>$_type,'subtype'=>$_subtype,'attachment'=>$_attachment,'encoding'=>$_encoding,'filename'=>$_filename,'charset'=>$_charset,'contentid'=>$_contentid,'disposition'=>$_disposition));
	}
	/**
	 * Set data
	 * @param string data
	 * @return string
	 */
	public function setData($_data)
	{
		return ($this->data = $_data);
	}
	/**
	 * Get data
	 * @return string
	 */
	public function getData()
	{
		return $this->data;
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
	 * Set attachment
	 * @param string attachment
	 * @return string
	 */
	public function setAttachment($_attachment)
	{
		return ($this->attachment = $_attachment);
	}
	/**
	 * Get attachment
	 * @return string
	 */
	public function getAttachment()
	{
		return $this->attachment;
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
	 * Set charset
	 * @param string charset
	 * @return string
	 */
	public function setCharset($_charset)
	{
		return ($this->charset = $_charset);
	}
	/**
	 * Get charset
	 * @return string
	 */
	public function getCharset()
	{
		return $this->charset;
	}
	/**
	 * Set contentid
	 * @param string contentid
	 * @return string
	 */
	public function setContentid($_contentid)
	{
		return ($this->contentid = $_contentid);
	}
	/**
	 * Get contentid
	 * @return string
	 */
	public function getContentid()
	{
		return $this->contentid;
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>