<?php return array (
  'plugins.importexport.native.displayName' => 'Module XML natif',
  'plugins.importexport.native.description' => 'Importer et exporter des articles et numéros au format XML natif d\'OJS.',
  'plugins.importexport.native.import' => 'Importer',
  'plugins.importexport.native.import.instructions' => 'Téléverser un fichier XML à importer',
  'plugins.importexport.native.exportSubmissionsSelect' => 'Sélectionner les articles à exporter',
  'plugins.importexport.native.exportSubmissions' => 'Exporter les articles',
  'plugins.importexport.native.exportIssues' => 'Exporter les numéros',
  'plugins.importexport.native.results' => 'Résultats',
  'plugins.inportexport.native.uploadFile' => 'Veuillez téléverser un fichier sous « Importer » pour continuer.',
  'plugins.importexport.native.importComplete' => 'L\'importation a bien été réalisée. Les éléments suivants ont été importés :',
  'plugins.importexport.native.cliUsage' => 'Utilisation : {$scriptName} {$pluginName} [command] ...
Commandes :
	import [xmlFileName] [journal_path] [user_name] ...
	export [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
	export [xmlFileName] [journal_path] article [articleId]
	export [xmlFileName] [journal_path] issues [issueId1] [issueId2] ...
	export [xmlFileName] [journal_path] issue [issueId]

Des paramètres supplémentaires sont requis pour importer des données comme suit, selon
le nœud racine du document XML.

Si le noeud racine est <article> ou <articles>, des paramètres supplémentaires sont requis.
Les formats suivants sont acceptés :

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_id [sectionId]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path] [user_name]
	issue_id [issueId] section_name [name]

{$scriptName} {$pluginName} import [xmlFileName] [journal_path]
	issue_id [issueId] section_abbrev [abbrev]
',
  'plugins.importexport.native.error.unknownSection' => 'Section {$param} inconnue',
  'plugins.importexport.native.error.unknownUser' => 'L\'utilisatrice ou utilisateur spécifié, « {$userName] », n\'existe pas.',
  'plugins.importexport.native.import.error.sectionTitleMismatch' => 'Le titre de rubrique « {$section1Title} » et le titre de rubrique « {$section2Title} » dans le numéro « {$issueTitle} » sont identiques à des rubriques existantes dans la revue.',
  'plugins.importexport.native.import.error.sectionTitleMatch' => 'Le titre de rubrique « {$sectionTitle} » dans le numéro « {$issueTitle} » est identique à une rubrique existante dans la revue, mais un autre titre de cette rubrique ne correspond à aucun autre titre de rubrique existante de la revue.',
  'plugins.importexport.native.import.error.sectionAbbrevMismatch' => 'L\'abréviation « {$section1Abbrev} » et l\'abréviation « {$section2Abbrev} » du numéro « {$issueTitle} » sont identiques à des rubriques existantes dans la revue.',
  'plugins.importexport.native.import.error.sectionAbbrevMatch' => 'L\'abréviation de rubrique « {$sectionAbbrev} » du numéro « {$issueTitle} » correspond à un rubrique existante de la revue, mais une autre abréviation de cette rubrique ne correspond pas à aucune autre abréviation de rubrique existante.',
  'plugins.importexport.native.import.error.issueIdentificationMatch' => 'Aucun ou plus d\'un numéro correspond à l\'identifiant de numéro donné « {$issueIdentification} ».',
  'plugins.importexport.native.import.error.issueIdentificationDuplicate' => 'Un numéro existant (ID :  {$issueId}) correspond à l\'identifiant de numéro donné (« {$issueIdentification} »). Le numéro ne sera pas modifié, mais les articles seront ajoutés.',
  'plugins.importexport.native.import.error.issueIdentificationMissing' => 'L\'élément d\'identification du numéro est manquant pour l\'article  « {$articleTitle} ».',
  'plugins.importexport.native.import.error.publishedDateMissing' => 'L\'article « {$articleTitle} » est présent dans un numéro, mais n\'a pas de date de publication.',
);