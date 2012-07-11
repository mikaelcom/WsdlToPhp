<?php
/**
 * Class file for EbayTradingTypeItemCompatibilityType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeItemCompatibilityType
 * Documentation : All information corresponding to an individual compatibility by application.
 * @date 04/07/2012
 */
class EbayTradingTypeItemCompatibilityType extends EbayTradingWsdlClass
{
	/**
	 * The Delete
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : Removes individual parts compatibility nodes from the compatibility list. Set to true within the compatibility to delete. <br><br> This field can only be used when revising an item or template. <br> If the listing has bids or ends within 12 hours, you cannot delete item compatibilities.
	 * @var boolean
	 */
	public $Delete;
	/**
	 * The NameValueList
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : A name-value pair describing a single compatible application. The allowed names and values are specific to the primary category in which the item is listed. For example, when listing in a Parts & Accessories category, where the applications are vehicles, the allowed names might include Year, Make, and Model, and the values would correspond to specific vehicles in eBay's catalog. <br><br> The eBay Germany site supports the use of K type vehicle numbers to specify parts compatibility. To use a K type number to specify item compatiblities, set the Name field to "KType" and set the corresponding Value field to the K type number.
	 * @var EbayTradingTypeNameValueListType
	 */
	public $NameValueList;
	/**
	 * The CompatibilityNotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The seller may optionally enter any notes pertaining to the compatibility being specified. Use this field to specify the placement of the part on a vehicle or the type of vehicle a part fits.
	 * @var string
	 */
	public $CompatibilityNotes;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param boolean Delete
	 * @param EbayTradingTypeNameValueListType NameValueList
	 * @param string CompatibilityNotes
	 * @param DOMDocument any
	 * @return EbayTradingTypeItemCompatibilityType
	 */
	public function __construct($_Delete = null,$_NameValueList = null,$_CompatibilityNotes = null,$_any = null)
	{
		parent::__construct(array('Delete'=>$_Delete,'NameValueList'=>$_NameValueList,'CompatibilityNotes'=>$_CompatibilityNotes,'any'=>$_any));
	}
	/**
	 * Set Delete
	 * @param boolean Delete
	 * @return boolean
	 */
	public function setDelete($_Delete)
	{
		return ($this->Delete = $_Delete);
	}
	/**
	 * Get Delete
	 * @return boolean
	 */
	public function getDelete()
	{
		return $this->Delete;
	}
	/**
	 * Set NameValueList
	 * @param NameValueListType NameValueList
	 * @return NameValueListType
	 */
	public function setNameValueList($_NameValueList)
	{
		return ($this->NameValueList = $_NameValueList);
	}
	/**
	 * Get NameValueList
	 * @return EbayTradingTypeNameValueListType
	 */
	public function getNameValueList()
	{
		return $this->NameValueList;
	}
	/**
	 * Set CompatibilityNotes
	 * @param string CompatibilityNotes
	 * @return string
	 */
	public function setCompatibilityNotes($_CompatibilityNotes)
	{
		return ($this->CompatibilityNotes = $_CompatibilityNotes);
	}
	/**
	 * Get CompatibilityNotes
	 * @return string
	 */
	public function getCompatibilityNotes()
	{
		return $this->CompatibilityNotes;
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