<?php
/**
 * Class file for JmDataMovieAppTypeCustomerCard
 * @date 10/07/2012
 */
/**
 * Class JmDataMovieAppTypeCustomerCard
 * @date 10/07/2012
 */
class JmDataMovieAppTypeCustomerCard extends JmDataMovieAppWsdlClass
{
	/**
	 * The Barcode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Barcode;
	/**
	 * The CustomerNbr
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CustomerNbr;
	/**
	 * Constructor
	 * @param string Barcode
	 * @param string CustomerNbr
	 * @return JmDataMovieAppTypeCustomerCard
	 */
	public function __construct($_Barcode = null,$_CustomerNbr = null)
	{
		parent::__construct(array('Barcode'=>$_Barcode,'CustomerNbr'=>$_CustomerNbr));
	}
	/**
	 * Set Barcode
	 * @param string Barcode
	 * @return string
	 */
	public function setBarcode($_Barcode)
	{
		return ($this->Barcode = $_Barcode);
	}
	/**
	 * Get Barcode
	 * @return string
	 */
	public function getBarcode()
	{
		return $this->Barcode;
	}
	/**
	 * Set CustomerNbr
	 * @param string CustomerNbr
	 * @return string
	 */
	public function setCustomerNbr($_CustomerNbr)
	{
		return ($this->CustomerNbr = $_CustomerNbr);
	}
	/**
	 * Get CustomerNbr
	 * @return string
	 */
	public function getCustomerNbr()
	{
		return $this->CustomerNbr;
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