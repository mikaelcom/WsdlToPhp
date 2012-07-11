<?php
/**
 * Class file for XWebOrderTypeResponseHeaderType
 * @date 09/07/2012
 */
/**
 * Class XWebOrderTypeResponseHeaderType
 * @date 09/07/2012
 */
class XWebOrderTypeResponseHeaderType extends XWebOrderWsdlClass
{
	/**
	 * The TransControlID
	 * @var TransControlID
	 */
	public $TransControlID;
	/**
	 * The PurposeCode
	 * @var PurposeCode
	 */
	public $PurposeCode;
	/**
	 * The PONbr
	 * @var PONbr
	 */
	public $PONbr;
	/**
	 * The RefID
	 * @var RefID
	 */
	public $RefID;
	/**
	 * The RefIDQual
	 * @var RefIDQual
	 */
	public $RefIDQual;
	/**
	 * The DescHdrErr
	 * @var DescHdrErr
	 */
	public $DescHdrErr;
	/**
	 * The OrderConfirmation
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XWebOrderTypeResponseOrderConfirmationType
	 */
	public $OrderConfirmation;
	/**
	 * Constructor
	 * @param TransControlID TransControlID
	 * @param PurposeCode PurposeCode
	 * @param PONbr PONbr
	 * @param RefID RefID
	 * @param RefIDQual RefIDQual
	 * @param DescHdrErr DescHdrErr
	 * @param XWebOrderTypeResponseOrderConfirmationType OrderConfirmation
	 * @return XWebOrderTypeResponseHeaderType
	 */
	public function __construct($_TransControlID = null,$_PurposeCode = null,$_PONbr = null,$_RefID = null,$_RefIDQual = null,$_DescHdrErr = null,$_OrderConfirmation = null)
	{
		parent::__construct(array('TransControlID'=>$_TransControlID,'PurposeCode'=>$_PurposeCode,'PONbr'=>$_PONbr,'RefID'=>$_RefID,'RefIDQual'=>$_RefIDQual,'DescHdrErr'=>$_DescHdrErr,'OrderConfirmation'=>$_OrderConfirmation));
	}
	/**
	 * Set TransControlID
	 * @param TransControlID TransControlID
	 * @return TransControlID
	 */
	public function setTransControlID($_TransControlID)
	{
		return ($this->TransControlID = $_TransControlID);
	}
	/**
	 * Get TransControlID
	 * @return TransControlID
	 */
	public function getTransControlID()
	{
		return $this->TransControlID;
	}
	/**
	 * Set PurposeCode
	 * @param PurposeCode PurposeCode
	 * @return PurposeCode
	 */
	public function setPurposeCode($_PurposeCode)
	{
		return ($this->PurposeCode = $_PurposeCode);
	}
	/**
	 * Get PurposeCode
	 * @return PurposeCode
	 */
	public function getPurposeCode()
	{
		return $this->PurposeCode;
	}
	/**
	 * Set PONbr
	 * @param PONbr PONbr
	 * @return PONbr
	 */
	public function setPONbr($_PONbr)
	{
		return ($this->PONbr = $_PONbr);
	}
	/**
	 * Get PONbr
	 * @return PONbr
	 */
	public function getPONbr()
	{
		return $this->PONbr;
	}
	/**
	 * Set RefID
	 * @param RefID RefID
	 * @return RefID
	 */
	public function setRefID($_RefID)
	{
		return ($this->RefID = $_RefID);
	}
	/**
	 * Get RefID
	 * @return RefID
	 */
	public function getRefID()
	{
		return $this->RefID;
	}
	/**
	 * Set RefIDQual
	 * @param RefIDQual RefIDQual
	 * @return RefIDQual
	 */
	public function setRefIDQual($_RefIDQual)
	{
		return ($this->RefIDQual = $_RefIDQual);
	}
	/**
	 * Get RefIDQual
	 * @return RefIDQual
	 */
	public function getRefIDQual()
	{
		return $this->RefIDQual;
	}
	/**
	 * Set DescHdrErr
	 * @param DescHdrErr DescHdrErr
	 * @return DescHdrErr
	 */
	public function setDescHdrErr($_DescHdrErr)
	{
		return ($this->DescHdrErr = $_DescHdrErr);
	}
	/**
	 * Get DescHdrErr
	 * @return DescHdrErr
	 */
	public function getDescHdrErr()
	{
		return $this->DescHdrErr;
	}
	/**
	 * Set OrderConfirmation
	 * @param ResponseOrderConfirmationType OrderConfirmation
	 * @return ResponseOrderConfirmationType
	 */
	public function setOrderConfirmation($_OrderConfirmation)
	{
		return ($this->OrderConfirmation = $_OrderConfirmation);
	}
	/**
	 * Get OrderConfirmation
	 * @return XWebOrderTypeResponseOrderConfirmationType
	 */
	public function getOrderConfirmation()
	{
		return $this->OrderConfirmation;
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