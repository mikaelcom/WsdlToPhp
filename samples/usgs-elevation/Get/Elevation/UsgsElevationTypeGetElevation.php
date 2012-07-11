<?php
/**
 * Class file for UsgsElevationTypeGetElevation
 * @date 08/07/2012
 */
/**
 * Class UsgsElevationTypeGetElevation
 * @date 08/07/2012
 */
class UsgsElevationTypeGetElevation extends UsgsElevationWsdlClass
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
	 * The Source_Layer
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Source_Layer;
	/**
	 * The Elevation_Only
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Elevation_Only;
	/**
	 * Constructor
	 * @param string X_Value
	 * @param string Y_Value
	 * @param string Elevation_Units
	 * @param string Source_Layer
	 * @param string Elevation_Only
	 * @return UsgsElevationTypeGetElevation
	 */
	public function __construct($_X_Value = null,$_Y_Value = null,$_Elevation_Units = null,$_Source_Layer = null,$_Elevation_Only = null)
	{
		parent::__construct(array('X_Value'=>$_X_Value,'Y_Value'=>$_Y_Value,'Elevation_Units'=>$_Elevation_Units,'Source_Layer'=>$_Source_Layer,'Elevation_Only'=>$_Elevation_Only));
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
	 * Set Source_Layer
	 * @param string Source_Layer
	 * @return string
	 */
	public function setSource_Layer($_Source_Layer)
	{
		return ($this->Source_Layer = $_Source_Layer);
	}
	/**
	 * Get Source_Layer
	 * @return string
	 */
	public function getSource_Layer()
	{
		return $this->Source_Layer;
	}
	/**
	 * Set Elevation_Only
	 * @param string Elevation_Only
	 * @return string
	 */
	public function setElevation_Only($_Elevation_Only)
	{
		return ($this->Elevation_Only = $_Elevation_Only);
	}
	/**
	 * Get Elevation_Only
	 * @return string
	 */
	public function getElevation_Only()
	{
		return $this->Elevation_Only;
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