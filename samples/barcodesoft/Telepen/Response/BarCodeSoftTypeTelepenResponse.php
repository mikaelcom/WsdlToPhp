<?php
/**
 * Class file for BarCodeSoftTypeTelepenResponse
 * @date 02/08/2012
 */
/**
 * Class BarCodeSoftTypeTelepenResponse
 * @date 02/08/2012
 */
class BarCodeSoftTypeTelepenResponse extends BarCodeSoftWsdlClass
{
	/**
	 * The TelepenResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var base64Binary
	 */
	public $TelepenResult;
	/**
	 * Constructor
	 * @param base64Binary TelepenResult
	 * @return BarCodeSoftTypeTelepenResponse
	 */
	public function __construct($_TelepenResult = null)
	{
		parent::__construct(array('TelepenResult'=>$_TelepenResult));
	}
	/**
	 * Set TelepenResult
	 * @param base64Binary TelepenResult
	 * @return base64Binary
	 */
	public function setTelepenResult($_TelepenResult)
	{
		return ($this->TelepenResult = $_TelepenResult);
	}
	/**
	 * Get TelepenResult
	 * @return base64Binary
	 */
	public function getTelepenResult()
	{
		return $this->TelepenResult;
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