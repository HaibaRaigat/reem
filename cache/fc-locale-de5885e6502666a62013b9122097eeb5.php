<?php return array (
  'plugins.importexport.users.displayName' => 'Module XML utilisateurs et utilisatrices',
  'plugins.importexport.users.description' => 'Importer et exporter les utilisateurs et utilisatrices',
  'plugins.importexport.users.cliUsage' => 'Utilisation : {$scriptName} {$pluginName} [command] ...
Commandes :
	import [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [userId1] [userId2] ...
',
  'plugins.importexport.users.cliUsage.examples' => '
Exemples :
	Importer des utilisateurs et utilisatrices dans myJournal à partir de myImportFile.xml :
	{$scriptName} {$pluginName} import myImportFile.xml myJournal

	Exporter tous les utilisateurs et utilisatrices de myJournal  :
	{$scriptName} {$pluginName} export myExportFile.xml myJournal

	Exporter les utilisateurs et utilisatrices en indiquant leur indentifiant  :
	{$scriptName} {$pluginName} export myExportFile.xml myJournal 1 2
',
  'plugins.importexport.users.import.importUsers' => 'Importer des utilisateurs ou utilisatrices',
  'plugins.importexport.users.import.instructions' => 'Sélectionner un fichier de données XML contenant les renseignements à propos des  utilisatrices et utilisateurs pour l\'importation dans cette revue. Voyez l\'aide de la revue pour les renseignements sur le format de ce fichier.<br/><br/>Notez que si le fichier importé contient un ou plusieurs noms d\'utilisatrices et utilisateurs  ou adresses de courriel qui existent déjà dans le système, les données pour ces utilisatrices et utilisateurs ne seront pas importées et tous les nouveaux rôles à créer seront assignés aux utilisatrices et utilisateurs existants.',
  'plugins.importexport.users.import.dataFile' => 'Fichier de données de l\'utilisateur ou utilisatrice',
  'plugins.importexport.users.import.sendNotify' => 'Envoyer un courriel de notification contenant leur nom et leur mot de passe à chaque utilisatrice ou utilisateur importé.',
  'plugins.importexport.users.import.continueOnError' => 'Continuer à importer d\'autres utilisatrices ou utilisateurs si une erreur se produit.',
  'plugins.importexport.users.import.usersWereImported' => 'Les utilisatrices ou utilisateurs suivants ont été importés avec succès dans le système',
  'plugins.importexport.users.import.errorsOccurred' => 'Des erreurs se sont produites lors de l\'importation',
  'plugins.importexport.users.import.confirmUsers' => 'Confirmez qu\'il s\'agit bien des utilisateurs ou utilisatrices que vous souhaitez importer dans le système',
  'plugins.importexport.users.import.warning' => 'Avertissement',
  'plugins.importexport.users.import.encryptionMismatch' => 'Impossible d\'utiliser les mots de passe hachés avec {$importHash} ; OJS est configuré pour utiliser {$ojsHash}. Si vous continuez, vous devrez réinitialiser les mots de passe des utilisatrices et utilisateurs importés.',
  'plugins.importexport.users.unknownPress' => 'Un chemin d\'accès de revue inconnu « {$journalPath} » a été indiqué.',
  'plugins.importexport.users.export.exportUsers' => 'Exporter les utilisatrices et utilisateurs',
  'plugins.importexport.users.export.exportByRole' => 'Exporter par rôle',
  'plugins.importexport.users.export.exportAllUsers' => 'Tout exporter',
  'plugins.importexport.users.export.errorsOccurred' => 'Des erreurs se sont produites lors de l\'exportation',
  'plugins.importexport.users.importComplete' => 'Importation réussie. Les utilisatrices et utilisateurs dont les noms et adresses de courriel ne sont pas déjà utilisés ont été importés, ainsi que les groupes d\'utilisatrices et d\'utilisateurs associés.',
  'plugins.importexport.users.results' => 'Résultats',
  'plugins.importexport.users.uploadFile' => 'Veuillez téléverser un fichier sous « Importer » pour continuer.',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Impossible d\'écrire dans le fichier « {$fileName} ».',
);