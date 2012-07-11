<?php
/**
 * Class file for XiChartTypeGetPresetChartDesign
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeGetPresetChartDesign
 * @date 08/07/2012
 */
class XiChartTypeGetPresetChartDesign extends XiChartWsdlClass
{
	/**
	 * The Type
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiChartTypeChartTypes
	 */
	public $Type;
	/**
	 * The Preset
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Preset;
	/**
	 * Constructor
	 * @param XiChartTypeChartTypes Type
	 * @param string Preset
	 * @return XiChartTypeGetPresetChartDesign
	 */
	public function __construct($_Type,$_Preset = null)
	{
		parent::__construct(array('Type'=>$_Type,'Preset'=>$_Preset));
	}
	/**
	 * Set Type
	 * @param ChartTypes Type
	 * @return ChartTypes
	 */
	public function setType($_Type)
	{
		return ($this->Type = XiChartTypeChartTypes::valueIsValid($_Type)?$_Type:null);
	}
	/**
	 * Get Type
	 * @return XiChartTypeChartTypes
	 */
	public function getType()
	{
		return $this->Type;
	}
	/**
	 * Set Preset
	 * @param string Preset
	 * @return string
	 */
	public function setPreset($_Preset)
	{
		return ($this->Preset = $_Preset);
	}
	/**
	 * Get Preset
	 * @return string
	 */
	public function getPreset()
	{
		return $this->Preset;
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