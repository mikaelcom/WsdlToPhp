<?php
/**
 * Class file for XiGlobalFundamentalsTypeFundamental
 * @date 08/07/2012
 */
/**
 * Class XiGlobalFundamentalsTypeFundamental
 * @date 08/07/2012
 */
class XiGlobalFundamentalsTypeFundamental extends XiGlobalFundamentalsTypeBase
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiGlobalFundamentalsTypeFundamentalTypes
	 */
	public $Type;
	/**
	 * Constructor
	 * @param XiGlobalFundamentalsTypeFundamentalTypes Type
	 * @return XiGlobalFundamentalsTypeFundamental
	 */
	public function __construct($_Type)
	{
		XiGlobalFundamentalsWsdlClass::__construct(array('Type'=>$_Type));
	}
	/**
	 * Set Type
	 * @param FundamentalTypes Type
	 * @return FundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiGlobalFundamentalsTypeFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiGlobalFundamentalsTypeFundamentalTypes
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