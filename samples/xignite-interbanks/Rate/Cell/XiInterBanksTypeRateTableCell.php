<?php
/**
 * Class file for XiInterBanksTypeRateTableCell
 * @date 08/07/2012
 */
/**
 * Class XiInterBanksTypeRateTableCell
 * @date 08/07/2012
 */
class XiInterBanksTypeRateTableCell extends XiInterBanksTypeCommon
{
	/**
	 * The CellType
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var XiInterBanksTypeRateTableCellType
	 */
	public $CellType;
	/**
	 * The Value
	 * Meta informations :
	 * 	- minOccurs : 1
	 * 	- maxOccurs : 1
	 * @var double
	 */
	public $Value;
	/**
	 * The Text
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Text;
	/**
	 * Constructor
	 * @param XiInterBanksTypeRateTableCellType CellType
	 * @param double Value
	 * @param string Text
	 * @return XiInterBanksTypeRateTableCell
	 */
	public function __construct($_CellType,$_Value,$_Text = null)
	{
		XiInterBanksWsdlClass::__construct(array('CellType'=>$_CellType,'Value'=>$_Value,'Text'=>$_Text));
	}
	/**
	 * Set CellType
	 * @param RateTableCellType CellType
	 * @return RateTableCellType
	 */
	public function setCellType($_CellType)
	{
		return ($this->CellType = XiInterBanksTypeRateTableCellType::valueIsValid($_CellType)?$_CellType:null);
	}
	/**
	 * Get CellType
	 * @return XiInterBanksTypeRateTableCellType
	 */
	public function getCellType()
	{
		return $this->CellType;
	}
	/**
	 * Set Value
	 * @param double Value
	 * @return double
	 */
	public function setValue($_Value)
	{
		return ($this->Value = $_Value);
	}
	/**
	 * Get Value
	 * @return double
	 */
	public function getValue()
	{
		return $this->Value;
	}
	/**
	 * Set Text
	 * @param string Text
	 * @return string
	 */
	public function setText($_Text)
	{
		return ($this->Text = $_Text);
	}
	/**
	 * Get Text
	 * @return string
	 */
	public function getText()
	{
		return $this->Text;
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