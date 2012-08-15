<?php
/**
 * Class file for RFHCPCSTypeDefaultFaultContract
 * @date 15/08/2012
 */
/**
 * Class RFHCPCSTypeDefaultFaultContract
 * @date 15/08/2012
 */
class RFHCPCSTypeDefaultFaultContract extends RFHCPCSWsdlClass
{
	/**
	 * The ErrorId
	 * @var int
	 */
	public $ErrorId;
	/**
	 * The ErrorMessage
	 * Meta informations :
	 * 	- nillable : true
	 * @var string
	 */
	public $ErrorMessage;
	/**
	 * The CorrelationId
	 * @var RFHCPCSTypeGuid
	 */
	public $CorrelationId;
	/**
	 * Constructor
	 * @param int ErrorId
	 * @param string ErrorMessage
	 * @param RFHCPCSTypeGuid CorrelationId
	 * @return RFHCPCSTypeDefaultFaultContract
	 */
	public function __construct($_ErrorId = null,$_ErrorMessage = null,$_CorrelationId = null)
	{
		parent::__construct(array('ErrorId'=>$_ErrorId,'ErrorMessage'=>$_ErrorMessage,'CorrelationId'=>$_CorrelationId));
	}
	/**
	 * Set ErrorId
	 * @param int ErrorId
	 * @return int
	 */
	public function setErrorId($_ErrorId)
	{
		return ($this->ErrorId = $_ErrorId);
	}
	/**
	 * Get ErrorId
	 * @return int
	 */
	public function getErrorId()
	{
		return $this->ErrorId;
	}
	/**
	 * Set ErrorMessage
	 * @param string ErrorMessage
	 * @return string
	 */
	public function setErrorMessage($_ErrorMessage)
	{
		return ($this->ErrorMessage = $_ErrorMessage);
	}
	/**
	 * Get ErrorMessage
	 * @return string
	 */
	public function getErrorMessage()
	{
		return $this->ErrorMessage;
	}
	/**
	 * Set CorrelationId
	 * @param guid CorrelationId
	 * @return guid
	 */
	public function setCorrelationId($_CorrelationId)
	{
		return ($this->CorrelationId = $_CorrelationId);
	}
	/**
	 * Get CorrelationId
	 * @return RFHCPCSTypeguid
	 */
	public function getCorrelationId()
	{
		return $this->CorrelationId;
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