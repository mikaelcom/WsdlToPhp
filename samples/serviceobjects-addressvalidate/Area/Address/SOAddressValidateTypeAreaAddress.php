<?php
/**
 * Class file for SOAddressValidateTypeAreaAddress
 * @date 05/07/2012
 */
/**
 * Class SOAddressValidateTypeAreaAddress
 * @date 05/07/2012
 */
class SOAddressValidateTypeAreaAddress extends SOAddressValidateWsdlClass
{
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
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The PostalCodeFound
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCodeFound;
	/**
	 * The Error
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOAddressValidateTypeErr
	 */
	public $Error;
	/**
	 * Constructor
	 * @param string City
	 * @param string State
	 * @param string PostalCode
	 * @param string PostalCodeFound
	 * @param SOAddressValidateTypeErr Error
	 * @return SOAddressValidateTypeAreaAddress
	 */
	public function __construct($_City = null,$_State = null,$_PostalCode = null,$_PostalCodeFound = null,$_Error = null)
	{
		parent::__construct(array('City'=>$_City,'State'=>$_State,'PostalCode'=>$_PostalCode,'PostalCodeFound'=>$_PostalCodeFound,'Error'=>$_Error));
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
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set PostalCodeFound
	 * @param string PostalCodeFound
	 * @return string
	 */
	public function setPostalCodeFound($_PostalCodeFound)
	{
		return ($this->PostalCodeFound = $_PostalCodeFound);
	}
	/**
	 * Get PostalCodeFound
	 * @return string
	 */
	public function getPostalCodeFound()
	{
		return $this->PostalCodeFound;
	}
	/**
	 * Set Error
	 * @param Err Error
	 * @return Err
	 */
	public function setError($_Error)
	{
		return ($this->Error = $_Error);
	}
	/**
	 * Get Error
	 * @return SOAddressValidateTypeErr
	 */
	public function getError()
	{
		return $this->Error;
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