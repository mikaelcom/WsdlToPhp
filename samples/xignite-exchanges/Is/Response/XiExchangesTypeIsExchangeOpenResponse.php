<?php
/**
 * Class file for XiExchangesTypeIsExchangeOpenResponse
 * @date 08/07/2012
 */
/**
 * Class XiExchangesTypeIsExchangeOpenResponse
 * @date 08/07/2012
 */
class XiExchangesTypeIsExchangeOpenResponse extends XiExchangesWsdlClass
{
	/**
	 * The IsExchangeOpenResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiExchangesTypeBooleanResult
	 */
	public $IsExchangeOpenResult;
	/**
	 * Constructor
	 * @param XiExchangesTypeBooleanResult IsExchangeOpenResult
	 * @return XiExchangesTypeIsExchangeOpenResponse
	 */
	public function __construct($_IsExchangeOpenResult = null)
	{
		parent::__construct(array('IsExchangeOpenResult'=>$_IsExchangeOpenResult));
	}
	/**
	 * Set IsExchangeOpenResult
	 * @param BooleanResult IsExchangeOpenResult
	 * @return BooleanResult
	 */
	public function setIsExchangeOpenResult($_IsExchangeOpenResult)
	{
		return ($this->IsExchangeOpenResult = $_IsExchangeOpenResult);
	}
	/**
	 * Get IsExchangeOpenResult
	 * @return XiExchangesTypeBooleanResult
	 */
	public function getIsExchangeOpenResult()
	{
		return $this->IsExchangeOpenResult;
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