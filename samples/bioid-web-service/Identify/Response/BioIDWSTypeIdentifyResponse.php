<?php
/**
 * Class file for BioIDWSTypeIdentifyResponse
 * @date 15/08/2012
 */
/**
 * Class BioIDWSTypeIdentifyResponse
 * @date 15/08/2012
 */
class BioIDWSTypeIdentifyResponse extends BioIDWSWsdlClass
{
	/**
	 * The IdentifyResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var boolean
	 */
	public $IdentifyResult;
	/**
	 * The matches
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var BioIDWSTypeArrayOfScoredClass
	 */
	public $matches;
	/**
	 * The messages
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $messages;
	/**
	 * Constructor
	 * @param boolean IdentifyResult
	 * @param BioIDWSTypeArrayOfScoredClass matches
	 * @param string messages
	 * @return BioIDWSTypeIdentifyResponse
	 */
	public function __construct($_IdentifyResult = null,$_matches = null,$_messages = null)
	{
		parent::__construct(array('IdentifyResult'=>$_IdentifyResult,'matches'=>new BioIDWSTypeArrayOfScoredClass($_matches),'messages'=>$_messages));
	}
	/**
	 * Set IdentifyResult
	 * @param boolean IdentifyResult
	 * @return boolean
	 */
	public function setIdentifyResult($_IdentifyResult)
	{
		return ($this->IdentifyResult = $_IdentifyResult);
	}
	/**
	 * Get IdentifyResult
	 * @return boolean
	 */
	public function getIdentifyResult()
	{
		return $this->IdentifyResult;
	}
	/**
	 * Set matches
	 * @param ArrayOfScoredClass matches
	 * @return ArrayOfScoredClass
	 */
	public function setMatches($_matches)
	{
		return ($this->matches = $_matches);
	}
	/**
	 * Get matches
	 * @return BioIDWSTypeArrayOfScoredClass
	 */
	public function getMatches()
	{
		return $this->matches;
	}
	/**
	 * Set messages
	 * @param string messages
	 * @return string
	 */
	public function setMessages($_messages)
	{
		return ($this->messages = $_messages);
	}
	/**
	 * Get messages
	 * @return string
	 */
	public function getMessages()
	{
		return $this->messages;
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