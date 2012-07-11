<?php
/**
 * Class file for XiFinancialsTypeCurrentLiabilities
 * @date 08/07/2012
 */
/**
 * Class XiFinancialsTypeCurrentLiabilities
 * @date 08/07/2012
 */
class XiFinancialsTypeCurrentLiabilities extends XiFinancialsWsdlClass
{
	/**
	 * The AccountsPayable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccountsPayable;
	/**
	 * The NotesPayable
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $NotesPayable;
	/**
	 * The ShortTermDebt
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $ShortTermDebt;
	/**
	 * The AccruedExpenses
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedExpenses;
	/**
	 * The AccruedLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $AccruedLiabilities;
	/**
	 * The DeferredRevenues
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $DeferredRevenues;
	/**
	 * The CurrentDeferredIncomeTaxLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $CurrentDeferredIncomeTaxLiabilities;
	/**
	 * The OtherCurrentLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $OtherCurrentLiabilities;
	/**
	 * The TotalCurrentLiabilities
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $TotalCurrentLiabilities;
	/**
	 * Constructor
	 * @param double AccountsPayable
	 * @param double NotesPayable
	 * @param double ShortTermDebt
	 * @param double AccruedExpenses
	 * @param double AccruedLiabilities
	 * @param double DeferredRevenues
	 * @param double CurrentDeferredIncomeTaxLiabilities
	 * @param double OtherCurrentLiabilities
	 * @param double TotalCurrentLiabilities
	 * @return XiFinancialsTypeCurrentLiabilities
	 */
	public function __construct($_AccountsPayable,$_NotesPayable,$_ShortTermDebt,$_AccruedExpenses,$_AccruedLiabilities,$_DeferredRevenues,$_CurrentDeferredIncomeTaxLiabilities,$_OtherCurrentLiabilities,$_TotalCurrentLiabilities)
	{
		parent::__construct(array('AccountsPayable'=>$_AccountsPayable,'NotesPayable'=>$_NotesPayable,'ShortTermDebt'=>$_ShortTermDebt,'AccruedExpenses'=>$_AccruedExpenses,'AccruedLiabilities'=>$_AccruedLiabilities,'DeferredRevenues'=>$_DeferredRevenues,'CurrentDeferredIncomeTaxLiabilities'=>$_CurrentDeferredIncomeTaxLiabilities,'OtherCurrentLiabilities'=>$_OtherCurrentLiabilities,'TotalCurrentLiabilities'=>$_TotalCurrentLiabilities));
	}
	/**
	 * Set AccountsPayable
	 * @param double AccountsPayable
	 * @return double
	 */
	public function setAccountsPayable($_AccountsPayable)
	{
		return ($this->AccountsPayable = $_AccountsPayable);
	}
	/**
	 * Get AccountsPayable
	 * @return double
	 */
	public function getAccountsPayable()
	{
		return $this->AccountsPayable;
	}
	/**
	 * Set NotesPayable
	 * @param double NotesPayable
	 * @return double
	 */
	public function setNotesPayable($_NotesPayable)
	{
		return ($this->NotesPayable = $_NotesPayable);
	}
	/**
	 * Get NotesPayable
	 * @return double
	 */
	public function getNotesPayable()
	{
		return $this->NotesPayable;
	}
	/**
	 * Set ShortTermDebt
	 * @param double ShortTermDebt
	 * @return double
	 */
	public function setShortTermDebt($_ShortTermDebt)
	{
		return ($this->ShortTermDebt = $_ShortTermDebt);
	}
	/**
	 * Get ShortTermDebt
	 * @return double
	 */
	public function getShortTermDebt()
	{
		return $this->ShortTermDebt;
	}
	/**
	 * Set AccruedExpenses
	 * @param double AccruedExpenses
	 * @return double
	 */
	public function setAccruedExpenses($_AccruedExpenses)
	{
		return ($this->AccruedExpenses = $_AccruedExpenses);
	}
	/**
	 * Get AccruedExpenses
	 * @return double
	 */
	public function getAccruedExpenses()
	{
		return $this->AccruedExpenses;
	}
	/**
	 * Set AccruedLiabilities
	 * @param double AccruedLiabilities
	 * @return double
	 */
	public function setAccruedLiabilities($_AccruedLiabilities)
	{
		return ($this->AccruedLiabilities = $_AccruedLiabilities);
	}
	/**
	 * Get AccruedLiabilities
	 * @return double
	 */
	public function getAccruedLiabilities()
	{
		return $this->AccruedLiabilities;
	}
	/**
	 * Set DeferredRevenues
	 * @param double DeferredRevenues
	 * @return double
	 */
	public function setDeferredRevenues($_DeferredRevenues)
	{
		return ($this->DeferredRevenues = $_DeferredRevenues);
	}
	/**
	 * Get DeferredRevenues
	 * @return double
	 */
	public function getDeferredRevenues()
	{
		return $this->DeferredRevenues;
	}
	/**
	 * Set CurrentDeferredIncomeTaxLiabilities
	 * @param double CurrentDeferredIncomeTaxLiabilities
	 * @return double
	 */
	public function setCurrentDeferredIncomeTaxLiabilities($_CurrentDeferredIncomeTaxLiabilities)
	{
		return ($this->CurrentDeferredIncomeTaxLiabilities = $_CurrentDeferredIncomeTaxLiabilities);
	}
	/**
	 * Get CurrentDeferredIncomeTaxLiabilities
	 * @return double
	 */
	public function getCurrentDeferredIncomeTaxLiabilities()
	{
		return $this->CurrentDeferredIncomeTaxLiabilities;
	}
	/**
	 * Set OtherCurrentLiabilities
	 * @param double OtherCurrentLiabilities
	 * @return double
	 */
	public function setOtherCurrentLiabilities($_OtherCurrentLiabilities)
	{
		return ($this->OtherCurrentLiabilities = $_OtherCurrentLiabilities);
	}
	/**
	 * Get OtherCurrentLiabilities
	 * @return double
	 */
	public function getOtherCurrentLiabilities()
	{
		return $this->OtherCurrentLiabilities;
	}
	/**
	 * Set TotalCurrentLiabilities
	 * @param double TotalCurrentLiabilities
	 * @return double
	 */
	public function setTotalCurrentLiabilities($_TotalCurrentLiabilities)
	{
		return ($this->TotalCurrentLiabilities = $_TotalCurrentLiabilities);
	}
	/**
	 * Get TotalCurrentLiabilities
	 * @return double
	 */
	public function getTotalCurrentLiabilities()
	{
		return $this->TotalCurrentLiabilities;
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