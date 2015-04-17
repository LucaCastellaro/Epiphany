<?php
class User
{
	public $id='';
	public $nome='';
	public $cognome='';
	public $cf='';
	public $indirizzo='';
	public $cap='';
	public $citta='';
	public $provincia='';
	public $email='';
	public $telefono='';
	public $idCitta='';

	// method declaration
	public function __construct($id,$nome,$cognome,$cf,$indirizzo,$cap,$citta,$provincia,$email,$telefono,$idCitta)
	 {
		$this->id = $id;
		$this->nome = $nome;
		$this->cognome = $cognome;
		$this->cf = $cf;
		$this->indirizzo=$indirizzo;
		$this->cap=$cap;
		$this->citta=$citta;
		$this->provincia=$provincia;
		$this->email=$email;
		$this->telefono=$telefono;
		$this->idCitta= $idCitta;

	}
}
?>