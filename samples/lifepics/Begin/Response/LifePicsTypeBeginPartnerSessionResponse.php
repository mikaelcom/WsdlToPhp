<?php
/**
 * Class file for LifePicsTypeBeginPartnerSessionResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeBeginPartnerSessionResponse
 * @date 02/08/2012
 */
class LifePicsTypeBeginPartnerSessionResponse extends LifePicsWsdlClass
{
	/**
	 * The BeginPartnerSessionResult
	 * @var LifePicsTypeBeginPartnerSessionResult
	 */
	public $BeginPartnerSessionResult;
	/**
	 * Constructor
	 * @param LifePicsTypeBeginPartnerSessionResult BeginPartnerSessionResult
	 * @return LifePicsTypeBeginPartnerSessionResponse
	 */
	public function __construct($_BeginPartnerSessionResult = null)
	{
		parent::__construct(array('BeginPartnerSessionResult'=>$_BeginPartnerSessionResult));
	}
	/**
	 * Set BeginPartnerSessionResult
	 * @param BeginPartnerSessionResult BeginPartnerSessionResult
	 * @return BeginPartnerSessionResult
	 */
	public function setBeginPartnerSessionResult($_BeginPartnerSessionResult)
	{
		return ($this->BeginPartnerSessionResult = $_BeginPartnerSessionResult);
	}
	/**
	 * Get BeginPartnerSessionResult
	 * @return LifePicsTypeBeginPartnerSessionResult
	 */
	public function getBeginPartnerSessionResult()
	{
		return $this->BeginPartnerSessionResult;
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