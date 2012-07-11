<?php
/**
 * Class file for EbayTradingTypeNameValueRelationshipType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeNameValueRelationshipType
 * Documentation : Information about a parent name-value pair. Currently used to indicate relationships between Item Specifics.
 * @date 04/07/2012
 */
class EbayTradingTypeNameValueRelationshipType extends EbayTradingWsdlClass
{
	/**
	 * The ParentName
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The name of another Item Specific that the current value depends on. For example, in a clothing category, "Size Type" could be recommended as a parent of Size.
	 * @var string
	 */
	public $ParentName;
	/**
	 * The ParentValue
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- documentation : The value of another Item Specific that the current value depends on. For example, in a clothing category, if "Size Type" is the ParentName, then "Petite" could be recommended as a parent value for Size=Medium.
	 * @var string
	 */
	public $ParentValue;
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * Constructor
	 * @param string ParentName
	 * @param string ParentValue
	 * @param DOMDocument any
	 * @return EbayTradingTypeNameValueRelationshipType
	 */
	public function __construct($_ParentName = null,$_ParentValue = null,$_any = null)
	{
		parent::__construct(array('ParentName'=>$_ParentName,'ParentValue'=>$_ParentValue,'any'=>$_any));
	}
	/**
	 * Set ParentName
	 * @param string ParentName
	 * @return string
	 */
	public function setParentName($_ParentName)
	{
		return ($this->ParentName = $_ParentName);
	}
	/**
	 * Get ParentName
	 * @return string
	 */
	public function getParentName()
	{
		return $this->ParentName;
	}
	/**
	 * Set ParentValue
	 * @param string ParentValue
	 * @return string
	 */
	public function setParentValue($_ParentValue)
	{
		return ($this->ParentValue = $_ParentValue);
	}
	/**
	 * Get ParentValue
	 * @return string
	 */
	public function getParentValue()
	{
		return $this->ParentValue;
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