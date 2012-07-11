<?php
/**
 * Class file for EbayTradingTypeDescriptionTemplateType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeDescriptionTemplateType
 * Documentation : The information for one Theme or one Layout.
 * @date 04/07/2012
 */
class EbayTradingTypeDescriptionTemplateType extends EbayTradingWsdlClass
{
	/**
	 * The GroupID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for the group in which a Theme falls (holidays, special events, etc.). Not returned for Layouts.
	 * @var int
	 */
	public $GroupID;
	/**
	 * The ID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique identifier for one Theme or Layout.
	 * @var int
	 */
	public $ID;
	/**
	 * The ImageURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : URL for a small (100x120 pixel) image providing a sample of how a Theme or Layout looks.
	 * @var anyURI
	 */
	public $ImageURL;
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Unique text name of the Theme or Layout.
	 * @var string
	 */
	public $Name;
	/**
	 * The TemplateXML
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : XML defining the template. Elements you must include in your XML: ThemeTop, ThemeUserCellTop, ThemeUserContent, ThemeUserCellBottom, ThemeBottom. Not returned for Layouts.
	 * @var string
	 */
	public $TemplateXML;
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Either Layout or Theme.
	 * @var EbayTradingTypeDescriptionTemplateCodeType
	 */
	public $Type;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param int GroupID
	 * @param int ID
	 * @param anyURI ImageURL
	 * @param string Name
	 * @param string TemplateXML
	 * @param EbayTradingTypeDescriptionTemplateCodeType Type
	 * @param DOMDocument any
	 * @return EbayTradingTypeDescriptionTemplateType
	 */
	public function __construct($_GroupID = null,$_ID = null,$_ImageURL = null,$_Name = null,$_TemplateXML = null,$_Type = null,$_any = null)
	{
		parent::__construct(array('GroupID'=>$_GroupID,'ID'=>$_ID,'ImageURL'=>$_ImageURL,'Name'=>$_Name,'TemplateXML'=>$_TemplateXML,'Type'=>$_Type,'any'=>$_any));
	}
	/**
	 * Set GroupID
	 * @param int GroupID
	 * @return int
	 */
	public function setGroupID($_GroupID)
	{
		return ($this->GroupID = $_GroupID);
	}
	/**
	 * Get GroupID
	 * @return int
	 */
	public function getGroupID()
	{
		return $this->GroupID;
	}
	/**
	 * Set ID
	 * @param int ID
	 * @return int
	 */
	public function setID($_ID)
	{
		return ($this->ID = $_ID);
	}
	/**
	 * Get ID
	 * @return int
	 */
	public function getID()
	{
		return $this->ID;
	}
	/**
	 * Set ImageURL
	 * @param anyURI ImageURL
	 * @return anyURI
	 */
	public function setImageURL($_ImageURL)
	{
		return ($this->ImageURL = $_ImageURL);
	}
	/**
	 * Get ImageURL
	 * @return anyURI
	 */
	public function getImageURL()
	{
		return $this->ImageURL;
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
	 * Set TemplateXML
	 * @param string TemplateXML
	 * @return string
	 */
	public function setTemplateXML($_TemplateXML)
	{
		return ($this->TemplateXML = $_TemplateXML);
	}
	/**
	 * Get TemplateXML
	 * @return string
	 */
	public function getTemplateXML()
	{
		return $this->TemplateXML;
	}
	/**
	 * Set Type
	 * @param DescriptionTemplateCodeType Type
	 * @return DescriptionTemplateCodeType
	 */
	public function setType($_Type)
	{
		return ($this->Type = EbayTradingTypeDescriptionTemplateCodeType::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return EbayTradingTypeDescriptionTemplateCodeType
	 */
	public function getType()
	{
		return $this->Type;
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