<?php
/**
 * Class file for LifePicsTypeCreateAccountSendEmailEmailPromoResponse
 * @date 02/08/2012
 */
/**
 * Class LifePicsTypeCreateAccountSendEmailEmailPromoResponse
 * @date 02/08/2012
 */
class LifePicsTypeCreateAccountSendEmailEmailPromoResponse extends LifePicsWsdlClass
{
	/**
	 * The CreateAccountSendEmailEmailPromoResult
	 * @var LifePicsTypeCreateAccountSendEmailEmailPromoResult
	 */
	public $CreateAccountSendEmailEmailPromoResult;
	/**
	 * Constructor
	 * @param LifePicsTypeCreateAccountSendEmailEmailPromoResult CreateAccountSendEmailEmailPromoResult
	 * @return LifePicsTypeCreateAccountSendEmailEmailPromoResponse
	 */
	public function __construct($_CreateAccountSendEmailEmailPromoResult = null)
	{
		parent::__construct(array('CreateAccountSendEmailEmailPromoResult'=>$_CreateAccountSendEmailEmailPromoResult));
	}
	/**
	 * Set CreateAccountSendEmailEmailPromoResult
	 * @param CreateAccountSendEmailEmailPromoResult CreateAccountSendEmailEmailPromoResult
	 * @return CreateAccountSendEmailEmailPromoResult
	 */
	public function setCreateAccountSendEmailEmailPromoResult($_CreateAccountSendEmailEmailPromoResult)
	{
		return ($this->CreateAccountSendEmailEmailPromoResult = $_CreateAccountSendEmailEmailPromoResult);
	}
	/**
	 * Get CreateAccountSendEmailEmailPromoResult
	 * @return LifePicsTypeCreateAccountSendEmailEmailPromoResult
	 */
	public function getCreateAccountSendEmailEmailPromoResult()
	{
		return $this->CreateAccountSendEmailEmailPromoResult;
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