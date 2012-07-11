<?php
/**
 * Class file for XWeb1003TypeAutomobileType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeAutomobileType
 * @date 09/07/2012
 */
class XWeb1003TypeAutomobileType extends XWeb1003WsdlClass
{
	/**
	 * The Description
	 * @var Description
	 */
	public $Description;
	/**
	 * The Amount
	 * @var Amount
	 */
	public $Amount;
	/**
	 * The Automobile_Sequence
	 * @var anonymous156
	 */
	public $Automobile_Sequence;
	/**
	 * Constructor
	 * @param Description Description
	 * @param Amount Amount
	 * @param anonymous156 Automobile_Sequence
	 * @return XWeb1003TypeAutomobileType
	 */
	public function __construct($_Description = null,$_Amount = null,$_Automobile_Sequence = null)
	{
		parent::__construct(array('Description'=>$_Description,'Amount'=>$_Amount,'Automobile_Sequence'=>$_Automobile_Sequence));
	}
	/**
	 * Set Description
	 * @param Description Description
	 * @return Description
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return Description
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set Amount
	 * @param Amount Amount
	 * @return Amount
	 */
	public function setAmount($_Amount)
	{
		return ($this->Amount = $_Amount);
	}
	/**
	 * Get Amount
	 * @return Amount
	 */
	public function getAmount()
	{
		return $this->Amount;
	}
	/**
	 * Set Automobile_Sequence
	 * @param anonymous156 Automobile_Sequence
	 * @return anonymous156
	 */
	public function setAutomobile_Sequence($_Automobile_Sequence)
	{
		return ($this->Automobile_Sequence = $_Automobile_Sequence);
	}
	/**
	 * Get Automobile_Sequence
	 * @return anonymous156
	 */
	public function getAutomobile_Sequence()
	{
		return $this->Automobile_Sequence;
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