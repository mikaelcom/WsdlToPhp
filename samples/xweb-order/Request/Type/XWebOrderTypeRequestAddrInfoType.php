<?php
/**
 * Class file for XWebOrderTypeRequestAddrInfoType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestAddrInfoType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestAddrInfoType extends XWebOrderWsdlClass
{
	/**
	 * The Addr
	 * @var Addr
	 */
	public $Addr;
	/**
	 * Constructor
	 * @param Addr Addr
	 * @return XWebOrderTypeRequestAddrInfoType
	 */
	public function __construct($_Addr = null)
	{
		parent::__construct(array('Addr'=>$_Addr));
	}
	/**
	 * Set Addr
	 * @param Addr Addr
	 * @return Addr
	 */
	public function setAddr($_Addr)
	{
		return ($this->Addr = $_Addr);
	}
	/**
	 * Get Addr
	 * @return Addr
	 */
	public function getAddr()
	{
		return $this->Addr;
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