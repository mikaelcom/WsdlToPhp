<?php
/**
 * Class file for UsgsElevationTypeGetAllElevations
 * @date 08/07/2012
 */
/**
 * Class UsgsElevationTypeGetAllElevations
 * @date 08/07/2012
 */
class UsgsElevationTypeGetAllElevations extends UsgsElevationWsdlClass
{
	/**
	 * The X_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $X_Value;
	/**
	 * The Y_Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Y_Value;
	/**
	 * The Elevation_Units
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Elevation_Units;
	/**
	 * Constructor
	 * @param string X_Value
	 * @param string Y_Value
	 * @param string Elevation_Units
	 * @return UsgsElevationTypeGetAllElevations
	 */
	public function __construct($_X_Value = null,$_Y_Value = null,$_Elevation_Units = null)
	{
		parent::__construct(array('X_Value'=>$_X_Value,'Y_Value'=>$_Y_Value,'Elevation_Units'=>$_Elevation_Units));
	}
	/**
	 * Set X_Value
	 * @param string X_Value
	 * @return string
	 */
	public function setX_Value($_X_Value)
	{
		return ($this->X_Value = $_X_Value);
	}
	/**
	 * Get X_Value
	 * @return string
	 */
	public function getX_Value()
	{
		return $this->X_Value;
	}
	/**
	 * Set Y_Value
	 * @param string Y_Value
	 * @return string
	 */
	public function setY_Value($_Y_Value)
	{
		return ($this->Y_Value = $_Y_Value);
	}
	/**
	 * Get Y_Value
	 * @return string
	 */
	public function getY_Value()
	{
		return $this->Y_Value;
	}
	/**
	 * Set Elevation_Units
	 * @param string Elevation_Units
	 * @return string
	 */
	public function setElevation_Units($_Elevation_Units)
	{
		return ($this->Elevation_Units = $_Elevation_Units);
	}
	/**
	 * Get Elevation_Units
	 * @return string
	 */
	public function getElevation_Units()
	{
		return $this->Elevation_Units;
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