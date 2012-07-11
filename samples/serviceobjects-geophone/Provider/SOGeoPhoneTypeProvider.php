<?php
/**
 * Class file for SOGeoPhoneTypeProvider
 * @date 08/07/2012
 */
/**
 * Class SOGeoPhoneTypeProvider
 * @date 08/07/2012
 */
class SOGeoPhoneTypeProvider extends SOGeoPhoneWsdlClass
{
	/**
	 * The Name
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Name;
	/**
	 * The City
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $City;
	/**
	 * The State
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $State;
	/**
	 * The LineType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LineType;
	/**
	 * Constructor
	 * @param string Name
	 * @param string City
	 * @param string State
	 * @param string LineType
	 * @return SOGeoPhoneTypeProvider
	 */
	public function __construct($_Name = null,$_City = null,$_State = null,$_LineType = null)
	{
		parent::__construct(array('Name'=>$_Name,'City'=>$_City,'State'=>$_State,'LineType'=>$_LineType));
	}
	/**
	 * Set Name
	 * @param string Name
	 * @return string
	 */
	public function setName($_Name)
	{
		return ($this->Name = $_Name);
	}
	/**
	 * Get Name
	 * @return string
	 */
	public function getName()
	{
		return $this->Name;
	}
	/**
	 * Set City
	 * @param string City
	 * @return string
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param string State
	 * @return string
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return string
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set LineType
	 * @param string LineType
	 * @return string
	 */
	public function setLineType($_LineType)
	{
		return ($this->LineType = $_LineType);
	}
	/**
	 * Get LineType
	 * @return string
	 */
	public function getLineType()
	{
		return $this->LineType;
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