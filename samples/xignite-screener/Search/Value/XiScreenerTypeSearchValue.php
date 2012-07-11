<?php
/**
 * Class file for XiScreenerTypeSearchValue
 * @date 08/07/2012
 */
/**
 * Class XiScreenerTypeSearchValue
 * @date 08/07/2012
 */
class XiScreenerTypeSearchValue extends XiScreenerWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiScreenerTypeFundamentalTypes
	 */
	public $Type;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * The ValueDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ValueDate;
	/**
	 * Constructor
	 * @param XiScreenerTypeFundamentalTypes Type
	 * @param string Value
	 * @param string ValueDate
	 * @return XiScreenerTypeSearchValue
	 */
	public function __construct($_Type,$_Value = null,$_ValueDate = null)
	{
		parent::__construct(array('Type'=>$_Type,'Value'=>$_Value,'ValueDate'=>$_ValueDate));
	}
	/**
	 * Set Type
	 * @param FundamentalTypes Type
	 * @return FundamentalTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiScreenerTypeFundamentalTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiScreenerTypeFundamentalTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Value
	 * @param string Value
	 * @return string
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return string
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set ValueDate
	 * @param string ValueDate
	 * @return string
	 */
	public function setValueDate($_ValueDate)
	{
		return ($this->ValueDate = $_ValueDate);
	}
	/**
	 * Get ValueDate
	 * @return string
	 */
	public function getValueDate()
	{
		return $this->ValueDate;
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