<?php
/**
 * Class file for XiMetalsTypeGetAllDelayedMetalFutures
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetAllDelayedMetalFutures
 * @date 08/07/2012
 */
class XiMetalsTypeGetAllDelayedMetalFutures extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeMetalFutureTypes
	 */
	public $Type;
	/**
	 * Constructor
	 * @param XiMetalsTypeMetalFutureTypes Type
	 * @return XiMetalsTypeGetAllDelayedMetalFutures
	 */
	public function __construct($_Type)
	{
		parent::__construct(array('Type'=>$_Type));
	}
	/**
	 * Set Type
	 * @param MetalFutureTypes Type
	 * @return MetalFutureTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeMetalFutureTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeMetalFutureTypes
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