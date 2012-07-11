<?php
/**
 * Class file for XiChartTypeGetChartDesign
 * @date 08/07/2012
 */
/**
 * Class XiChartTypeGetChartDesign
 * @date 08/07/2012
 */
class XiChartTypeGetChartDesign extends XiChartWsdlClass
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
	 * Constructor
	 * @param XiChartTypeChartTypes Type
	 * @return XiChartTypeGetChartDesign
	 */
	public function __construct($_Type)
	{
		parent::__construct(array('Type'=>$_Type));
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
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>