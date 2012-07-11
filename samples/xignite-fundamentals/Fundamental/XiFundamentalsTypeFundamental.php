<?php
/**
 * Class file for XiFundamentalsTypeFundamental
 * @date 08/07/2012
 */
/**
 * Class XiFundamentalsTypeFundamental
 * @date 08/07/2012
 */
class XiFundamentalsTypeFundamental extends XiFundamentalsTypeBase
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiFundamentalsTypeFundamentalTypes
	 */
	public $Type;
	/**
	 * Constructor
	 * @param XiFundamentalsTypeFundamentalTypes Type
	 * @return XiFundamentalsTypeFundamental
	 */
	public function __construct($_Type)
	{
		XiFundamentalsWsdlClass::__construct(array('Type'=>$_Type));
	}
	/**
	 * Set Type
	 * @param FundamentalTypes Type
	 * @return FundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiFundamentalsTypeFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiFundamentalsTypeFundamentalTypes
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