<?php
/**
 * Class file for YMailTypeSearchAttachmentInfo
 * @date 02/07/2012
 */
/**
 * Class YMailTypeSearchAttachmentInfo
 * @date 02/07/2012
 */
class YMailTypeSearchAttachmentInfo extends YMailWsdlClass
{
	/**
	 * The name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $name;
	/**
	 * The MIMEType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MIMEType;
	/**
	 * The MIMEPartid
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MIMEPartid;
	/**
	 * The size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $size;
	/**
	 * The thumbnailURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * 	- nillable : true
	 * @var string
	 */
	public $thumbnailURL;
	/**
	 * Constructor
	 * @param string name
	 * @param string MIMEType
	 * @param string MIMEPartid
	 * @param unsignedInt size
	 * @param string thumbnailURL
	 * @return YMailTypeSearchAttachmentInfo
	 */
	public function __construct($_name = null,$_MIMEType = null,$_MIMEPartid = null,$_size = null,$_thumbnailURL = null)
	{
		parent::__construct(array('name'=>$_name,'MIMEType'=>$_MIMEType,'MIMEPartid'=>$_MIMEPartid,'size'=>$_size,'thumbnailURL'=>$_thumbnailURL));
	}
	/**
	 * Set name
	 * @param string name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get name
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set MIMEType
	 * @param string MIMEType
	 * @return string
	 */
	public function setMIMEType($_MIMEType)
	{
		return ($this->MIMEType = $_MIMEType);
	}
	/**
	 * Get MIMEType
	 * @return string
	 */
	public function getMIMEType()
	{
		return $this->MIMEType;
	}
	/**
	 * Set MIMEPartid
	 * @param string MIMEPartid
	 * @return string
	 */
	public function setMIMEPartid($_MIMEPartid)
	{
		return ($this->MIMEPartid = $_MIMEPartid);
	}
	/**
	 * Get MIMEPartid
	 * @return string
	 */
	public function getMIMEPartid()
	{
		return $this->MIMEPartid;
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
	 * Set thumbnailURL
	 * @param string thumbnailURL
	 * @return string
	 */
	public function setThumbnailURL($_thumbnailURL)
	{
		return ($this->thumbnailURL = $_thumbnailURL);
	}
	/**
	 * Get thumbnailURL
	 * @return string
	 */
	public function getThumbnailURL()
	{
		return $this->thumbnailURL;
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