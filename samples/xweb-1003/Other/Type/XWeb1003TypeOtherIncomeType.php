<?php
/**
 * Class file for XWeb1003TypeOtherIncomeType
 * @date 09/07/2012
 */
/**
 * Class XWeb1003TypeOtherIncomeType
 * @date 09/07/2012
 */
class XWeb1003TypeOtherIncomeType extends XWeb1003WsdlClass
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
	 * The Other_Income_Sequence
	 * @var anonymous103
	 */
	public $Other_Income_Sequence;
	/**
	 * Constructor
	 * @param Description Description
	 * @param Amount Amount
	 * @param anonymous103 Other_Income_Sequence
	 * @return XWeb1003TypeOtherIncomeType
	 */
	public function __construct($_Description = null,$_Amount = null,$_Other_Income_Sequence = null)
	{
		parent::__construct(array('Description'=>$_Description,'Amount'=>$_Amount,'Other_Income_Sequence'=>$_Other_Income_Sequence));
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
	 * Set Other_Income_Sequence
	 * @param anonymous103 Other_Income_Sequence
	 * @return anonymous103
	 */
	public function setOther_Income_Sequence($_Other_Income_Sequence)
	{
		return ($this->Other_Income_Sequence = $_Other_Income_Sequence);
	}
	/**
	 * Get Other_Income_Sequence
	 * @return anonymous103
	 */
	public function getOther_Income_Sequence()
	{
		return $this->Other_Income_Sequence;
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