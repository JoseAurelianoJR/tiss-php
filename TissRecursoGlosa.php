<?php

if (!class_exists("TissRecursoGlosa", false)) 
{
include_once('loteRecursoGlosaWS.php');
include_once('cabecalhoTransacao.php');
include_once('identificacaoTransacao.php');
include_once('origem.php');
include_once('identificacaoPrestador.php');
include_once('destino.php');
include_once('ct_prestadorIdentificacao.php');
include_once('assinaturaDigital.php');
include_once('ct_loginSenha.php');
include_once('ct_guiaRecursoLote.php');
include_once('ctm_recursoGlosa.php');
include_once('dadosContratado.php');
include_once('opcaoRecurso.php');
include_once('recursoGuia.php');
include_once('opcaoRecursoGuia.php');
include_once('recursoGuiaCompleta.php');
include_once('itensGuia.php');
include_once('recursoProtocolo.php');
include_once('ct_procedimentoDados.php');
include_once('cto_recursoGlosaOdonto.php');
include_once('recursoProcedimento.php');
include_once('protocoloRecebimentoRecursoWS.php');
include_once('ct_recebimentoRecurso.php');
include_once('ct_motivoGlosa.php');
include_once('ct_recursoGlosaRecebimento.php');
include_once('guiasRecurso.php');
include_once('ct_contratadoDados.php');
include_once('SignatureType.php');
include_once('SignedInfoType.php');
include_once('CanonicalizationMethodType.php');
include_once('SignatureMethodType.php');
include_once('ReferenceType.php');
include_once('TransformType.php');
include_once('DigestMethodType.php');
include_once('SignatureValueType.php');
include_once('KeyInfoType.php');
include_once('KeyValueType.php');
include_once('DSAKeyValueType.php');
include_once('RSAKeyValueType.php');
include_once('RetrievalMethodType.php');
include_once('X509DataType.php');
include_once('X509IssuerSerialType.php');
include_once('PGPDataType.php');
include_once('SPKIDataType.php');
include_once('ObjectType.php');


/**
 * <b><font size=4>WebService para consumo dos prestadores no padrão TISS</font></b>
 * 
 */
class TissRecursoGlosa extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'loteRecursoGlosaWS' => '\\loteRecursoGlosaWS',
    'cabecalhoTransacao' => '\\cabecalhoTransacao',
    'identificacaoTransacao' => '\\identificacaoTransacao',
    'origem' => '\\origem',
    'identificacaoPrestador' => '\\identificacaoPrestador',
    'destino' => '\\destino',
    'ct_prestadorIdentificacao' => '\\ct_prestadorIdentificacao',
    'assinaturaDigital' => '\\assinaturaDigital',
    'ct_loginSenha' => '\\ct_loginSenha',
    'ct_guiaRecursoLote' => '\\ct_guiaRecursoLote',
    'ctm_recursoGlosa' => '\\ctm_recursoGlosa',
    'dadosContratado' => '\\dadosContratado',
    'opcaoRecurso' => '\\opcaoRecurso',
    'recursoGuia' => '\\recursoGuia',
    'opcaoRecursoGuia' => '\\opcaoRecursoGuia',
    'recursoGuiaCompleta' => '\\recursoGuiaCompleta',
    'itensGuia' => '\\itensGuia',
    'recursoProtocolo' => '\\recursoProtocolo',
    'ct_procedimentoDados' => '\\ct_procedimentoDados',
    'cto_recursoGlosaOdonto' => '\\cto_recursoGlosaOdonto',
    'dadosContratado' => '\\dadosContratado',
    'opcaoRecurso' => '\\opcaoRecurso',
    'recursoGuia' => '\\recursoGuia',
    'recursoProcedimento' => '\\recursoProcedimento',
    'recursoProtocolo' => '\\recursoProtocolo',
    'protocoloRecebimentoRecursoWS' => '\\protocoloRecebimentoRecursoWS',
    'ct_recebimentoRecurso' => '\\ct_recebimentoRecurso',
    'ct_motivoGlosa' => '\\ct_motivoGlosa',
    'ct_recursoGlosaRecebimento' => '\\ct_recursoGlosaRecebimento',
    'recursoProtocolo' => '\\recursoProtocolo',
    'guiasRecurso' => '\\guiasRecurso',
    'opcaoRecursoGuia' => '\\opcaoRecursoGuia',
    'itensGuia' => '\\itensGuia',
    'recursoGuia' => '\\recursoGuia',
    'ct_contratadoDados' => '\\ct_contratadoDados',
    'SignatureType' => '\\SignatureType',
    'SignedInfoType' => '\\SignedInfoType',
    'CanonicalizationMethodType' => '\\CanonicalizationMethodType',
    'SignatureMethodType' => '\\SignatureMethodType',
    'ReferenceType' => '\\ReferenceType',
    'TransformType' => '\\TransformType',
    'DigestMethodType' => '\\DigestMethodType',
    'SignatureValueType' => '\\SignatureValueType',
    'KeyInfoType' => '\\KeyInfoType',
    'KeyValueType' => '\\KeyValueType',
    'DSAKeyValueType' => '\\DSAKeyValueType',
    'RSAKeyValueType' => '\\RSAKeyValueType',
    'RetrievalMethodType' => '\\RetrievalMethodType',
    'X509DataType' => '\\X509DataType',
    'X509IssuerSerialType' => '\\X509IssuerSerialType',
    'PGPDataType' => '\\PGPDataType',
    'SPKIDataType' => '\\SPKIDataType',
    'ObjectType' => '\\ObjectType');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'http://wstiss.qualysystem.com.br/V3_00_01/tissRecursoGlosa.asmx?wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * Método extraído de interface dos wsdl (implementa-se o xsd tisswebservicesv3_00_01)
   * 
   * @param loteRecursoGlosaWS $loteRecursoGlosaWS
   * @access public
   * @return protocoloRecebimentoRecursoWS
   */
  public function tissRecursoGlosa_Operation(loteRecursoGlosaWS $loteRecursoGlosaWS)
  {
    return $this->__soapCall('tissRecursoGlosa_Operation', array($loteRecursoGlosaWS));
  }

}

}
