<?php

if (!class_exists("TissSolicitacaoDemonstrativoRetorno", false)) 
{
include_once('solicitacaoDemonstrativoRetornoWS.php');
include_once('cabecalhoTransacao.php');
include_once('identificacaoTransacao.php');
include_once('origem.php');
include_once('identificacaoPrestador.php');
include_once('destino.php');
include_once('ct_prestadorIdentificacao.php');
include_once('assinaturaDigital.php');
include_once('ct_loginSenha.php');
include_once('ct_demonstrativoSolicitacao.php');
include_once('periodo.php');
include_once('ct_contratadoDados.php');
include_once('demonstrativoRetornoWS.php');
include_once('ct_demonstrativoRetorno.php');
include_once('ctm_demonstrativoAnaliseConta.php');
include_once('dadosPrestador.php');
include_once('ct_demonstrativoCabecalho.php');
include_once('dadosProtocolo.php');
include_once('ct_contaMedicaResumo.php');
include_once('relacaoGuias.php');
include_once('detalhesGuia.php');
include_once('relacaoGlosa.php');
include_once('ct_motivoGlosa.php');
include_once('ct_procedimentoDados.php');
include_once('ctm_demonstrativoPagamento.php');
include_once('dadosContratado.php');
include_once('dadosResumo.php');
include_once('ct_pagamentoDados.php');
include_once('ct_dadosResumoDemonstrativo.php');
include_once('ct_descontos.php');
include_once('cto_demonstrativoOdontologia.php');
include_once('periodoProc.php');
include_once('dadosPagamentoProtocolo.php');
include_once('dadosPagamentoGuia.php');
include_once('dadosPagamento.php');
include_once('denteRegiao.php');
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
class TissSolicitacaoDemonstrativoRetorno extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'solicitacaoDemonstrativoRetornoWS' => '\\solicitacaoDemonstrativoRetornoWS',
    'cabecalhoTransacao' => '\\cabecalhoTransacao',
    'identificacaoTransacao' => '\\identificacaoTransacao',
    'origem' => '\\origem',
    'identificacaoPrestador' => '\\identificacaoPrestador',
    'destino' => '\\destino',
    'ct_prestadorIdentificacao' => '\\ct_prestadorIdentificacao',
    'assinaturaDigital' => '\\assinaturaDigital',
    'ct_loginSenha' => '\\ct_loginSenha',
    'ct_demonstrativoSolicitacao' => '\\ct_demonstrativoSolicitacao',
    'periodo' => '\\periodo',
    'ct_contratadoDados' => '\\ct_contratadoDados',
    'demonstrativoRetornoWS' => '\\demonstrativoRetornoWS',
    'ct_demonstrativoRetorno' => '\\ct_demonstrativoRetorno',
    'ctm_demonstrativoAnaliseConta' => '\\ctm_demonstrativoAnaliseConta',
    'dadosPrestador' => '\\dadosPrestador',
    'ct_demonstrativoCabecalho' => '\\ct_demonstrativoCabecalho',
    'dadosProtocolo' => '\\dadosProtocolo',
    'ct_contaMedicaResumo' => '\\ct_contaMedicaResumo',
    'relacaoGuias' => '\\relacaoGuias',
    'detalhesGuia' => '\\detalhesGuia',
    'relacaoGlosa' => '\\relacaoGlosa',
    'ct_motivoGlosa' => '\\ct_motivoGlosa',
    'ct_procedimentoDados' => '\\ct_procedimentoDados',
    'ctm_demonstrativoPagamento' => '\\ctm_demonstrativoPagamento',
    'dadosContratado' => '\\dadosContratado',
    'dadosResumo' => '\\dadosResumo',
    'ct_pagamentoDados' => '\\ct_pagamentoDados',
    'ct_dadosResumoDemonstrativo' => '\\ct_dadosResumoDemonstrativo',
    'ct_descontos' => '\\ct_descontos',
    'cto_demonstrativoOdontologia' => '\\cto_demonstrativoOdontologia',
    'periodoProc' => '\\periodoProc',
    'dadosPrestador' => '\\dadosPrestador',
    'dadosPagamentoProtocolo' => '\\dadosPagamentoProtocolo',
    'dadosPagamentoGuia' => '\\dadosPagamentoGuia',
    'dadosPagamento' => '\\dadosPagamento',
    'denteRegiao' => '\\denteRegiao',
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
  public function __construct(array $options = array(), $wsdl = 'http://wstiss.qualysystem.com.br/V3_00_01/tissSolicitacaoDemonstrativoRetorno.asmx?wsdl')
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
   * @param solicitacaoDemonstrativoRetornoWS $solicitacaoDemonstrativoRetornoWS
   * @access public
   * @return demonstrativoRetornoWS
   */
  public function tissSolicitacaoDemonstrativoRetorno_Operation(solicitacaoDemonstrativoRetornoWS $solicitacaoDemonstrativoRetornoWS)
  {
    return $this->__soapCall('tissSolicitacaoDemonstrativoRetorno_Operation', array($solicitacaoDemonstrativoRetornoWS));
  }

}

}
