<?php

if (!class_exists("ct_guiaRecursoLote", false)) 
{
class ct_guiaRecursoLote
{

  /**
   * 
   * @var ctm_recursoGlosa $guiaRecursoGlosa
   * @access public
   */
  public $guiaRecursoGlosa = null;

  /**
   * 
   * @var cto_recursoGlosaOdonto $guiaRecursoGlosaOdonto
   * @access public
   */
  public $guiaRecursoGlosaOdonto = null;

  /**
   * 
   * @param ctm_recursoGlosa $guiaRecursoGlosa
   * @param cto_recursoGlosaOdonto $guiaRecursoGlosaOdonto
   * @access public
   */
  public function __construct($guiaRecursoGlosa, $guiaRecursoGlosaOdonto)
  {
    $this->guiaRecursoGlosa = $guiaRecursoGlosa;
    $this->guiaRecursoGlosaOdonto = $guiaRecursoGlosaOdonto;
  }

}

}
