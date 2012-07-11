<?php
/**
 * Class file for XiEdgarTypeSECBusinessAddress
 * @date 08/07/2012
 */
/**
 * Class XiEdgarTypeSECBusinessAddress
 * @date 08/07/2012
 */
class XiEdgarTypeSECBusinessAddress extends XiEdgarWsdlClass
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
	 * The ZIP
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ZIP;
	/**
	 * The BusinessPhone
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $BusinessPhone;
	/**
	 * Constructor
	 * @param string Street1
	 * @param string Street2
	 * @param string City
	 * @param string State
	 * @param string ZIP
	 * @param string BusinessPhone
	 * @return XiEdgarTypeSECBusinessAddress
	 */
	public function __construct($_Street1 = null,$_Street2 = null,$_City = null,$_State = null,$_ZIP = null,$_BusinessPhone = null)
	{
		parent::__construct(array('Street1'=>$_Street1,'Street2'=>$_Street2,'City'=>$_City,'State'=>$_State,'ZIP'=>$_ZIP,'BusinessPhone'=>$_BusinessPhone));
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
	 * Set ZIP
	 * @param string ZIP
	 * @return string
	 */
	public function setZIP($_ZIP)
	{
		return ($this->ZIP = $_ZIP);
	}
	/**
	 * Get ZIP
	 * @return string
	 */
	public function getZIP()
	{
		return $this->ZIP;
	}
	/**
	 * Set BusinessPhone
	 * @param string BusinessPhone
	 * @return string
	 */
	public function setBusinessPhone($_BusinessPhone)
	{
		return ($this->BusinessPhone = $_BusinessPhone);
	}
	/**
	 * Get BusinessPhone
	 * @return string
	 */
	public function getBusinessPhone()
	{
		return $this->BusinessPhone;
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