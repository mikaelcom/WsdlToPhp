<?php
/**
 * Class file for XWebOrderTypeRequestSummaryType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeRequestSummaryType
 * @date 09/07/2012
 */
class XWebOrderTypeRequestSummaryType extends XWebOrderWsdlClass
{
	/**
	 * The NbrOfSegments
	 * @var NbrOfSegments
	 */
	public $NbrOfSegments;
	/**
	 * The AmtQualCode
	 * @var AmtQualCode
	 */
	public $AmtQualCode;
	/**
	 * The MonetaryAmt
	 * @var MonetaryAmt
	 */
	public $MonetaryAmt;
	/**
	 * Constructor
	 * @param NbrOfSegments NbrOfSegments
	 * @param AmtQualCode AmtQualCode
	 * @param MonetaryAmt MonetaryAmt
	 * @return XWebOrderTypeRequestSummaryType
	 */
	public function __construct($_NbrOfSegments = null,$_AmtQualCode = null,$_MonetaryAmt = null)
	{
		parent::__construct(array('NbrOfSegments'=>$_NbrOfSegments,'AmtQualCode'=>$_AmtQualCode,'MonetaryAmt'=>$_MonetaryAmt));
	}
	/**
	 * Set NbrOfSegments
	 * @param NbrOfSegments NbrOfSegments
	 * @return NbrOfSegments
	 */
	public function setNbrOfSegments($_NbrOfSegments)
	{
		return ($this->NbrOfSegments = $_NbrOfSegments);
	}
	/**
	 * Get NbrOfSegments
	 * @return NbrOfSegments
	 */
	public function getNbrOfSegments()
	{
		return $this->NbrOfSegments;
	}
	/**
	 * Set AmtQualCode
	 * @param AmtQualCode AmtQualCode
	 * @return AmtQualCode
	 */
	public function setAmtQualCode($_AmtQualCode)
	{
		return ($this->AmtQualCode = $_AmtQualCode);
	}
	/**
	 * Get AmtQualCode
	 * @return AmtQualCode
	 */
	public function getAmtQualCode()
	{
		return $this->AmtQualCode;
	}
	/**
	 * Set MonetaryAmt
	 * @param MonetaryAmt MonetaryAmt
	 * @return MonetaryAmt
	 */
	public function setMonetaryAmt($_MonetaryAmt)
	{
		return ($this->MonetaryAmt = $_MonetaryAmt);
	}
	/**
	 * Get MonetaryAmt
	 * @return MonetaryAmt
	 */
	public function getMonetaryAmt()
	{
		return $this->MonetaryAmt;
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