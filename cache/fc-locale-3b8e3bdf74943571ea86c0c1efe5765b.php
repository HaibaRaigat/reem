<?php return array (
  'plugins.importexport.doaj.displayName' => 'Module d\'exportation DOAJ',
  'plugins.importexport.doaj.description' => 'Exporter la revue pour DOAJ.',
  'plugins.importexport.doaj.export.contact' => 'Contacter DOAJ pour inclusion',
  'plugins.importexport.doaj.registrationIntro' => 'Si vous souhaitez enregistrer des articles depuis OJS, veuillez entrer votre clé API DOAJ. À défaut, vous pourrez toujours exporter au format XML DOAJ, mais vous ne pourrez pas enregistrer vos articles avec DOAJ depuis OJS.',
  'plugins.importexport.doaj.settings.form.apiKey' => 'Clé API DOAJ',
  'plugins.importexport.doaj.settings.form.apiKey.description' => 'Vous trouverez votre clé API sur votre page d\'utilisateur ou d\'utilisatrice de DOAJ.',
  'plugins.importexport.doaj.settings.form.automaticRegistration.description' => 'OJS déposera les articles automatiquement auprès de DOAJ. Veuillez noter que le traitement peut prendre un peu de temps suite à la publication (par exemple en fonction de votre configuration cronjob). Vous pouvez vérifier l\'ensemble des articles non enregistrés.',
  'plugins.importexport.doaj.settings.form.testMode.description' => 'Utiliser l\'API de test DOAJ (environnement de test) pour l\'enregistrement. N\'oubliez pas de désactiver cette option en mode production.',
  'plugins.importexport.doaj.senderTask.name' => 'Tâche d\'enregistrement automatique DOAJ',
  'plugins.importexport.doaj.register.error.mdsError' => 'Le dépôt a échoué ! l\'API DOAJ a retourné l\'erreur suivante : \'{$param}\'.',
  'plugins.importexport.doaj.cliUsage' => 'Utilisation :
{$scriptName} {$pluginName} export [xmlFileName] [journal_path] articles objectId1 [objectId2] ...
',
);