<?php
/**
 * Class file for AmazonAlexaTypePhysicalAddressType
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypePhysicalAddressType
 * @date 10/07/2012
 */
class AmazonAlexaTypePhysicalAddressType extends AmazonAlexaWsdlClass
{
	/**
	 * The Streets
	 * @var AmazonAlexaTypeStreets
	 */
	public $Streets;
	/**
	 * The City
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $City;
	/**
	 * The State
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $State;
	/**
	 * The PostalCode
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $PostalCode;
	/**
	 * The Country
	 * @var AmazonAlexaTypeGenericDataType
	 */
	public $Country;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeStreets Streets
	 * @param AmazonAlexaTypeGenericDataType City
	 * @param AmazonAlexaTypeGenericDataType State
	 * @param AmazonAlexaTypeGenericDataType PostalCode
	 * @param AmazonAlexaTypeGenericDataType Country
	 * @return AmazonAlexaTypePhysicalAddressType
	 */
	public function __construct($_Streets = null,$_City = null,$_State = null,$_PostalCode = null,$_Country = null)
	{
		parent::__construct(array('Streets'=>$_Streets,'City'=>$_City,'State'=>$_State,'PostalCode'=>$_PostalCode,'Country'=>$_Country));
	}
	/**
	 * Set Streets
	 * @param Streets Streets
	 * @return Streets
	 */
	public function setStreets($_Streets)
	{
		return ($this->Streets = $_Streets);
	}
	/**
	 * Get Streets
	 * @return AmazonAlexaTypeStreets
	 */
	public function getStreets()
	{
		return $this->Streets;
	}
	/**
	 * Set City
	 * @param GenericDataType City
	 * @return GenericDataType
	 */
	public function setCity($_City)
	{
		return ($this->City = $_City);
	}
	/**
	 * Get City
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getCity()
	{
		return $this->City;
	}
	/**
	 * Set State
	 * @param GenericDataType State
	 * @return GenericDataType
	 */
	public function setState($_State)
	{
		return ($this->State = $_State);
	}
	/**
	 * Get State
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getState()
	{
		return $this->State;
	}
	/**
	 * Set PostalCode
	 * @param GenericDataType PostalCode
	 * @return GenericDataType
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set Country
	 * @param GenericDataType Country
	 * @return GenericDataType
	 */
	public function setCountry($_Country)
	{
		return ($this->Country = $_Country);
	}
	/**
	 * Get Country
	 * @return AmazonAlexaTypeGenericDataType
	 */
	public function getCountry()
	{
		return $this->Country;
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