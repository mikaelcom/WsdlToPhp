<?php
/**
 * Class file for BingTypeThumbnail
 * @date 02/07/2012
 */
/**
 * Class BingTypeThumbnail
 * @date 02/07/2012
 */
class BingTypeThumbnail extends BingWsdlClass
{
	/**
	 * The Url
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Url;
	/**
	 * The ContentType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ContentType;
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
	 * The RunTime
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var unsignedInt
	 */
	public $RunTime;
	/**
	 * Constructor
	 * @param string Url
	 * @param string ContentType
	 * @param unsignedInt Width
	 * @param unsignedInt Height
	 * @param unsignedInt FileSize
	 * @param unsignedInt RunTime
	 * @return BingTypeThumbnail
	 */
	public function __construct($_Url = null,$_ContentType = null,$_Width = null,$_Height = null,$_FileSize = null,$_RunTime = null)
	{
		parent::__construct(array('Url'=>$_Url,'ContentType'=>$_ContentType,'Width'=>$_Width,'Height'=>$_Height,'FileSize'=>$_FileSize,'RunTime'=>$_RunTime));
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
	 * Set RunTime
	 * @param unsignedInt RunTime
	 * @return unsignedInt
	 */
	public function setRunTime($_RunTime)
	{
		return ($this->RunTime = $_RunTime);
	}
	/**
	 * Get RunTime
	 * @return unsignedInt
	 */
	public function getRunTime()
	{
		return $this->RunTime;
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