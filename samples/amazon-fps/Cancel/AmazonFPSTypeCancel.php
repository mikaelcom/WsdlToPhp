<?php
/**
 * Class file for AmazonFPSTypeCancel
 * @date 10/07/2012
 */
/**
 * Class AmazonFPSTypeCancel
 * @date 10/07/2012
 */
class AmazonFPSTypeCancel extends AmazonFPSWsdlClass
{
	/**
	 * The TransactionId
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $TransactionId;
	/**
	 * The Description
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $Description;
	/**
	 * The OverrideIPNURL
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $OverrideIPNURL;
	/**
	 * Constructor
	 * @param string TransactionId
	 * @param string Description
	 * @param string OverrideIPNURL
	 * @return AmazonFPSTypeCancel
	 */
	public function __construct($_TransactionId = null,$_Description = null,$_OverrideIPNURL = null)
	{
		parent::__construct(array('TransactionId'=>$_TransactionId,'Description'=>$_Description,'OverrideIPNURL'=>$_OverrideIPNURL));
	}
	/**
	 * Set TransactionId
	 * @param string TransactionId
	 * @return string
	 */
	public function setTransactionId($_TransactionId)
	{
		return ($this->TransactionId = $_TransactionId);
	}
	/**
	 * Get TransactionId
	 * @return string
	 */
	public function getTransactionId()
	{
		return $this->TransactionId;
	}
	/**
	 * Set Description
	 * @param string Description
	 * @return string
	 */
	public function setDescription($_Description)
	{
		return ($this->Description = $_Description);
	}
	/**
	 * Get Description
	 * @return string
	 */
	public function getDescription()
	{
		return $this->Description;
	}
	/**
	 * Set OverrideIPNURL
	 * @param string OverrideIPNURL
	 * @return string
	 */
	public function setOverrideIPNURL($_OverrideIPNURL)
	{
		return ($this->OverrideIPNURL = $_OverrideIPNURL);
	}
	/**
	 * Get OverrideIPNURL
	 * @return string
	 */
	public function getOverrideIPNURL()
	{
		return $this->OverrideIPNURL;
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