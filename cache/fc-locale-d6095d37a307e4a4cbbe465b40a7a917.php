<?php return array (
  'plugins.importexport.pubmed.displayName' => 'Module d\'exportation XML PubMed',
  'plugins.importexport.pubmed.description' => 'Exporter les métadonnées de l\'article au format XML PubMed pour indexation dans MEDLINE.',
  'plugins.importexport.pubmed.export' => 'Exporter les données',
  'plugins.importexport.pubmed.export.issues' => 'Exporter des numéros',
  'plugins.importexport.pubmed.export.selectIssue' => 'Sélectionner un numéro à exporter.',
  'plugins.importexport.pubmed.export.articles' => 'Exporter des articles',
  'plugins.importexport.pubmed.export.selectArticle' => 'Sélectionner les articles à exporter.',
  'plugins.importexport.pubmed.cliUsage' => 'Utilisation : 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
{$scriptName} {$pluginName} [xmlFileName] [journal_path] numéro [issueId]
',
  'plugins.importexport.pubmed.cliError' => 'ERREUR :',
  'plugins.importexport.pubmed.export.error.issueNotFound' => 'Aucun numéro ne correspond à l\'identifiant du numéro indiqué « {$issueId} ».',
  'plugins.importexport.pubmed.export.error.articleNotFound' => 'Aucun article ne correspond à l\'identifiant de l\'article indiqué « {$articleId} ».',
);