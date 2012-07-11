<?php
/**
 * Class file for AmazonFPSTypeGetDebtBalance
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetDebtBalance
 * @date 10/07/2012
 */
class AmazonFPSTypeGetDebtBalance extends AmazonFPSWsdlClass
{
	/**
	 * The CreditInstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $CreditInstrumentId;
	/**
	 * Constructor
	 * @param string CreditInstrumentId
	 * @return AmazonFPSTypeGetDebtBalance
	 */
	public function __construct($_CreditInstrumentId = null)
	{
		parent::__construct(array('CreditInstrumentId'=>$_CreditInstrumentId));
	}
	/**
	 * Set CreditInstrumentId
	 * @param string CreditInstrumentId
	 * @return string
	 */
	public function setCreditInstrumentId($_CreditInstrumentId)
	{
		return ($this->CreditInstrumentId = $_CreditInstrumentId);
	}
	/**
	 * Get CreditInstrumentId
	 * @return string
	 */
	public function getCreditInstrumentId()
	{
		return $this->CreditInstrumentId;
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