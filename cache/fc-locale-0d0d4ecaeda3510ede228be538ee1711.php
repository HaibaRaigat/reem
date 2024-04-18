<?php return array (
  'plugins.importexport.datacite.displayName' => 'Module d\'exportation/enregistrement DataCite',
  'plugins.importexport.datacite.description' => 'Exporte ou enregistre les métadonnées de numéro, article, épreuve et fichier supplémentaire au format DataCite.',
  'plugins.importexport.datacite.settings.description' => 'Veuillez configurer le module d\'exportation DataCite avant de l\'utiliser pour la première fois.',
  'plugins.importexport.datacite.intro' => '
		Si vous souhaitez enregistrer vos DOI avec DataCite, veuillez contacter le ou la gestionnaire
		via la <a href="http://datacite.org/contact" target="_blank">page d\'accueil de DataCite</a>, 
		qui vous renverra à votre membre local DataCite. Une fois que vous aurez établi un contact
		avec l\'organisation membre,  un accès au service DataCite pour demander
		des identifiants permanents (DOIs) et enregistrer les métadonnées associées vous sera fourni. Si vous n\'avez
		pas votre propre nom d\'utilisateur ou utilisatrice et votre mot de passe, vous serez tout de même en mesure d\'exporter
		au format XML de DataCite mais vous ne pourrez pas enregistrer vos DOI avec DataCite
		depuis OJS. Veuillez noter que le mot de passe sera sauvegardé en texte brut, c\'est-à-dire non chiffré
		en raison des exigences d\'enregistrement du service DataCite.
	',
  'plugins.importexport.datacite.settings.form.username' => 'Nom d\'utilisateur ou utilisatrice (symbole)',
  'plugins.importexport.datacite.settings.form.usernameRequired' => 'Veuillez entrer le nom d\'utilisateur ou utilisatrice (symbole) que vous avez obtenu de DataCite. Il ne doit pas contenir de double point.',
  'plugins.importexport.datacite.settings.form.automaticRegistration.description' => 'OJS déposera les dOI automatiquement auprès de DataCite. Veuillez noter que le traitement peu prendre un certain temps après la publication (par exemple en fonction de votre configuration cronjob). Vous pouvez vérifier tous les DOI non enregistrés.',
  'plugins.importexport.datacite.settings.form.testMode.description' => 'Utiliser le préfixe de test DataCite pour l\'enregistrement des DOI. N\'oubliez pas de désactiver cette option lors du passage en production.',
  'plugins.importexport.datacite.settings.form.testUsername' => 'Nom d\'utilisateur test',
  'plugins.importexport.datacite.settings.form.testPassword' => 'Mot de passe test',
  'plugins.importexport.datacite.settings.form.testDOIPrefix' => 'Préfixe DOI test',
  'plugins.importexport.datacite.senderTask.name' => 'Tâche automatique d\'enregistrement DataCite',
  'plugins.importexport.datacite.cliUsage' => 'Utilisation : 
{$scriptName} {$pluginName} export [outputFileName] [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] {issues|articles|galleys} objectId1 [objectId2] ...
',
);