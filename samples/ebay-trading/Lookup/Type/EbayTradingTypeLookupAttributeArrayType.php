<?php
/**
 * Class file for EbayTradingTypeLookupAttributeArrayType
 * @date 04/07/2012
 */
/**
 * Class EbayTradingTypeLookupAttributeArrayType
 * Documentation : Only valid for items catalog-enabled categories.
 * @date 04/07/2012
 */
class EbayTradingTypeLookupAttributeArrayType extends EbayTradingWsdlClass
{
	/**
	 * The LookupAttribute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * 	- documentation : The condition of the item. When catalog-enabled categories start supporting the newer ConditionID field in production, use ConditionID instead of LookupAttribute.
	 * @var EbayTradingTypeLookupAttributeType
	 */
	public $LookupAttribute;
	/**
	 * Constructor
	 * @param EbayTradingTypeLookupAttributeType LookupAttribute
	 * @return EbayTradingTypeLookupAttributeArrayType
	 */
	public function __construct($_LookupAttribute = null)
	{
		parent::__construct(array('LookupAttribute'=>$_LookupAttribute));
	}
	/**
	 * Set LookupAttribute
	 * @param LookupAttributeType LookupAttribute
	 * @return LookupAttributeType
	 */
	public function setLookupAttribute($_LookupAttribute)
	{
		return ($this->LookupAttribute = $_LookupAttribute);
	}
	/**
	 * Get LookupAttribute
	 * @return EbayTradingTypeLookupAttributeType
	 */
	public function getLookupAttribute()
	{
		return $this->LookupAttribute;
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