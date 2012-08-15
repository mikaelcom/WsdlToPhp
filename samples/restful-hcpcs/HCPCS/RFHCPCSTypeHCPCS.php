<?php
/**
 * Class file for RFHCPCSTypeHCPCS
 * @date 15/08/2012
 */
/**
 * Class RFHCPCSTypeHCPCS
 * @date 15/08/2012
 */
class RFHCPCSTypeHCPCS extends RFHCPCSWsdlClass
{
	/**
	 * The ActionCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ActionCode;
	/**
	 * The ActionEffDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ActionEffDate;
	/**
	 * The AnestBaseUnits
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $AnestBaseUnits;
	/**
	 * The ASCPayGrp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ASCPayGrp;
	/**
	 * The ASCPayGrpEffDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ASCPayGrpEffDate;
	/**
	 * The Betos
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Betos;
	/**
	 * The CIM1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CIM1;
	/**
	 * The CIM2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CIM2;
	/**
	 * The CIM3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CIM3;
	/**
	 * The CodeAddDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $CodeAddDate;
	/**
	 * The Coverage
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Coverage;
	/**
	 * The Filler
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Filler;
	/**
	 * The Hcpc
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Hcpc;
	/**
	 * The LabCert1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert1;
	/**
	 * The LabCert2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert2;
	/**
	 * The LabCert3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert3;
	/**
	 * The LabCert4
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert4;
	/**
	 * The LabCert5
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert5;
	/**
	 * The LabCert6
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert6;
	/**
	 * The LabCert7
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert7;
	/**
	 * The LabCert8
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LabCert8;
	/**
	 * The LongDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $LongDescription;
	/**
	 * The MCM1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MCM1;
	/**
	 * The MCM2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MCM2;
	/**
	 * The MCM3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MCM3;
	/**
	 * The MOGEffDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MOGEffDate;
	/**
	 * The MOGPayGrp
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MOGPayGrp;
	/**
	 * The MOGPayInd
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $MOGPayInd;
	/**
	 * The Mpi
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Mpi;
	/**
	 * The PI1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PI1;
	/**
	 * The PI2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PI2;
	/**
	 * The PI3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PI3;
	/**
	 * The PI4
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $PI4;
	/**
	 * The ProcNote
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ProcNote;
	/**
	 * The Ric
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Ric;
	/**
	 * The SeqNum
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $SeqNum;
	/**
	 * The ShortDescription
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $ShortDescription;
	/**
	 * The Statute
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $Statute;
	/**
	 * The TermDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TermDate;
	/**
	 * The TOS1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TOS1;
	/**
	 * The TOS2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TOS2;
	/**
	 * The TOS3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TOS3;
	/**
	 * The TOS4
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TOS4;
	/**
	 * The TOS5
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $TOS5;
	/**
	 * The XRef1
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $XRef1;
	/**
	 * The XRef2
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $XRef2;
	/**
	 * The XRef3
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $XRef3;
	/**
	 * The XRef4
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $XRef4;
	/**
	 * The XRef5
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- nillable : true
	 * @var string
	 */
	public $XRef5;
	/**
	 * Constructor
	 * @param string ActionCode
	 * @param string ActionEffDate
	 * @param string AnestBaseUnits
	 * @param string ASCPayGrp
	 * @param string ASCPayGrpEffDate
	 * @param string Betos
	 * @param string CIM1
	 * @param string CIM2
	 * @param string CIM3
	 * @param string CodeAddDate
	 * @param string Coverage
	 * @param string Filler
	 * @param string Hcpc
	 * @param string LabCert1
	 * @param string LabCert2
	 * @param string LabCert3
	 * @param string LabCert4
	 * @param string LabCert5
	 * @param string LabCert6
	 * @param string LabCert7
	 * @param string LabCert8
	 * @param string LongDescription
	 * @param string MCM1
	 * @param string MCM2
	 * @param string MCM3
	 * @param string MOGEffDate
	 * @param string MOGPayGrp
	 * @param string MOGPayInd
	 * @param string Mpi
	 * @param string PI1
	 * @param string PI2
	 * @param string PI3
	 * @param string PI4
	 * @param string ProcNote
	 * @param string Ric
	 * @param string SeqNum
	 * @param string ShortDescription
	 * @param string Statute
	 * @param string TermDate
	 * @param string TOS1
	 * @param string TOS2
	 * @param string TOS3
	 * @param string TOS4
	 * @param string TOS5
	 * @param string XRef1
	 * @param string XRef2
	 * @param string XRef3
	 * @param string XRef4
	 * @param string XRef5
	 * @return RFHCPCSTypeHCPCS
	 */
	public function __construct($_ActionCode = null,$_ActionEffDate = null,$_AnestBaseUnits = null,$_ASCPayGrp = null,$_ASCPayGrpEffDate = null,$_Betos = null,$_CIM1 = null,$_CIM2 = null,$_CIM3 = null,$_CodeAddDate = null,$_Coverage = null,$_Filler = null,$_Hcpc = null,$_LabCert1 = null,$_LabCert2 = null,$_LabCert3 = null,$_LabCert4 = null,$_LabCert5 = null,$_LabCert6 = null,$_LabCert7 = null,$_LabCert8 = null,$_LongDescription = null,$_MCM1 = null,$_MCM2 = null,$_MCM3 = null,$_MOGEffDate = null,$_MOGPayGrp = null,$_MOGPayInd = null,$_Mpi = null,$_PI1 = null,$_PI2 = null,$_PI3 = null,$_PI4 = null,$_ProcNote = null,$_Ric = null,$_SeqNum = null,$_ShortDescription = null,$_Statute = null,$_TermDate = null,$_TOS1 = null,$_TOS2 = null,$_TOS3 = null,$_TOS4 = null,$_TOS5 = null,$_XRef1 = null,$_XRef2 = null,$_XRef3 = null,$_XRef4 = null,$_XRef5 = null)
	{
		parent::__construct(array('ActionCode'=>$_ActionCode,'ActionEffDate'=>$_ActionEffDate,'AnestBaseUnits'=>$_AnestBaseUnits,'ASCPayGrp'=>$_ASCPayGrp,'ASCPayGrpEffDate'=>$_ASCPayGrpEffDate,'Betos'=>$_Betos,'CIM1'=>$_CIM1,'CIM2'=>$_CIM2,'CIM3'=>$_CIM3,'CodeAddDate'=>$_CodeAddDate,'Coverage'=>$_Coverage,'Filler'=>$_Filler,'Hcpc'=>$_Hcpc,'LabCert1'=>$_LabCert1,'LabCert2'=>$_LabCert2,'LabCert3'=>$_LabCert3,'LabCert4'=>$_LabCert4,'LabCert5'=>$_LabCert5,'LabCert6'=>$_LabCert6,'LabCert7'=>$_LabCert7,'LabCert8'=>$_LabCert8,'LongDescription'=>$_LongDescription,'MCM1'=>$_MCM1,'MCM2'=>$_MCM2,'MCM3'=>$_MCM3,'MOGEffDate'=>$_MOGEffDate,'MOGPayGrp'=>$_MOGPayGrp,'MOGPayInd'=>$_MOGPayInd,'Mpi'=>$_Mpi,'PI1'=>$_PI1,'PI2'=>$_PI2,'PI3'=>$_PI3,'PI4'=>$_PI4,'ProcNote'=>$_ProcNote,'Ric'=>$_Ric,'SeqNum'=>$_SeqNum,'ShortDescription'=>$_ShortDescription,'Statute'=>$_Statute,'TermDate'=>$_TermDate,'TOS1'=>$_TOS1,'TOS2'=>$_TOS2,'TOS3'=>$_TOS3,'TOS4'=>$_TOS4,'TOS5'=>$_TOS5,'XRef1'=>$_XRef1,'XRef2'=>$_XRef2,'XRef3'=>$_XRef3,'XRef4'=>$_XRef4,'XRef5'=>$_XRef5));
	}
	/**
	 * Set ActionCode
	 * @param string ActionCode
	 * @return string
	 */
	public function setActionCode($_ActionCode)
	{
		return ($this->ActionCode = $_ActionCode);
	}
	/**
	 * Get ActionCode
	 * @return string
	 */
	public function getActionCode()
	{
		return $this->ActionCode;
	}
	/**
	 * Set ActionEffDate
	 * @param string ActionEffDate
	 * @return string
	 */
	public function setActionEffDate($_ActionEffDate)
	{
		return ($this->ActionEffDate = $_ActionEffDate);
	}
	/**
	 * Get ActionEffDate
	 * @return string
	 */
	public function getActionEffDate()
	{
		return $this->ActionEffDate;
	}
	/**
	 * Set AnestBaseUnits
	 * @param string AnestBaseUnits
	 * @return string
	 */
	public function setAnestBaseUnits($_AnestBaseUnits)
	{
		return ($this->AnestBaseUnits = $_AnestBaseUnits);
	}
	/**
	 * Get AnestBaseUnits
	 * @return string
	 */
	public function getAnestBaseUnits()
	{
		return $this->AnestBaseUnits;
	}
	/**
	 * Set ASCPayGrp
	 * @param string ASCPayGrp
	 * @return string
	 */
	public function setASCPayGrp($_ASCPayGrp)
	{
		return ($this->ASCPayGrp = $_ASCPayGrp);
	}
	/**
	 * Get ASCPayGrp
	 * @return string
	 */
	public function getASCPayGrp()
	{
		return $this->ASCPayGrp;
	}
	/**
	 * Set ASCPayGrpEffDate
	 * @param string ASCPayGrpEffDate
	 * @return string
	 */
	public function setASCPayGrpEffDate($_ASCPayGrpEffDate)
	{
		return ($this->ASCPayGrpEffDate = $_ASCPayGrpEffDate);
	}
	/**
	 * Get ASCPayGrpEffDate
	 * @return string
	 */
	public function getASCPayGrpEffDate()
	{
		return $this->ASCPayGrpEffDate;
	}
	/**
	 * Set Betos
	 * @param string Betos
	 * @return string
	 */
	public function setBetos($_Betos)
	{
		return ($this->Betos = $_Betos);
	}
	/**
	 * Get Betos
	 * @return string
	 */
	public function getBetos()
	{
		return $this->Betos;
	}
	/**
	 * Set CIM1
	 * @param string CIM1
	 * @return string
	 */
	public function setCIM1($_CIM1)
	{
		return ($this->CIM1 = $_CIM1);
	}
	/**
	 * Get CIM1
	 * @return string
	 */
	public function getCIM1()
	{
		return $this->CIM1;
	}
	/**
	 * Set CIM2
	 * @param string CIM2
	 * @return string
	 */
	public function setCIM2($_CIM2)
	{
		return ($this->CIM2 = $_CIM2);
	}
	/**
	 * Get CIM2
	 * @return string
	 */
	public function getCIM2()
	{
		return $this->CIM2;
	}
	/**
	 * Set CIM3
	 * @param string CIM3
	 * @return string
	 */
	public function setCIM3($_CIM3)
	{
		return ($this->CIM3 = $_CIM3);
	}
	/**
	 * Get CIM3
	 * @return string
	 */
	public function getCIM3()
	{
		return $this->CIM3;
	}
	/**
	 * Set CodeAddDate
	 * @param string CodeAddDate
	 * @return string
	 */
	public function setCodeAddDate($_CodeAddDate)
	{
		return ($this->CodeAddDate = $_CodeAddDate);
	}
	/**
	 * Get CodeAddDate
	 * @return string
	 */
	public function getCodeAddDate()
	{
		return $this->CodeAddDate;
	}
	/**
	 * Set Coverage
	 * @param string Coverage
	 * @return string
	 */
	public function setCoverage($_Coverage)
	{
		return ($this->Coverage = $_Coverage);
	}
	/**
	 * Get Coverage
	 * @return string
	 */
	public function getCoverage()
	{
		return $this->Coverage;
	}
	/**
	 * Set Filler
	 * @param string Filler
	 * @return string
	 */
	public function setFiller($_Filler)
	{
		return ($this->Filler = $_Filler);
	}
	/**
	 * Get Filler
	 * @return string
	 */
	public function getFiller()
	{
		return $this->Filler;
	}
	/**
	 * Set Hcpc
	 * @param string Hcpc
	 * @return string
	 */
	public function setHcpc($_Hcpc)
	{
		return ($this->Hcpc = $_Hcpc);
	}
	/**
	 * Get Hcpc
	 * @return string
	 */
	public function getHcpc()
	{
		return $this->Hcpc;
	}
	/**
	 * Set LabCert1
	 * @param string LabCert1
	 * @return string
	 */
	public function setLabCert1($_LabCert1)
	{
		return ($this->LabCert1 = $_LabCert1);
	}
	/**
	 * Get LabCert1
	 * @return string
	 */
	public function getLabCert1()
	{
		return $this->LabCert1;
	}
	/**
	 * Set LabCert2
	 * @param string LabCert2
	 * @return string
	 */
	public function setLabCert2($_LabCert2)
	{
		return ($this->LabCert2 = $_LabCert2);
	}
	/**
	 * Get LabCert2
	 * @return string
	 */
	public function getLabCert2()
	{
		return $this->LabCert2;
	}
	/**
	 * Set LabCert3
	 * @param string LabCert3
	 * @return string
	 */
	public function setLabCert3($_LabCert3)
	{
		return ($this->LabCert3 = $_LabCert3);
	}
	/**
	 * Get LabCert3
	 * @return string
	 */
	public function getLabCert3()
	{
		return $this->LabCert3;
	}
	/**
	 * Set LabCert4
	 * @param string LabCert4
	 * @return string
	 */
	public function setLabCert4($_LabCert4)
	{
		return ($this->LabCert4 = $_LabCert4);
	}
	/**
	 * Get LabCert4
	 * @return string
	 */
	public function getLabCert4()
	{
		return $this->LabCert4;
	}
	/**
	 * Set LabCert5
	 * @param string LabCert5
	 * @return string
	 */
	public function setLabCert5($_LabCert5)
	{
		return ($this->LabCert5 = $_LabCert5);
	}
	/**
	 * Get LabCert5
	 * @return string
	 */
	public function getLabCert5()
	{
		return $this->LabCert5;
	}
	/**
	 * Set LabCert6
	 * @param string LabCert6
	 * @return string
	 */
	public function setLabCert6($_LabCert6)
	{
		return ($this->LabCert6 = $_LabCert6);
	}
	/**
	 * Get LabCert6
	 * @return string
	 */
	public function getLabCert6()
	{
		return $this->LabCert6;
	}
	/**
	 * Set LabCert7
	 * @param string LabCert7
	 * @return string
	 */
	public function setLabCert7($_LabCert7)
	{
		return ($this->LabCert7 = $_LabCert7);
	}
	/**
	 * Get LabCert7
	 * @return string
	 */
	public function getLabCert7()
	{
		return $this->LabCert7;
	}
	/**
	 * Set LabCert8
	 * @param string LabCert8
	 * @return string
	 */
	public function setLabCert8($_LabCert8)
	{
		return ($this->LabCert8 = $_LabCert8);
	}
	/**
	 * Get LabCert8
	 * @return string
	 */
	public function getLabCert8()
	{
		return $this->LabCert8;
	}
	/**
	 * Set LongDescription
	 * @param string LongDescription
	 * @return string
	 */
	public function setLongDescription($_LongDescription)
	{
		return ($this->LongDescription = $_LongDescription);
	}
	/**
	 * Get LongDescription
	 * @return string
	 */
	public function getLongDescription()
	{
		return $this->LongDescription;
	}
	/**
	 * Set MCM1
	 * @param string MCM1
	 * @return string
	 */
	public function setMCM1($_MCM1)
	{
		return ($this->MCM1 = $_MCM1);
	}
	/**
	 * Get MCM1
	 * @return string
	 */
	public function getMCM1()
	{
		return $this->MCM1;
	}
	/**
	 * Set MCM2
	 * @param string MCM2
	 * @return string
	 */
	public function setMCM2($_MCM2)
	{
		return ($this->MCM2 = $_MCM2);
	}
	/**
	 * Get MCM2
	 * @return string
	 */
	public function getMCM2()
	{
		return $this->MCM2;
	}
	/**
	 * Set MCM3
	 * @param string MCM3
	 * @return string
	 */
	public function setMCM3($_MCM3)
	{
		return ($this->MCM3 = $_MCM3);
	}
	/**
	 * Get MCM3
	 * @return string
	 */
	public function getMCM3()
	{
		return $this->MCM3;
	}
	/**
	 * Set MOGEffDate
	 * @param string MOGEffDate
	 * @return string
	 */
	public function setMOGEffDate($_MOGEffDate)
	{
		return ($this->MOGEffDate = $_MOGEffDate);
	}
	/**
	 * Get MOGEffDate
	 * @return string
	 */
	public function getMOGEffDate()
	{
		return $this->MOGEffDate;
	}
	/**
	 * Set MOGPayGrp
	 * @param string MOGPayGrp
	 * @return string
	 */
	public function setMOGPayGrp($_MOGPayGrp)
	{
		return ($this->MOGPayGrp = $_MOGPayGrp);
	}
	/**
	 * Get MOGPayGrp
	 * @return string
	 */
	public function getMOGPayGrp()
	{
		return $this->MOGPayGrp;
	}
	/**
	 * Set MOGPayInd
	 * @param string MOGPayInd
	 * @return string
	 */
	public function setMOGPayInd($_MOGPayInd)
	{
		return ($this->MOGPayInd = $_MOGPayInd);
	}
	/**
	 * Get MOGPayInd
	 * @return string
	 */
	public function getMOGPayInd()
	{
		return $this->MOGPayInd;
	}
	/**
	 * Set Mpi
	 * @param string Mpi
	 * @return string
	 */
	public function setMpi($_Mpi)
	{
		return ($this->Mpi = $_Mpi);
	}
	/**
	 * Get Mpi
	 * @return string
	 */
	public function getMpi()
	{
		return $this->Mpi;
	}
	/**
	 * Set PI1
	 * @param string PI1
	 * @return string
	 */
	public function setPI1($_PI1)
	{
		return ($this->PI1 = $_PI1);
	}
	/**
	 * Get PI1
	 * @return string
	 */
	public function getPI1()
	{
		return $this->PI1;
	}
	/**
	 * Set PI2
	 * @param string PI2
	 * @return string
	 */
	public function setPI2($_PI2)
	{
		return ($this->PI2 = $_PI2);
	}
	/**
	 * Get PI2
	 * @return string
	 */
	public function getPI2()
	{
		return $this->PI2;
	}
	/**
	 * Set PI3
	 * @param string PI3
	 * @return string
	 */
	public function setPI3($_PI3)
	{
		return ($this->PI3 = $_PI3);
	}
	/**
	 * Get PI3
	 * @return string
	 */
	public function getPI3()
	{
		return $this->PI3;
	}
	/**
	 * Set PI4
	 * @param string PI4
	 * @return string
	 */
	public function setPI4($_PI4)
	{
		return ($this->PI4 = $_PI4);
	}
	/**
	 * Get PI4
	 * @return string
	 */
	public function getPI4()
	{
		return $this->PI4;
	}
	/**
	 * Set ProcNote
	 * @param string ProcNote
	 * @return string
	 */
	public function setProcNote($_ProcNote)
	{
		return ($this->ProcNote = $_ProcNote);
	}
	/**
	 * Get ProcNote
	 * @return string
	 */
	public function getProcNote()
	{
		return $this->ProcNote;
	}
	/**
	 * Set Ric
	 * @param string Ric
	 * @return string
	 */
	public function setRic($_Ric)
	{
		return ($this->Ric = $_Ric);
	}
	/**
	 * Get Ric
	 * @return string
	 */
	public function getRic()
	{
		return $this->Ric;
	}
	/**
	 * Set SeqNum
	 * @param string SeqNum
	 * @return string
	 */
	public function setSeqNum($_SeqNum)
	{
		return ($this->SeqNum = $_SeqNum);
	}
	/**
	 * Get SeqNum
	 * @return string
	 */
	public function getSeqNum()
	{
		return $this->SeqNum;
	}
	/**
	 * Set ShortDescription
	 * @param string ShortDescription
	 * @return string
	 */
	public function setShortDescription($_ShortDescription)
	{
		return ($this->ShortDescription = $_ShortDescription);
	}
	/**
	 * Get ShortDescription
	 * @return string
	 */
	public function getShortDescription()
	{
		return $this->ShortDescription;
	}
	/**
	 * Set Statute
	 * @param string Statute
	 * @return string
	 */
	public function setStatute($_Statute)
	{
		return ($this->Statute = $_Statute);
	}
	/**
	 * Get Statute
	 * @return string
	 */
	public function getStatute()
	{
		return $this->Statute;
	}
	/**
	 * Set TermDate
	 * @param string TermDate
	 * @return string
	 */
	public function setTermDate($_TermDate)
	{
		return ($this->TermDate = $_TermDate);
	}
	/**
	 * Get TermDate
	 * @return string
	 */
	public function getTermDate()
	{
		return $this->TermDate;
	}
	/**
	 * Set TOS1
	 * @param string TOS1
	 * @return string
	 */
	public function setTOS1($_TOS1)
	{
		return ($this->TOS1 = $_TOS1);
	}
	/**
	 * Get TOS1
	 * @return string
	 */
	public function getTOS1()
	{
		return $this->TOS1;
	}
	/**
	 * Set TOS2
	 * @param string TOS2
	 * @return string
	 */
	public function setTOS2($_TOS2)
	{
		return ($this->TOS2 = $_TOS2);
	}
	/**
	 * Get TOS2
	 * @return string
	 */
	public function getTOS2()
	{
		return $this->TOS2;
	}
	/**
	 * Set TOS3
	 * @param string TOS3
	 * @return string
	 */
	public function setTOS3($_TOS3)
	{
		return ($this->TOS3 = $_TOS3);
	}
	/**
	 * Get TOS3
	 * @return string
	 */
	public function getTOS3()
	{
		return $this->TOS3;
	}
	/**
	 * Set TOS4
	 * @param string TOS4
	 * @return string
	 */
	public function setTOS4($_TOS4)
	{
		return ($this->TOS4 = $_TOS4);
	}
	/**
	 * Get TOS4
	 * @return string
	 */
	public function getTOS4()
	{
		return $this->TOS4;
	}
	/**
	 * Set TOS5
	 * @param string TOS5
	 * @return string
	 */
	public function setTOS5($_TOS5)
	{
		return ($this->TOS5 = $_TOS5);
	}
	/**
	 * Get TOS5
	 * @return string
	 */
	public function getTOS5()
	{
		return $this->TOS5;
	}
	/**
	 * Set XRef1
	 * @param string XRef1
	 * @return string
	 */
	public function setXRef1($_XRef1)
	{
		return ($this->XRef1 = $_XRef1);
	}
	/**
	 * Get XRef1
	 * @return string
	 */
	public function getXRef1()
	{
		return $this->XRef1;
	}
	/**
	 * Set XRef2
	 * @param string XRef2
	 * @return string
	 */
	public function setXRef2($_XRef2)
	{
		return ($this->XRef2 = $_XRef2);
	}
	/**
	 * Get XRef2
	 * @return string
	 */
	public function getXRef2()
	{
		return $this->XRef2;
	}
	/**
	 * Set XRef3
	 * @param string XRef3
	 * @return string
	 */
	public function setXRef3($_XRef3)
	{
		return ($this->XRef3 = $_XRef3);
	}
	/**
	 * Get XRef3
	 * @return string
	 */
	public function getXRef3()
	{
		return $this->XRef3;
	}
	/**
	 * Set XRef4
	 * @param string XRef4
	 * @return string
	 */
	public function setXRef4($_XRef4)
	{
		return ($this->XRef4 = $_XRef4);
	}
	/**
	 * Get XRef4
	 * @return string
	 */
	public function getXRef4()
	{
		return $this->XRef4;
	}
	/**
	 * Set XRef5
	 * @param string XRef5
	 * @return string
	 */
	public function setXRef5($_XRef5)
	{
		return ($this->XRef5 = $_XRef5);
	}
	/**
	 * Get XRef5
	 * @return string
	 */
	public function getXRef5()
	{
		return $this->XRef5;
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