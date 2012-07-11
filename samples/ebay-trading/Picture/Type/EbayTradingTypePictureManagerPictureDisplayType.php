<?php
/**
 * Class file for EbayTradingTypePictureManagerPictureDisplayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerPictureDisplayType
 * Documentation : Defines various styles of picture display for images in Picture Manager albums.
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerPictureDisplayType extends EbayTradingWsdlClass
{
	/**
	 * The DisplayType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The style of picture display, with a maximum size.
	 * @var EbayTradingTypePictureManagerPictureDisplayTypeCodeType
	 */
	public $DisplayType;
	/**
	 * The URL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL to the image in the Picture Manager album.
	 * @var anyURI
	 */
	public $URL;
	/**
	 * The Size
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The total file size of the picture, in bytes.
	 * @var int
	 */
	public $Size;
	/**
	 * The Height
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The height of a specific image, or the maximum allowed height, in pixels. Varies for different calls.
	 * @var int
	 */
	public $Height;
	/**
	 * The Width
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The width of a specific image, or the maximum allowed width, in pixels. Varies for different calls.
	 * @var int
	 */
	public $Width;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypePictureManagerPictureDisplayTypeCodeType DisplayType
	 * @param anyURI URL
	 * @param int Size
	 * @param int Height
	 * @param int Width
	 * @param DOMDocument any
	 * @return EbayTradingTypePictureManagerPictureDisplayType
	 */
	public function __construct($_DisplayType = null,$_URL = null,$_Size = null,$_Height = null,$_Width = null,$_any = null)
	{
		parent::__construct(array('DisplayType'=>$_DisplayType,'URL'=>$_URL,'Size'=>$_Size,'Height'=>$_Height,'Width'=>$_Width,'any'=>$_any));
	}
	/**
	 * Set DisplayType
	 * @param PictureManagerPictureDisplayTypeCodeType DisplayType
	 * @return PictureManagerPictureDisplayTypeCodeType
	 */
	public function setDisplayType($_DisplayType)
	{
		return ($this->DisplayType = EbayTradingTypePictureManagerPictureDisplayTypeCodeType::valueIsValid($_DisplayType)?$_DisplayType:null);
	}
	/**
	 * Get DisplayType
	 * @return EbayTradingTypePictureManagerPictureDisplayTypeCodeType
	 */
	public function getDisplayType()
	{
		return $this->DisplayType;
	}
	/**
	 * Set URL
	 * @param anyURI URL
	 * @return anyURI
	 */
	public function setURL($_URL)
	{
		return ($this->URL = $_URL);
	}
	/**
	 * Get URL
	 * @return anyURI
	 */
	public function getURL()
	{
		return $this->URL;
	}
	/**
	 * Set Size
	 * @param int Size
	 * @return int
	 */
	public function setSize($_Size)
	{
		return ($this->Size = $_Size);
	}
	/**
	 * Get Size
	 * @return int
	 */
	public function getSize()
	{
		return $this->Size;
	}
	/**
	 * Set Height
	 * @param int Height
	 * @return int
	 */
	public function setHeight($_Height)
	{
		return ($this->Height = $_Height);
	}
	/**
	 * Get Height
	 * @return int
	 */
	public function getHeight()
	{
		return $this->Height;
	}
	/**
	 * Set Width
	 * @param int Width
	 * @return int
	 */
	public function setWidth($_Width)
	{
		return ($this->Width = $_Width);
	}
	/**
	 * Get Width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->Width;
	}
	/**
	 * Set any
	 * @param DOMDocument any
	 * @return DOMDocument
	 */
	public function setAny($_any)
	{
		return ($this->any = $_any);
	}
	/**
	 * Get any
	 * @return DOMDocument
	 */
	public function getAny()
	{
		if(!($this->any instanceof DOMDocument))
		{
			$dom = new DOMDocument('1.0','UTF-8');
			$dom->formatOutput = true;
			$dom->loadXML($this->any);
			$this->setAny($dom);
		}
		return $this->any;
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