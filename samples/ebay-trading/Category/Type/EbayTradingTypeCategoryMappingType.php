<?php
/**
 * Class file for EbayTradingTypeCategoryMappingType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeCategoryMappingType
 * Documentation : Identifier for an active category. Unique for the site. These IDs correspond to the current IDs in the category hierarchy (returned from GetCategories and related calls). Multiple mappings can specify the same active category ID, because different old IDs can be mapped to the same active category. See "Mapping Categories on the Client Side" in the eBay Web Services guide. In GetCategoryMappings, this is always returned when CategoryMapping is returned.
 * @date 04/07/2012
 */
class EbayTradingTypeCategoryMappingType extends EbayTradingWsdlClass
{
	/**
	 * The any
	 * @var DOMDocument
	 */
	public $any;
	/**
	 * The oldID
	 * @var string
	 */
	public $oldID;
	/**
	 * The id
	 * @var string
	 */
	public $id;
	/**
	 * Constructor
	 * @param DOMDocument any
	 * @param string oldID
	 * @param string id
	 * @return EbayTradingTypeCategoryMappingType
	 */
	public function __construct($_any = null,$_oldID = null,$_id = null)
	{
		parent::__construct(array('any'=>$_any,'oldID'=>$_oldID,'id'=>$_id));
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
	 * Set oldID
	 * @param string oldID
	 * @return string
	 */
	public function setOldID($_oldID)
	{
		return ($this->oldID = $_oldID);
	}
	/**
	 * Get oldID
	 * @return string
	 */
	public function getOldID()
	{
		return $this->oldID;
	}
	/**
	 * Set id
	 * @param string id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get id
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
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