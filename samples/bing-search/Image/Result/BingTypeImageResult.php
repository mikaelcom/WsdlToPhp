<?php
/**
 * Class file for BingTypeImageResult
 * @date 02/07/2012
 */
/**
 * Class BingTypeImageResult
 * @date 02/07/2012
 */
class BingTypeImageResult extends BingWsdlClass
{
	/**
	 * The Title
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Title;
	/**
	 * The MediaUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $MediaUrl;
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The DisplayUrl
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DisplayUrl;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Width;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $Height;
	/**
	 * The FileSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $FileSize;
	/**
	 * The ContentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ContentType;
	/**
	 * The Thumbnail
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var BingTypeThumbnail
	 */
	public $Thumbnail;
	/**
	 * Constructor
	 * @param string Title
	 * @param string MediaUrl
	 * @param string Url
	 * @param string DisplayUrl
	 * @param unsignedInt Width
	 * @param unsignedInt Height
	 * @param unsignedInt FileSize
	 * @param string ContentType
	 * @param BingTypeThumbnail Thumbnail
	 * @return BingTypeImageResult
	 */
	public function __construct($_Title = null,$_MediaUrl = null,$_Url = null,$_DisplayUrl = null,$_Width = null,$_Height = null,$_FileSize = null,$_ContentType = null,$_Thumbnail = null)
	{
		parent::__construct(array('Title'=>$_Title,'MediaUrl'=>$_MediaUrl,'Url'=>$_Url,'DisplayUrl'=>$_DisplayUrl,'Width'=>$_Width,'Height'=>$_Height,'FileSize'=>$_FileSize,'ContentType'=>$_ContentType,'Thumbnail'=>$_Thumbnail));
	}
	/**
	 * Set Title
	 * @param string Title
	 * @return string
	 */
	public function setTitle($_Title)
	{
		return ($this->Title = $_Title);
	}
	/**
	 * Get Title
	 * @return string
	 */
	public function getTitle()
	{
		return $this->Title;
	}
	/**
	 * Set MediaUrl
	 * @param string MediaUrl
	 * @return string
	 */
	public function setMediaUrl($_MediaUrl)
	{
		return ($this->MediaUrl = $_MediaUrl);
	}
	/**
	 * Get MediaUrl
	 * @return string
	 */
	public function getMediaUrl()
	{
		return $this->MediaUrl;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set DisplayUrl
	 * @param string DisplayUrl
	 * @return string
	 */
	public function setDisplayUrl($_DisplayUrl)
	{
		return ($this->DisplayUrl = $_DisplayUrl);
	}
	/**
	 * Get DisplayUrl
	 * @return string
	 */
	public function getDisplayUrl()
	{
		return $this->DisplayUrl;
	}
	/**
	 * Set Width
	 * @param unsignedInt Width
	 * @return unsignedInt
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return unsignedInt
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set Height
	 * @param unsignedInt Height
	 * @return unsignedInt
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return unsignedInt
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set FileSize
	 * @param unsignedInt FileSize
	 * @return unsignedInt
	 */
	public function setFileSize($_FileSize)
	{
		return ($this->FileSize = $_FileSize);
	}
	/**
	 * Get FileSize
	 * @return unsignedInt
	 */
	public function getFileSize()
	{
		return $this->FileSize;
	}
	/**
	 * Set ContentType
	 * @param string ContentType
	 * @return string
	 */
	public function setContentType($_ContentType)
	{
		return ($this->ContentType = $_ContentType);
	}
	/**
	 * Get ContentType
	 * @return string
	 */
	public function getContentType()
	{
		return $this->ContentType;
	}
	/**
	 * Set Thumbnail
	 * @param Thumbnail Thumbnail
	 * @return Thumbnail
	 */
	public function setThumbnail($_Thumbnail)
	{
		return ($this->Thumbnail = $_Thumbnail);
	}
	/**
	 * Get Thumbnail
	 * @return BingTypeThumbnail
	 */
	public function getThumbnail()
	{
		return $this->Thumbnail;
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