<?php return array (
  'plugins.importexport.crossref.displayName' => 'Module d\'exportation CrossRef XML',
  'plugins.importexport.crossref.description' => 'Exporter les métadonnées de l\'article au format CrossRef XML.',
  'plugins.importexport.crossref.requirements' => 'Exigences',
  'plugins.importexport.crossref.requirements.satisfied' => 'Toutes les exigences du module sont satisfaites.',
  'plugins.importexport.crossref.error.publisherNotConfigured' => 'Un éditeur n\'a pas été configuré ! Vous devez ajouter une institution éditrice sur la page  des <a href="{$journalSettingsUrl}" target="_blank">paramètres de la revue</a>.',
  'plugins.importexport.crossref.error.issnNotConfigured' => 'L\'ISSN de la revue n\'a pas été configuré ! Vous devez ajouter un ISSN sur la page des <a href="{$journalSettingsUrl}" target="_blank">paramètres de la revue</a>.',
  'plugins.importexport.crossref.error.noDOIContentObjects' => 'Les articles ne sont pas sélectionnés pour l\'attribution d\'un DOI dans le module d\'identifiant public DOI, le dépôt et l\'exportation à partir de ce module sont donc impossibles.',
  'plugins.importexport.crossref.settings.depositorIntro' => 'Les éléments suivants sont requis pour un dépôt CrossRef réussi.',
  'plugins.importexport.crossref.settings.form.depositorName' => 'Nom du déposant',
  'plugins.importexport.crossref.settings.form.depositorEmail' => 'Courriel du déposant',
  'plugins.importexport.crossref.settings.form.depositorNameRequired' => 'Veuillez entrer le nom du déposant.',
  'plugins.importexport.crossref.settings.form.depositorEmailRequired' => 'Veuillez entrer le courriel du déposant.',
  'plugins.importexport.crossref.registrationIntro' => 'Si vous souhaitez utiliser ce module pour enregistrer des DOI (Digital Object Identifiers) directement avec CrossRef, vous aurez besoin d\'un nom d\'utilisateur ou d\'utilisatrice et d\'un mot de passe (disponible sur <a href="http://www.crossref.org" target="_blank"> CrossRef </a>). Si vous n\'avez pas votre propre nom d\'utilisateur ou d\'utilisatrice et mot de passe, vous pouvez toujours exporter en format XML CrossRef, mais vous ne pouvez pas enregistrer vos DOI avec CrossRef à partir d\'OJS.',
  'plugins.importexport.crossref.settings.form.username' => 'Nom d\'utilisateur ou utilisatrice',
  'plugins.importexport.crossref.settings.form.usernameRequired' => 'Veuillez entrer le nom d\'utilisateur ou utilisatrice que vous avez obtenu de CrossRef.',
  'plugins.importexport.crossref.settings.form.automaticRegistration.description' => 'OJS déposera automatiquement les DOI assignés auprès de CrossRef. Veuillez noter que le traitement peut prendre un peu de temps après la publication (par exemple, en fonction de votre configuration cronjob). Vous pouvez vérifier tous les DOI non enregistrés.',
  'plugins.importexport.crossref.settings.form.testMode.description' => 'Utiliser l\'API test CrossRef (environnement de test) pour le dépôt de DOI. N\'oubliez pas de désactiver option lors du passage en production.',
  'plugins.importexport.crossref.settings.form.validation' => 'Valider le XML. Utilisez cette option pour télécharger le XML pour l\'enregistrement manuel du DOI.',
  'plugins.importexport.crossref.settings.form.onlyValidateExport' => 'Valider uniquement l\'exportation. Ne pas télécharger le fichier.',
  'plugins.importexport.crossref.issues.description' => 'Note : seuls les numéros (et non leurs articles) seront pris en compte pour l\'exportation/enregistrement ici.',
  'plugins.importexport.crossref.status.failed' => 'Échec',
  'plugins.importexport.crossref.status.registered' => 'Actif',
  'plugins.importexport.crossref.status.markedRegistered' => 'Marqué actif',
  'plugins.importexport.crossref.action.register' => 'Dépôt',
  'plugins.importexport.crossref.statusLegend' => '
		<p> Statut du dépôt : </p>
		<p>
		- Non déposé : aucune tentative de dépôt n\'a été effectuée pour ce DOI. <br />
		- Actif : le DOI a été déposé et se résout correctement. <br />
		- Échec : le dépôt du DOI a échoué. <br />
		- Marqué actif : le DOI a été marqué manuellement comme actif.
		</p>
		<p> Seul le statut de la dernière tentative de dépôt est affiché. </p>
		<p> Si un dépôt a échoué, veuillez résoudre le problème et réessayer d\'enregistrer le DOI. </p>',
  'plugins.importexport.crossref.action.export' => 'Télécharger le XML',
  'plugins.importexport.crossref.action.markRegistered' => 'Marqué actif',
  'plugins.importexport.crossref.senderTask.name' => 'Tâche automatique d\'enregistrement CrossRef',
  'plugins.importexport.crossref.cliUsage' => 'Utilisation :
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
{$scriptName} {$pluginName} register [journal_path] articles objectId1 [objectId2] ...
',
  'plugins.importexport.crossref.register.error.mdsError' => 'L\'enregistrement a échoué ! Le serveur d\'enregistrement de DOI a renvoyé une erreur.',
  'plugins.importexport.crossref.register.success.warning' => 'L\'enregistrement a été réalisé, mais l\'avertissement suivant a été émis : \'{$param}\'.',
  'plugins.importexport.crossref.export.error.issueNotFound' => 'Aucun numéro ne correspond à l\'identifiant du numéro spécifié « {$issueId} ».',
  'plugins.importexport.crossref.export.error.articleNotFound' => 'Aucun article ne correspond à l\'identifiant d\'article spécifié « {$articleId} ».',
);