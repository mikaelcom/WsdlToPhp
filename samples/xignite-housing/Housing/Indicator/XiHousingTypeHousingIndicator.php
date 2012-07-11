<?php
/**
 * Class file for XiHousingTypeHousingIndicator
 * @date 08/07/2012
 */
/**
 * Class XiHousingTypeHousingIndicator
 * @date 08/07/2012
 */
class XiHousingTypeHousingIndicator extends XiHousingTypeCommon
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiHousingTypeIndicatorTypes
	 */
	public $Type;
	/**
	 * The ReleaseDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ReleaseDate;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The Unit
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Unit;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Description;
	/**
	 * Constructor
	 * @param XiHousingTypeIndicatorTypes Type
	 * @param string ReleaseDate
	 * @param double Value
	 * @param string Unit
	 * @param string Description
	 * @return XiHousingTypeHousingIndicator
	 */
	public function __construct($_Type,$_ReleaseDate = null,$_Value,$_Unit = null,$_Description = null)
	{
		XiHousingWsdlClass::__construct(array('Type'=>$_Type,'ReleaseDate'=>$_ReleaseDate,'Value'=>$_Value,'Unit'=>$_Unit,'Description'=>$_Description));
	}
	/**
	 * Set Type
	 * @param IndicatorTypes Type
	 * @return IndicatorTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiHousingTypeIndicatorTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiHousingTypeIndicatorTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set ReleaseDate
	 * @param string ReleaseDate
	 * @return string
	 */
	public function setReleaseDate($_ReleaseDate)
	{
		return ($this->ReleaseDate = $_ReleaseDate);
	}
	/**
	 * Get ReleaseDate
	 * @return string
	 */
	public function getReleaseDate()
	{
		return $this->ReleaseDate;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Unit
	 * @param string Unit
	 * @return string
	 */
	public function setUnit($_Unit)
	{
		return ($this->Unit = $_Unit);
	}
	/**
	 * Get Unit
	 * @return string
	 */
	public function getUnit()
	{
		return $this->Unit;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
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