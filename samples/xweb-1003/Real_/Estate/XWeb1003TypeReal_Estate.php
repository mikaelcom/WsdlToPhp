<?php
/**
 * Class file for XWeb1003TypeReal_Estate
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeReal_Estate
 * @date 09/07/2012
 */
class XWeb1003TypeReal_Estate extends XWeb1003WsdlClass
{
	/**
	 * The Property
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 3
	 * @var XWeb1003TypeRealEstatePropertyType
	 */
	public $Property;
	/**
	 * Constructor
	 * @param XWeb1003TypeRealEstatePropertyType Property
	 * @return XWeb1003TypeReal_Estate
	 */
	public function __construct($_Property = null)
	{
		parent::__construct(array('Property'=>$_Property));
	}
	/**
	 * Set Property
	 * @param RealEstatePropertyType Property
	 * @return RealEstatePropertyType
	 */
	public function setProperty($_Property)
	{
		return ($this->Property = $_Property);
	}
	/**
	 * Get Property
	 * @return XWeb1003TypeRealEstatePropertyType
	 */
	public function getProperty()
	{
		return $this->Property;
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