<?php
/**
 * Class file for EbayTradingTypeStoreColorType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeStoreColorType
 * Documentation : Store color set.
 * @date 04/07/2012
 */
class EbayTradingTypeStoreColorType extends EbayTradingWsdlClass
{
	/**
	 * The Primary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Primary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 * @var string
	 */
	public $Primary;
	/**
	 * The Secondary
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Secondary color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 * @var string
	 */
	public $Secondary;
	/**
	 * The Accent
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Accent color for the Store. Specified in 6-digit Hex format. For example: F6F6C9
	 * @var string
	 */
	public $Accent;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Primary
	 * @param string Secondary
	 * @param string Accent
	 * @param DOMDocument any
	 * @return EbayTradingTypeStoreColorType
	 */
	public function __construct($_Primary = null,$_Secondary = null,$_Accent = null,$_any = null)
	{
		parent::__construct(array('Primary'=>$_Primary,'Secondary'=>$_Secondary,'Accent'=>$_Accent,'any'=>$_any));
	}
	/**
	 * Set Primary
	 * @param string Primary
	 * @return string
	 */
	public function setPrimary($_Primary)
	{
		return ($this->Primary = $_Primary);
	}
	/**
	 * Get Primary
	 * @return string
	 */
	public function getPrimary()
	{
		return $this->Primary;
	}
	/**
	 * Set Secondary
	 * @param string Secondary
	 * @return string
	 */
	public function setSecondary($_Secondary)
	{
		return ($this->Secondary = $_Secondary);
	}
	/**
	 * Get Secondary
	 * @return string
	 */
	public function getSecondary()
	{
		return $this->Secondary;
	}
	/**
	 * Set Accent
	 * @param string Accent
	 * @return string
	 */
	public function setAccent($_Accent)
	{
		return ($this->Accent = $_Accent);
	}
	/**
	 * Get Accent
	 * @return string
	 */
	public function getAccent()
	{
		return $this->Accent;
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