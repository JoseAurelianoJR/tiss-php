<?php

if (!class_exists("TissLoteGuias", false)) 
{
include_once('loteGuiasWS.php');
include_once('cabecalhoTransacao.php');
include_once('identificacaoTransacao.php');
include_once('origem.php');
include_once('identificacaoPrestador.php');
include_once('destino.php');
include_once('ct_prestadorIdentificacao.php');
include_once('assinaturaDigital.php');
include_once('ct_loginSenha.php');
include_once('ctm_guiaLote.php');
include_once('guiasTISS.php');
include_once('ctm_consultaGuia.php');
include_once('contratadoExecutante.php');
include_once('ct_guiaCabecalho.php');
include_once('ct_beneficiarioDados.php');
include_once('ct_contratadoDados.php');
include_once('ct_contratadoProfissionalDados.php');
include_once('ctm_consultaAtendimento.php');
include_once('procedimento.php');
include_once('ctm_honorarioIndividualGuia.php');
include_once('localContratado.php');
include_once('codigoContratado.php');
include_once('dadosContratadoExecutante.php');
include_once('dadosInternacao.php');
include_once('ct_procedimentoExecutadoHonorIndiv.php');
include_once('ct_procedimentoDados.php');
include_once('cto_guiaOdontologia.php');
include_once('dadosProfissionaisResponsaveis.php');
include_once('procedimentosExecutados.php');
include_once('denteRegiao.php');
include_once('cto_anexoSituacaoInicialnaGTO.php');
include_once('ct_situacaoInicial.php');
include_once('dentes.php');
include_once('ctm_spsadtGuia.php');
include_once('cabecalhoGuia.php');
include_once('dadosSolicitante.php');
include_once('dadosSolicitacao.php');
include_once('dadosExecutante.php');
include_once('ct_autorizacaoSADT.php');
include_once('ctm_spsadtAtendimento.php');
include_once('ct_procedimentoExecutadoSadt.php');
include_once('ct_identEquipeSADT.php');
include_once('codProfissional.php');
include_once('despesa.php');
include_once('ct_procedimentoExecutadoOutras.php');
include_once('ct_guiaValorTotal.php');
include_once('ctm_internacaoResumoGuia.php');
include_once('ct_autorizacaoInternacao.php');
include_once('ctm_internacaoDados.php');
include_once('declaracoes.php');
include_once('ctm_internacaoDadosSaida.php');
include_once('ct_procedimentoExecutadoInt.php');
include_once('identEquipe.php');
include_once('ct_identEquipe.php');
include_once('protocoloRecebimentoWS.php');
include_once('ct_recebimentoLote.php');
include_once('ct_protocoloRecebimento.php');
include_once('ct_protocoloDetalhe.php');
include_once('glosaProtocolo.php');
include_once('dadosGuiasProtocolo.php');
include_once('ct_motivoGlosa.php');
include_once('ct_guiaDadosOdonto.php');
include_once('ct_valorTotal.php');
include_once('procedimentoRealizado.php');
include_once('glosasProcedimento.php');
include_once('ct_procedimentoExecutadoOdonto.php');
include_once('ct_guiaDados.php');
include_once('ct_procedimentoExecutado.php');
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
 * <b><font size=4>webservice para consumo dos prestadores no padrão tiss</font></b>
 * 
 */
class TissLoteGuias extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'loteGuiasWS' => '\\loteGuiasWS',
    'cabecalhoTransacao' => '\\cabecalhoTransacao',
    'identificacaoTransacao' => '\\identificacaoTransacao',
    'origem' => '\\origem',
    'identificacaoPrestador' => '\\identificacaoPrestador',
    'destino' => '\\destino',
    'ct_prestadorIdentificacao' => '\\ct_prestadorIdentificacao',
    'assinaturaDigital' => '\\assinaturaDigital',
    'ct_loginSenha' => '\\ct_loginSenha',
    'ctm_guiaLote' => '\\ctm_guiaLote',
    'guiasTISS' => '\\guiasTISS',
    'ctm_consultaGuia' => '\\ctm_consultaGuia',
    'contratadoExecutante' => '\\contratadoExecutante',
    'ct_guiaCabecalho' => '\\ct_guiaCabecalho',
    'ct_beneficiarioDados' => '\\ct_beneficiarioDados',
    'ct_contratadoDados' => '\\ct_contratadoDados',
    'ct_contratadoProfissionalDados' => '\\ct_contratadoProfissionalDados',
    'ctm_consultaAtendimento' => '\\ctm_consultaAtendimento',
    'procedimento' => '\\procedimento',
    'ctm_honorarioIndividualGuia' => '\\ctm_honorarioIndividualGuia',
    'localContratado' => '\\localContratado',
    'codigoContratado' => '\\codigoContratado',
    'dadosContratadoExecutante' => '\\dadosContratadoExecutante',
    'dadosInternacao' => '\\dadosInternacao',
    'ct_procedimentoExecutadoHonorIndiv' => '\\ct_procedimentoExecutadoHonorIndiv',
    'ct_procedimentoDados' => '\\ct_procedimentoDados',
    'cto_guiaOdontologia' => '\\cto_guiaOdontologia',
    'dadosProfissionaisResponsaveis' => '\\dadosProfissionaisResponsaveis',
    'procedimentosExecutados' => '\\procedimentosExecutados',
    'denteRegiao' => '\\denteRegiao',
    'cto_anexoSituacaoInicialnaGTO' => '\\cto_anexoSituacaoInicialnaGTO',
    'ct_situacaoInicial' => '\\ct_situacaoInicial',
    'dentes' => '\\dentes',
    'ctm_sp-sadtGuia' => '\\ctm_spsadtGuia',
    'cabecalhoGuia' => '\\cabecalhoGuia',
    'dadosSolicitante' => '\\dadosSolicitante',
    'dadosSolicitacao' => '\\dadosSolicitacao',
    'dadosExecutante' => '\\dadosExecutante',
    'ct_autorizacaoSADT' => '\\ct_autorizacaoSADT',
    'ctm_sp-sadtAtendimento' => '\\ctm_spsadtAtendimento',
    'ct_procedimentoExecutadoSadt' => '\\ct_procedimentoExecutadoSadt',
    'ct_identEquipeSADT' => '\\ct_identEquipeSADT',
    'codProfissional' => '\\codProfissional',
    'despesa' => '\\despesa',
    'ct_procedimentoExecutadoOutras' => '\\ct_procedimentoExecutadoOutras',
    'ct_guiaValorTotal' => '\\ct_guiaValorTotal',
    'ctm_internacaoResumoGuia' => '\\ctm_internacaoResumoGuia',
    'dadosExecutante' => '\\dadosExecutante',
    'ct_autorizacaoInternacao' => '\\ct_autorizacaoInternacao',
    'ctm_internacaoDados' => '\\ctm_internacaoDados',
    'declaracoes' => '\\declaracoes',
    'ctm_internacaoDadosSaida' => '\\ctm_internacaoDadosSaida',
    'ct_procedimentoExecutadoInt' => '\\ct_procedimentoExecutadoInt',
    'identEquipe' => '\\identEquipe',
    'ct_identEquipe' => '\\ct_identEquipe',
    'codProfissional' => '\\codProfissional',
    'protocoloRecebimentoWS' => '\\protocoloRecebimentoWS',
    'ct_recebimentoLote' => '\\ct_recebimentoLote',
    'ct_protocoloRecebimento' => '\\ct_protocoloRecebimento',
    'ct_protocoloDetalhe' => '\\ct_protocoloDetalhe',
    'glosaProtocolo' => '\\glosaProtocolo',
    'dadosGuiasProtocolo' => '\\dadosGuiasProtocolo',
    'ct_motivoGlosa' => '\\ct_motivoGlosa',
    'ct_guiaDadosOdonto' => '\\ct_guiaDadosOdonto',
    'ct_valorTotal' => '\\ct_valorTotal',
    'procedimentoRealizado' => '\\procedimentoRealizado',
    'glosasProcedimento' => '\\glosasProcedimento',
    'ct_procedimentoExecutadoOdonto' => '\\ct_procedimentoExecutadoOdonto',
    'denteRegiao' => '\\denteRegiao',
    'ct_guiaDados' => '\\ct_guiaDados',
    'procedimentoRealizado' => '\\procedimentoRealizado',
    'glosasProcedimento' => '\\glosasProcedimento',
    'ct_procedimentoExecutado' => '\\ct_procedimentoExecutado',
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
  public function __construct(array $options = array(), $wsdl = 'http://wstiss.qualysystem.com.br/V3_00_01/tissLoteGuias.asmx?wsdl')
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
   * @param loteGuiasWS $loteGuiasWS
   * @access public
   * @return protocoloRecebimentoWS
   */
  public function tissLoteGuias_Operation(loteGuiasWS $loteGuiasWS)
  {
    return $this->__soapCall('tissLoteGuias_Operation', array($loteGuiasWS));
  }

}

}
