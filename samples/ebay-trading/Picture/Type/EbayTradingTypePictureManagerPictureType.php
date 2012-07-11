<?php
/**
 * Class file for EbayTradingTypePictureManagerPictureType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypePictureManagerPictureType
 * Documentation : A picture in a Picture Manager album.
 * @date 04/07/2012
 */
class EbayTradingTypePictureManagerPictureType extends EbayTradingWsdlClass
{
	/**
	 * The PictureURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The URL that identifies the picture in the album. If a URI has spaces, replace them with %20.
	 * @var anyURI
	 */
	public $PictureURL;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of the picture, specified by the user.
	 * @var string
	 */
	public $Name;
	/**
	 * The Date
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The date the picture was uploaded to the Picture Manager account.
	 * @var dateTime
	 */
	public $Date;
	/**
	 * The DisplayFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The type of picture display in Picture Manager.
	 * @var EbayTradingTypePictureManagerPictureDisplayType
	 */
	public $DisplayFormat;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param anyURI PictureURL
	 * @param string Name
	 * @param dateTime Date
	 * @param EbayTradingTypePictureManagerPictureDisplayType DisplayFormat
	 * @param DOMDocument any
	 * @return EbayTradingTypePictureManagerPictureType
	 */
	public function __construct($_PictureURL = null,$_Name = null,$_Date = null,$_DisplayFormat = null,$_any = null)
	{
		parent::__construct(array('PictureURL'=>$_PictureURL,'Name'=>$_Name,'Date'=>$_Date,'DisplayFormat'=>$_DisplayFormat,'any'=>$_any));
	}
	/**
	 * Set PictureURL
	 * @param anyURI PictureURL
	 * @return anyURI
	 */
	public function setPictureURL($_PictureURL)
	{
		return ($this->PictureURL = $_PictureURL);
	}
	/**
	 * Get PictureURL
	 * @return anyURI
	 */
	public function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set Date
	 * @param dateTime Date
	 * @return dateTime
	 */
	public function setDate($_Date)
	{
		return ($this->Date = $_Date);
	}
	/**
	 * Get Date
	 * @return dateTime
	 */
	public function getDate()
	{
		return $this->Date;
	}
	/**
	 * Set DisplayFormat
	 * @param PictureManagerPictureDisplayType DisplayFormat
	 * @return PictureManagerPictureDisplayType
	 */
	public function setDisplayFormat($_DisplayFormat)
	{
		return ($this->DisplayFormat = $_DisplayFormat);
	}
	/**
	 * Get DisplayFormat
	 * @return EbayTradingTypePictureManagerPictureDisplayType
	 */
	public function getDisplayFormat()
	{
		return $this->DisplayFormat;
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