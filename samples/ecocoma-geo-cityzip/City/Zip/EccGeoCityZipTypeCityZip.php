<?php
/**
 * Class file for EccGeoCityZipTypeCityZip
 * @date 03/07/2012
 */
/**
 * Class EccGeoCityZipTypeCityZip
 * @date 03/07/2012
 */
class EccGeoCityZipTypeCityZip extends EccGeoCityZipWsdlClass
{
	/**
	 * The ZipCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccGeoCityZipTypeArrayOfZip
	 */
	public $ZipCode;
	/**
	 * Constructor
	 * @param EccGeoCityZipTypeArrayOfZip ZipCode
	 * @return EccGeoCityZipTypeCityZip
	 */
	public function __construct($_ZipCode = null)
	{
		parent::__construct(array('ZipCode'=>new EccGeoCityZipTypeArrayOfZip($_ZipCode)));
	}
	/**
	 * Set ZipCode
	 * @param ArrayOfZip ZipCode
	 * @return ArrayOfZip
	 */
	public function setZipCode($_ZipCode)
	{
		return ($this->ZipCode = $_ZipCode);
	}
	/**
	 * Get ZipCode
	 * @return EccGeoCityZipTypeArrayOfZip
	 */
	public function getZipCode()
	{
		return $this->ZipCode;
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