<?php
/**
 * Class file for SOValidateCanadaTypeValidateCanadianMunicipalityProvinceResponse
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaTypeValidateCanadianMunicipalityProvinceResponse
 * @date 05/07/2012
 */
class SOValidateCanadaTypeValidateCanadianMunicipalityProvinceResponse extends SOValidateCanadaWsdlClass
{
	/**
	 * The ValidateCanadianMunicipalityProvinceResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var SOValidateCanadaTypeAddress
	 */
	public $ValidateCanadianMunicipalityProvinceResult;
	/**
	 * Constructor
	 * @param SOValidateCanadaTypeAddress ValidateCanadianMunicipalityProvinceResult
	 * @return SOValidateCanadaTypeValidateCanadianMunicipalityProvinceResponse
	 */
	public function __construct($_ValidateCanadianMunicipalityProvinceResult = null)
	{
		parent::__construct(array('ValidateCanadianMunicipalityProvinceResult'=>$_ValidateCanadianMunicipalityProvinceResult));
	}
	/**
	 * Set ValidateCanadianMunicipalityProvinceResult
	 * @param Address ValidateCanadianMunicipalityProvinceResult
	 * @return Address
	 */
	public function setValidateCanadianMunicipalityProvinceResult($_ValidateCanadianMunicipalityProvinceResult)
	{
		return ($this->ValidateCanadianMunicipalityProvinceResult = $_ValidateCanadianMunicipalityProvinceResult);
	}
	/**
	 * Get ValidateCanadianMunicipalityProvinceResult
	 * @return SOValidateCanadaTypeAddress
	 */
	public function getValidateCanadianMunicipalityProvinceResult()
	{
		return $this->ValidateCanadianMunicipalityProvinceResult;
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