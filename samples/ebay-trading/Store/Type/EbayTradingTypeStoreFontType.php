<?php
/**
 * Class file for EbayTradingTypeStoreFontType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreFontType
 * Documentation : Store font set.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreFontType extends EbayTradingWsdlClass
{
	/**
	 * The NameFace
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font for the Store name.
	 * @var EbayTradingTypeStoreFontFaceCodeType
	 */
	public $NameFace;
	/**
	 * The NameSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font size for the Store name.
	 * @var EbayTradingTypeStoreFontSizeCodeType
	 */
	public $NameSize;
	/**
	 * The NameColor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font color for the Store name. Specified in 6-digit Hex format. For example: F6F6C9
	 * @var string
	 */
	public $NameColor;
	/**
	 * The TitleFace
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font for the Store section title.
	 * @var EbayTradingTypeStoreFontFaceCodeType
	 */
	public $TitleFace;
	/**
	 * The TitleSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font size for the Store section title.
	 * @var EbayTradingTypeStoreFontSizeCodeType
	 */
	public $TitleSize;
	/**
	 * The TitleColor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font color for the Store section title. Specified in 6-digit Hex format. For example: F6F6C9
	 * @var string
	 */
	public $TitleColor;
	/**
	 * The DescFace
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font for the Store description.
	 * @var EbayTradingTypeStoreFontFaceCodeType
	 */
	public $DescFace;
	/**
	 * The DescSize
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font size for the Store description.
	 * @var EbayTradingTypeStoreFontSizeCodeType
	 */
	public $DescSize;
	/**
	 * The DescColor
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Font color for the Store description. Specified in 6-digit Hex format. For example: F6F6C9
	 * @var string
	 */
	public $DescColor;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param EbayTradingTypeStoreFontFaceCodeType NameFace
	 * @param EbayTradingTypeStoreFontSizeCodeType NameSize
	 * @param string NameColor
	 * @param EbayTradingTypeStoreFontFaceCodeType TitleFace
	 * @param EbayTradingTypeStoreFontSizeCodeType TitleSize
	 * @param string TitleColor
	 * @param EbayTradingTypeStoreFontFaceCodeType DescFace
	 * @param EbayTradingTypeStoreFontSizeCodeType DescSize
	 * @param string DescColor
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreFontType
	 */
	public function __construct($_NameFace = null,$_NameSize = null,$_NameColor = null,$_TitleFace = null,$_TitleSize = null,$_TitleColor = null,$_DescFace = null,$_DescSize = null,$_DescColor = null,$_any = null)
	{
		parent::__construct(array('NameFace'=>$_NameFace,'NameSize'=>$_NameSize,'NameColor'=>$_NameColor,'TitleFace'=>$_TitleFace,'TitleSize'=>$_TitleSize,'TitleColor'=>$_TitleColor,'DescFace'=>$_DescFace,'DescSize'=>$_DescSize,'DescColor'=>$_DescColor,'any'=>$_any));
	}
	/**
	 * Set NameFace
	 * @param StoreFontFaceCodeType NameFace
	 * @return StoreFontFaceCodeType
	 */
	public function setNameFace($_NameFace)
	{
		return ($this->NameFace = EbayTradingTypeStoreFontFaceCodeType::valueIsValid($_NameFace)?$_NameFace:null);
	}
	/**
	 * Get NameFace
	 * @return EbayTradingTypeStoreFontFaceCodeType
	 */
	public function getNameFace()
	{
		return $this->NameFace;
	}
	/**
	 * Set NameSize
	 * @param StoreFontSizeCodeType NameSize
	 * @return StoreFontSizeCodeType
	 */
	public function setNameSize($_NameSize)
	{
		return ($this->NameSize = EbayTradingTypeStoreFontSizeCodeType::valueIsValid($_NameSize)?$_NameSize:null);
	}
	/**
	 * Get NameSize
	 * @return EbayTradingTypeStoreFontSizeCodeType
	 */
	public function getNameSize()
	{
		return $this->NameSize;
	}
	/**
	 * Set NameColor
	 * @param string NameColor
	 * @return string
	 */
	public function setNameColor($_NameColor)
	{
		return ($this->NameColor = $_NameColor);
	}
	/**
	 * Get NameColor
	 * @return string
	 */
	public function getNameColor()
	{
		return $this->NameColor;
	}
	/**
	 * Set TitleFace
	 * @param StoreFontFaceCodeType TitleFace
	 * @return StoreFontFaceCodeType
	 */
	public function setTitleFace($_TitleFace)
	{
		return ($this->TitleFace = EbayTradingTypeStoreFontFaceCodeType::valueIsValid($_TitleFace)?$_TitleFace:null);
	}
	/**
	 * Get TitleFace
	 * @return EbayTradingTypeStoreFontFaceCodeType
	 */
	public function getTitleFace()
	{
		return $this->TitleFace;
	}
	/**
	 * Set TitleSize
	 * @param StoreFontSizeCodeType TitleSize
	 * @return StoreFontSizeCodeType
	 */
	public function setTitleSize($_TitleSize)
	{
		return ($this->TitleSize = EbayTradingTypeStoreFontSizeCodeType::valueIsValid($_TitleSize)?$_TitleSize:null);
	}
	/**
	 * Get TitleSize
	 * @return EbayTradingTypeStoreFontSizeCodeType
	 */
	public function getTitleSize()
	{
		return $this->TitleSize;
	}
	/**
	 * Set TitleColor
	 * @param string TitleColor
	 * @return string
	 */
	public function setTitleColor($_TitleColor)
	{
		return ($this->TitleColor = $_TitleColor);
	}
	/**
	 * Get TitleColor
	 * @return string
	 */
	public function getTitleColor()
	{
		return $this->TitleColor;
	}
	/**
	 * Set DescFace
	 * @param StoreFontFaceCodeType DescFace
	 * @return StoreFontFaceCodeType
	 */
	public function setDescFace($_DescFace)
	{
		return ($this->DescFace = EbayTradingTypeStoreFontFaceCodeType::valueIsValid($_DescFace)?$_DescFace:null);
	}
	/**
	 * Get DescFace
	 * @return EbayTradingTypeStoreFontFaceCodeType
	 */
	public function getDescFace()
	{
		return $this->DescFace;
	}
	/**
	 * Set DescSize
	 * @param StoreFontSizeCodeType DescSize
	 * @return StoreFontSizeCodeType
	 */
	public function setDescSize($_DescSize)
	{
		return ($this->DescSize = EbayTradingTypeStoreFontSizeCodeType::valueIsValid($_DescSize)?$_DescSize:null);
	}
	/**
	 * Get DescSize
	 * @return EbayTradingTypeStoreFontSizeCodeType
	 */
	public function getDescSize()
	{
		return $this->DescSize;
	}
	/**
	 * Set DescColor
	 * @param string DescColor
	 * @return string
	 */
	public function setDescColor($_DescColor)
	{
		return ($this->DescColor = $_DescColor);
	}
	/**
	 * Get DescColor
	 * @return string
	 */
	public function getDescColor()
	{
		return $this->DescColor;
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