<?php
/**
 * Class file for XiInsiderTypeTransactionCoding
 * @date 08/07/2012
 */
/**
 * Class XiInsiderTypeTransactionCoding
 * @date 08/07/2012
 */
class XiInsiderTypeTransactionCoding extends XiInsiderWsdlClass
{
	/**
	 * The transactionFormType
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $transactionFormType;
	/**
	 * The transactionCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $transactionCode;
	/**
	 * The equitySwapInvolved
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var int
	 */
	public $equitySwapInvolved;
	/**
	 * The footnotes
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiInsiderTypeArrayOfFootnote
	 */
	public $footnotes;
	/**
	 * Constructor
	 * @param string transactionFormType
	 * @param string transactionCode
	 * @param int equitySwapInvolved
	 * @param XiInsiderTypeArrayOfFootnote footnotes
	 * @return XiInsiderTypeTransactionCoding
	 */
	public function __construct($_transactionFormType = null,$_transactionCode = null,$_equitySwapInvolved,$_footnotes = null)
	{
		parent::__construct(array('transactionFormType'=>$_transactionFormType,'transactionCode'=>$_transactionCode,'equitySwapInvolved'=>$_equitySwapInvolved,'footnotes'=>new XiInsiderTypeArrayOfFootnote($_footnotes)));
	}
	/**
	 * Set transactionFormType
	 * @param string transactionFormType
	 * @return string
	 */
	public function setTransactionFormType($_transactionFormType)
	{
		return ($this->transactionFormType = $_transactionFormType);
	}
	/**
	 * Get transactionFormType
	 * @return string
	 */
	public function getTransactionFormType()
	{
		return $this->transactionFormType;
	}
	/**
	 * Set transactionCode
	 * @param string transactionCode
	 * @return string
	 */
	public function setTransactionCode($_transactionCode)
	{
		return ($this->transactionCode = $_transactionCode);
	}
	/**
	 * Get transactionCode
	 * @return string
	 */
	public function getTransactionCode()
	{
		return $this->transactionCode;
	}
	/**
	 * Set equitySwapInvolved
	 * @param int equitySwapInvolved
	 * @return int
	 */
	public function setEquitySwapInvolved($_equitySwapInvolved)
	{
		return ($this->equitySwapInvolved = $_equitySwapInvolved);
	}
	/**
	 * Get equitySwapInvolved
	 * @return int
	 */
	public function getEquitySwapInvolved()
	{
		return $this->equitySwapInvolved;
	}
	/**
	 * Set footnotes
	 * @param ArrayOfFootnote footnotes
	 * @return ArrayOfFootnote
	 */
	public function setFootnotes($_footnotes)
	{
		return ($this->footnotes = $_footnotes);
	}
	/**
	 * Get footnotes
	 * @return XiInsiderTypeArrayOfFootnote
	 */
	public function getFootnotes()
	{
		return $this->footnotes;
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