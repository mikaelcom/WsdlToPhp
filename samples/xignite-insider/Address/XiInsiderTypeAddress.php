<?php
/**
 * Class file for XiInsiderTypeAddress
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeAddress
 * @date 08/07/2012
 */
class XiInsiderTypeAddress extends XiInsiderTypeCommon
{
	/**
	 * The Street1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Street1;
	/**
	 * The Street2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Street2;
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
	 * The ZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZipCode;
	/**
	 * The StateDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $StateDescription;
	/**
	 * Constructor
	 * @param string Street1
	 * @param string Street2
	 * @param string City
	 * @param string State
	 * @param string ZipCode
	 * @param string StateDescription
	 * @return XiInsiderTypeAddress
	 */
	public function __construct($_Street1 = null,$_Street2 = null,$_City = null,$_State = null,$_ZipCode = null,$_StateDescription = null)
	{
		XiInsiderWsdlClass::__construct(array('Street1'=>$_Street1,'Street2'=>$_Street2,'City'=>$_City,'State'=>$_State,'ZipCode'=>$_ZipCode,'StateDescription'=>$_StateDescription));
	}
	/**
	 * Set Street1
	 * @param string Street1
	 * @return string
	 */
	public function setStreet1($_Street1)
	{
		return ($this->Street1 = $_Street1);
	}
	/**
	 * Get Street1
	 * @return string
	 */
	public function getStreet1()
	{
		return $this->Street1;
	}
	/**
	 * Set Street2
	 * @param string Street2
	 * @return string
	 */
	public function setStreet2($_Street2)
	{
		return ($this->Street2 = $_Street2);
	}
	/**
	 * Get Street2
	 * @return string
	 */
	public function getStreet2()
	{
		return $this->Street2;
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
	 * Set ZipCode
	 * @param string ZipCode
	 * @return string
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return string
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
	}
	/**
	 * Set StateDescription
	 * @param string StateDescription
	 * @return string
	 */
	public function setStateDescription($_StateDescription)
	{
		return ($this->StateDescription = $_StateDescription);
	}
	/**
	 * Get StateDescription
	 * @return string
	 */
	public function getStateDescription()
	{
		return $this->StateDescription;
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