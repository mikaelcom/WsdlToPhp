<?php
/**
 * Class file for EccEmailPop3TypeCheckPOP3Response
 * @date 03/07/2012
 */
/**
 * Class EccEmailPop3TypeCheckPOP3Response
 * @date 03/07/2012
 */
class EccEmailPop3TypeCheckPOP3Response extends EccEmailPop3WsdlClass
{
	/**
	 * The CheckPOP3Result
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var EccEmailPop3TypePOP3
	 */
	public $CheckPOP3Result;
	/**
	 * Constructor
	 * @param EccEmailPop3TypePOP3 CheckPOP3Result
	 * @return EccEmailPop3TypeCheckPOP3Response
	 */
	public function __construct($_CheckPOP3Result = null)
	{
		parent::__construct(array('CheckPOP3Result'=>$_CheckPOP3Result));
	}
	/**
	 * Set CheckPOP3Result
	 * @param POP3 CheckPOP3Result
	 * @return POP3
	 */
	public function setCheckPOP3Result($_CheckPOP3Result)
	{
		return ($this->CheckPOP3Result = $_CheckPOP3Result);
	}
	/**
	 * Get CheckPOP3Result
	 * @return EccEmailPop3TypePOP3
	 */
	public function getCheckPOP3Result()
	{
		return $this->CheckPOP3Result;
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