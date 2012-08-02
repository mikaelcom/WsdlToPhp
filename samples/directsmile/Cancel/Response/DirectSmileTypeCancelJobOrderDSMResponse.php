<?php
/**
 * Class file for DirectSmileTypeCancelJobOrderDSMResponse
 * @date 02/08/2012
 */
/**
 * Class DirectSmileTypeCancelJobOrderDSMResponse
 * @date 02/08/2012
 */
class DirectSmileTypeCancelJobOrderDSMResponse extends DirectSmileWsdlClass
{
	/**
	 * The CancelJobOrderDSMResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $CancelJobOrderDSMResult;
	/**
	 * Constructor
	 * @param string CancelJobOrderDSMResult
	 * @return DirectSmileTypeCancelJobOrderDSMResponse
	 */
	public function __construct($_CancelJobOrderDSMResult = null)
	{
		parent::__construct(array('CancelJobOrderDSMResult'=>$_CancelJobOrderDSMResult));
	}
	/**
	 * Set CancelJobOrderDSMResult
	 * @param string CancelJobOrderDSMResult
	 * @return string
	 */
	public function setCancelJobOrderDSMResult($_CancelJobOrderDSMResult)
	{
		return ($this->CancelJobOrderDSMResult = $_CancelJobOrderDSMResult);
	}
	/**
	 * Get CancelJobOrderDSMResult
	 * @return string
	 */
	public function getCancelJobOrderDSMResult()
	{
		return $this->CancelJobOrderDSMResult;
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