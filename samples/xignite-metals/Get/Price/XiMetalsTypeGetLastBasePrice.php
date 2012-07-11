<?php
/**
 * Class file for XiMetalsTypeGetLastBasePrice
 * @date 08/07/2012
 */
/**
 * Class XiMetalsTypeGetLastBasePrice
 * @date 08/07/2012
 */
class XiMetalsTypeGetLastBasePrice extends XiMetalsWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiMetalsTypeBaseMetalTypes
	 */
	public $Type;
	/**
	 * Constructor
	 * @param XiMetalsTypeBaseMetalTypes Type
	 * @return XiMetalsTypeGetLastBasePrice
	 */
	public function __construct($_Type)
	{
		parent::__construct(array('Type'=>$_Type));
	}
	/**
	 * Set Type
	 * @param BaseMetalTypes Type
	 * @return BaseMetalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiMetalsTypeBaseMetalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiMetalsTypeBaseMetalTypes
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