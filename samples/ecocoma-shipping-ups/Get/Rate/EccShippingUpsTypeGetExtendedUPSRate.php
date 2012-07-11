<?php
/**
 * Class file for EccShippingUpsTypeGetExtendedUPSRate
 * @date 03/07/2012
 */
/**
 * Class EccShippingUpsTypeGetExtendedUPSRate
 * @date 03/07/2012
 */
class EccShippingUpsTypeGetExtendedUPSRate extends EccShippingUpsWsdlClass
{
	/**
	 * The KeyID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $KeyID;
	/**
	 * The DomainID
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $DomainID;
	/**
	 * The origPostal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $origPostal;
	/**
	 * The origCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $origCountry;
	/**
	 * The destPostal
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $destPostal;
	/**
	 * The destCountry
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $destCountry;
	/**
	 * The Weight
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Weight;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Value;
	/**
	 * The Options
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccShippingUpsTypeOptions
	 */
	public $Options;
	/**
	 * Constructor
	 * @param string KeyID
	 * @param string DomainID
	 * @param string origPostal
	 * @param string origCountry
	 * @param string destPostal
	 * @param string destCountry
	 * @param string Weight
	 * @param string Value
	 * @param EccShippingUpsTypeOptions Options
	 * @return EccShippingUpsTypeGetExtendedUPSRate
	 */
	public function __construct($_KeyID = null,$_DomainID = null,$_origPostal = null,$_origCountry = null,$_destPostal = null,$_destCountry = null,$_Weight = null,$_Value = null,$_Options = null)
	{
		parent::__construct(array('KeyID'=>$_KeyID,'DomainID'=>$_DomainID,'origPostal'=>$_origPostal,'origCountry'=>$_origCountry,'destPostal'=>$_destPostal,'destCountry'=>$_destCountry,'Weight'=>$_Weight,'Value'=>$_Value,'Options'=>$_Options));
	}
	/**
	 * Set KeyID
	 * @param string KeyID
	 * @return string
	 */
	public function setKeyID($_KeyID)
	{
		return ($this->KeyID = $_KeyID);
	}
	/**
	 * Get KeyID
	 * @return string
	 */
	public function getKeyID()
	{
		return $this->KeyID;
	}
	/**
	 * Set DomainID
	 * @param string DomainID
	 * @return string
	 */
	public function setDomainID($_DomainID)
	{
		return ($this->DomainID = $_DomainID);
	}
	/**
	 * Get DomainID
	 * @return string
	 */
	public function getDomainID()
	{
		return $this->DomainID;
	}
	/**
	 * Set origPostal
	 * @param string origPostal
	 * @return string
	 */
	public function setOrigPostal($_origPostal)
	{
		return ($this->origPostal = $_origPostal);
	}
	/**
	 * Get origPostal
	 * @return string
	 */
	public function getOrigPostal()
	{
		return $this->origPostal;
	}
	/**
	 * Set origCountry
	 * @param string origCountry
	 * @return string
	 */
	public function setOrigCountry($_origCountry)
	{
		return ($this->origCountry = $_origCountry);
	}
	/**
	 * Get origCountry
	 * @return string
	 */
	public function getOrigCountry()
	{
		return $this->origCountry;
	}
	/**
	 * Set destPostal
	 * @param string destPostal
	 * @return string
	 */
	public function setDestPostal($_destPostal)
	{
		return ($this->destPostal = $_destPostal);
	}
	/**
	 * Get destPostal
	 * @return string
	 */
	public function getDestPostal()
	{
		return $this->destPostal;
	}
	/**
	 * Set destCountry
	 * @param string destCountry
	 * @return string
	 */
	public function setDestCountry($_destCountry)
	{
		return ($this->destCountry = $_destCountry);
	}
	/**
	 * Get destCountry
	 * @return string
	 */
	public function getDestCountry()
	{
		return $this->destCountry;
	}
	/**
	 * Set Weight
	 * @param string Weight
	 * @return string
	 */
	public function setWeight($_Weight)
	{
		return ($this->Weight = $_Weight);
	}
	/**
	 * Get Weight
	 * @return string
	 */
	public function getWeight()
	{
		return $this->Weight;
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
	 * Set Options
	 * @param Options Options
	 * @return Options
	 */
	public function setOptions($_Options)
	{
		return ($this->Options = $_Options);
	}
	/**
	 * Get Options
	 * @return EccShippingUpsTypeOptions
	 */
	public function getOptions()
	{
		return $this->Options;
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