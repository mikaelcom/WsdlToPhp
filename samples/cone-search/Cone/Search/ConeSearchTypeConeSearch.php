<?php
/**
 * Class file for ConeSearchTypeConeSearch
 * @date 13/10/2012
 */
/**
 * Class ConeSearchTypeConeSearch
 * @date 13/10/2012
 */
class ConeSearchTypeConeSearch extends ConeSearchWsdlClass
{
	/**
	 * The ra
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ra;
	/**
	 * The dec
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $dec;
	/**
	 * The sr
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $sr;
	/**
	 * Constructor
	 * @param double ra
	 * @param double dec
	 * @param double sr
	 * @return ConeSearchTypeConeSearch
	 */
	public function __construct($_ra,$_dec,$_sr)
	{
		parent::__construct(array('ra'=>$_ra,'dec'=>$_dec,'sr'=>$_sr));
	}
	/**
	 * Set ra
	 * @param double ra
	 * @return double
	 */
	public function setRa($_ra)
	{
		return ($this->ra = $_ra);
	}
	/**
	 * Get ra
	 * @return double
	 */
	public function getRa()
	{
		return $this->ra;
	}
	/**
	 * Set dec
	 * @param double dec
	 * @return double
	 */
	public function setDec($_dec)
	{
		return ($this->dec = $_dec);
	}
	/**
	 * Get dec
	 * @return double
	 */
	public function getDec()
	{
		return $this->dec;
	}
	/**
	 * Set sr
	 * @param double sr
	 * @return double
	 */
	public function setSr($_sr)
	{
		return ($this->sr = $_sr);
	}
	/**
	 * Get sr
	 * @return double
	 */
	public function getSr()
	{
		return $this->sr;
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