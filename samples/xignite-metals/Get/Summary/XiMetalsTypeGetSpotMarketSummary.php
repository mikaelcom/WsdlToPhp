<?php
/**
 * Class file for XiMetalsTypeGetSpotMarketSummary
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetSpotMarketSummary
 * @date 08/07/2012
 */
class XiMetalsTypeGetSpotMarketSummary extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypePureMetalTypes
	 */
	public $Type;
	/**
	 * Constructor
	 * @param XiMetalsTypePureMetalTypes Type
	 * @return XiMetalsTypeGetSpotMarketSummary
	 */
	public function __construct($_Type)
	{
		parent::__construct(array('Type'=>$_Type));
	}
	/**
	 * Set Type
	 * @param PureMetalTypes Type
	 * @return PureMetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypePureMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypePureMetalTypes
	 */
	public function getType()
	{
		return $this->Type;
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