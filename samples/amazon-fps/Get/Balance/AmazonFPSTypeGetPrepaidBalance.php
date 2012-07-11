<?php
/**
 * Class file for AmazonFPSTypeGetPrepaidBalance
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeGetPrepaidBalance
 * @date 10/07/2012
 */
class AmazonFPSTypeGetPrepaidBalance extends AmazonFPSWsdlClass
{
	/**
	 * The PrepaidInstrumentId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $PrepaidInstrumentId;
	/**
	 * Constructor
	 * @param string PrepaidInstrumentId
	 * @return AmazonFPSTypeGetPrepaidBalance
	 */
	public function __construct($_PrepaidInstrumentId = null)
	{
		parent::__construct(array('PrepaidInstrumentId'=>$_PrepaidInstrumentId));
	}
	/**
	 * Set PrepaidInstrumentId
	 * @param string PrepaidInstrumentId
	 * @return string
	 */
	public function setPrepaidInstrumentId($_PrepaidInstrumentId)
	{
		return ($this->PrepaidInstrumentId = $_PrepaidInstrumentId);
	}
	/**
	 * Get PrepaidInstrumentId
	 * @return string
	 */
	public function getPrepaidInstrumentId()
	{
		return $this->PrepaidInstrumentId;
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