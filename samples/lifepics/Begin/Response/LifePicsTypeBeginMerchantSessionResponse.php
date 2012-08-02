<?php
/**
 * Class file for LifePicsTypeBeginMerchantSessionResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeBeginMerchantSessionResponse
 * @date 02/08/2012
 */
class LifePicsTypeBeginMerchantSessionResponse extends LifePicsWsdlClass
{
	/**
	 * The BeginMerchantSessionResult
	 * @var LifePicsTypeBeginMerchantSessionResult
	 */
	public $BeginMerchantSessionResult;
	/**
	 * Constructor
	 * @param LifePicsTypeBeginMerchantSessionResult BeginMerchantSessionResult
	 * @return LifePicsTypeBeginMerchantSessionResponse
	 */
	public function __construct($_BeginMerchantSessionResult = null)
	{
		parent::__construct(array('BeginMerchantSessionResult'=>$_BeginMerchantSessionResult));
	}
	/**
	 * Set BeginMerchantSessionResult
	 * @param BeginMerchantSessionResult BeginMerchantSessionResult
	 * @return BeginMerchantSessionResult
	 */
	public function setBeginMerchantSessionResult($_BeginMerchantSessionResult)
	{
		return ($this->BeginMerchantSessionResult = $_BeginMerchantSessionResult);
	}
	/**
	 * Get BeginMerchantSessionResult
	 * @return LifePicsTypeBeginMerchantSessionResult
	 */
	public function getBeginMerchantSessionResult()
	{
		return $this->BeginMerchantSessionResult;
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