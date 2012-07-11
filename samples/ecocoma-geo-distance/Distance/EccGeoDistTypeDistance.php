<?php
/**
 * Class file for EccGeoDistTypeDistance
 * @date 03/07/2012
 */
/**
 * Class EccGeoDistTypeDistance
 * @date 03/07/2012
 */
class EccGeoDistTypeDistance extends EccGeoDistWsdlClass
{
	/**
	 * The Location01
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Location01;
	/**
	 * The Location02
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Location02;
	/**
	 * The Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Result;
	/**
	 * Constructor
	 * @param string Location01
	 * @param string Location02
	 * @param string Result
	 * @return EccGeoDistTypeDistance
	 */
	public function __construct($_Location01 = null,$_Location02 = null,$_Result = null)
	{
		parent::__construct(array('Location01'=>$_Location01,'Location02'=>$_Location02,'Result'=>$_Result));
	}
	/**
	 * Set Location01
	 * @param string Location01
	 * @return string
	 */
	public function setLocation01($_Location01)
	{
		return ($this->Location01 = $_Location01);
	}
	/**
	 * Get Location01
	 * @return string
	 */
	public function getLocation01()
	{
		return $this->Location01;
	}
	/**
	 * Set Location02
	 * @param string Location02
	 * @return string
	 */
	public function setLocation02($_Location02)
	{
		return ($this->Location02 = $_Location02);
	}
	/**
	 * Get Location02
	 * @return string
	 */
	public function getLocation02()
	{
		return $this->Location02;
	}
	/**
	 * Set Result
	 * @param string Result
	 * @return string
	 */
	public function setResult($_Result)
	{
		return ($this->Result = $_Result);
	}
	/**
	 * Get Result
	 * @return string
	 */
	public function getResult()
	{
		return $this->Result;
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