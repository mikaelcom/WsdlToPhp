<?php
/**
 * Class file for ConeSearchTypeDATA
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeDATA
 * @date 13/10/2012
 */
class ConeSearchTypeDATA extends ConeSearchWsdlClass
{
	/**
	 * The TABLEDATA
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeTABLEDATA
	 */
	public $TABLEDATA;
	/**
	 * The FITS
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeFITS
	 */
	public $FITS;
	/**
	 * The BINARY
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var ConeSearchTypeBINARY
	 */
	public $BINARY;
	/**
	 * Constructor
	 * @param ConeSearchTypeTABLEDATA TABLEDATA
	 * @param ConeSearchTypeFITS FITS
	 * @param ConeSearchTypeBINARY BINARY
	 * @return ConeSearchTypeDATA
	 */
	public function __construct($_TABLEDATA = null,$_FITS = null,$_BINARY = null)
	{
		parent::__construct(array('TABLEDATA'=>$_TABLEDATA,'FITS'=>$_FITS,'BINARY'=>$_BINARY));
	}
	/**
	 * Set TABLEDATA
	 * @param TABLEDATA TABLEDATA
	 * @return TABLEDATA
	 */
	public function setTABLEDATA($_TABLEDATA)
	{
		return ($this->TABLEDATA = $_TABLEDATA);
	}
	/**
	 * Get TABLEDATA
	 * @return ConeSearchTypeTABLEDATA
	 */
	public function getTABLEDATA()
	{
		return $this->TABLEDATA;
	}
	/**
	 * Set FITS
	 * @param FITS FITS
	 * @return FITS
	 */
	public function setFITS($_FITS)
	{
		return ($this->FITS = $_FITS);
	}
	/**
	 * Get FITS
	 * @return ConeSearchTypeFITS
	 */
	public function getFITS()
	{
		return $this->FITS;
	}
	/**
	 * Set BINARY
	 * @param BINARY BINARY
	 * @return BINARY
	 */
	public function setBINARY($_BINARY)
	{
		return ($this->BINARY = $_BINARY);
	}
	/**
	 * Get BINARY
	 * @return ConeSearchTypeBINARY
	 */
	public function getBINARY()
	{
		return $this->BINARY;
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