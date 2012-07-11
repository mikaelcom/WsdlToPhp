<?php
/**
 * Class file for EbayTradingTypeCharacteristicsSetType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCharacteristicsSetType
 * Documentation : A level in the eBay category hierarchy at which a particular group of items can share a common set of attributes. A set of characteristics that can be used to describe similar kinds of items in a standardized way.
 * @date 04/07/2012
 */
class EbayTradingTypeCharacteristicsSetType extends EbayTradingWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The well-known name of the characteristic set (e.g., "Tickets" or "Books").
	 * @var string
	 */
	public $Name;
	/**
	 * The AttributeSetID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Numeric value that identifies the characteristic set in a language-independent way. Identifies the characteristic set that is mapped to a catalog-enabled category associated with the product. Unique across all eBay sites.
	 * @var int
	 */
	public $AttributeSetID;
	/**
	 * The AttributeSetVersion
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Version of the characteristics set. Not to be confused with AttributeSystemVersion, which can be used to retrieve changes to attribute meta-data. In item-listing requests, if you specify the version of the attribute set that you have stored locally, eBay will compare it to the current version on the site and return a warning if the versions do not match. If an error occurs due to invalid attribute data, this warning can be useful to help determine if you might be sending outdated data. The current value of version is not necessarily "greater than" the previous value.
	 * @var string
	 */
	public $AttributeSetVersion;
	/**
	 * The Characteristics
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A salient aspect or feature of an item. Used to describe an item in a standard way so that buyers can find it more easily. An individual, standardized characteristic that is common to all items within the specified characteristic set. In the context of GetProductSearchPage, each characteristic identifies a single searchable attribute. A searchable attribute is a product aspect or feature that can be used as a criterion in a search for catalog content. For example, "Title" might be a criterion for searching the book catalog for Pre- filled Item Information related to books. See the eBay Web Services guide for more information.
	 * @var EbayTradingTypeCharacteristicType
	 */
	public $Characteristics;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string Name
	 * @param int AttributeSetID
	 * @param string AttributeSetVersion
	 * @param EbayTradingTypeCharacteristicType Characteristics
	 * @param DOMDocument any
	 * @return EbayTradingTypeCharacteristicsSetType
	 */
	public function __construct($_Name = null,$_AttributeSetID = null,$_AttributeSetVersion = null,$_Characteristics = null,$_any = null)
	{
		parent::__construct(array('Name'=>$_Name,'AttributeSetID'=>$_AttributeSetID,'AttributeSetVersion'=>$_AttributeSetVersion,'Characteristics'=>$_Characteristics,'any'=>$_any));
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
	 * Set AttributeSetID
	 * @param int AttributeSetID
	 * @return int
	 */
	public function setAttributeSetID($_AttributeSetID)
	{
		return ($this->AttributeSetID = $_AttributeSetID);
	}
	/**
	 * Get AttributeSetID
	 * @return int
	 */
	public function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
	/**
	 * Set AttributeSetVersion
	 * @param string AttributeSetVersion
	 * @return string
	 */
	public function setAttributeSetVersion($_AttributeSetVersion)
	{
		return ($this->AttributeSetVersion = $_AttributeSetVersion);
	}
	/**
	 * Get AttributeSetVersion
	 * @return string
	 */
	public function getAttributeSetVersion()
	{
		return $this->AttributeSetVersion;
	}
	/**
	 * Set Characteristics
	 * @param CharacteristicType Characteristics
	 * @return CharacteristicType
	 */
	public function setCharacteristics($_Characteristics)
	{
		return ($this->Characteristics = $_Characteristics);
	}
	/**
	 * Get Characteristics
	 * @return EbayTradingTypeCharacteristicType
	 */
	public function getCharacteristics()
	{
		return $this->Characteristics;
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