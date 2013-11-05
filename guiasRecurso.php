<?php

if (!class_exists("guiasRecurso", false)) 
{
class guiasRecurso
{

  /**
   * 
   * @var string $numeroGuiaOrigem
   * @access public
   */
  public $numeroGuiaOrigem = null;

  /**
   * 
   * @var string $senha
   * @access public
   */
  public $senha = null;

  /**
   * 
   * @var opcaoRecursoGuia $opcaoRecursoGuia
   * @access public
   */
  public $opcaoRecursoGuia = null;

  /**
   * 
   * @param string $numeroGuiaOrigem
   * @param string $senha
   * @param opcaoRecursoGuia $opcaoRecursoGuia
   * @access public
   */
  public function __construct($numeroGuiaOrigem, $senha, $opcaoRecursoGuia)
  {
    $this->numeroGuiaOrigem = $numeroGuiaOrigem;
    $this->senha = $senha;
    $this->opcaoRecursoGuia = $opcaoRecursoGuia;
  }

}

}
