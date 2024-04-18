<?php return array (
  'admin.hostedContexts' => 'Revues hébergées',
  'admin.settings.redirect' => 'Réacheminement vers la revue',
  'admin.settings.redirectInstructions' => 'Les demandes faites au site principal seront réacheminées vers cette revue. Cela pourrait être utile si le site héberge, par exemple, une seule revue.',
  'admin.settings.defaultMetricDescription' => '
		Votre installation OJS est paramétrée pour enregistrer plus d\'une mesure d\'utilisation. Les statistiques d\'utilisation seront affichées dans plusieurs contextes.
		Il y a des cas où seule une statistique d\'utilisation doit être utilisée, par exemple pour afficher une liste ordonnée des articles les plus consultés ou pour classer
 		les résultats de recherche. Veuillez sélectionner l\'une des mesures configurées par défaut.
	',
  'admin.languages.confirmDisable' => 'Êtes-vous certain de vouloir désactiver cette langue ? Cela pourrait affecter toute revue utilisant actuellement cette instance.',
  'admin.languages.primaryLocaleInstructions' => 'Cette langue sera la langue par défaut du site et de toute revue hébergée.',
  'admin.languages.supportedLocalesInstructions' => 'Sélectionner toutes les langues qui doivent être prises en charge sur le site. Les langues sélectionnées seront disponibles pour toutes les revues hébergées sur le site, et vont également apparaître dans un menu de sélection de langue présent sur chaque page (qui peut être désactivé pour les pages spécifiques à une revue). S\'il n\'y a qu\'une seule langue qui est sélectionnée, le menu de sélection de langue n\'apparaîtra pas et les paramètres d\'extension de langues ne seront pas disponibles aux revues.',
  'admin.locale.maybeIncomplete' => 'Les langues sélectionnées peuvent être incomplètes.',
  'admin.languages.confirmUninstall' => 'Êtes-vous sûr de vouloir désinstaller cette langue ? Ceci affectera toute revue hébergée utilisant  actuellement cette langue.',
  'admin.languages.installNewLocalesInstructions' => 'Sélectionner toute langue supplémentaire pour la prise en charge sur ce système. Les langues doivent être installées avant qu\'elles ne puissent être utilisées pas les revues hébergées. Lire la documentation d\'OJS pour plus d\'information sur la prise en charge de nouvelles langues.',
  'admin.auth.ojs' => 'Base de données utilisateur d\'OJS',
  'admin.auth.enableSyncProfiles' => 'Activer la synchronisation du profil de l\'utilisateur (si prise en charge par ce plugiciel d\'authentification). Les informations du profil de l\'utilisateur seront automatiquement mises à jour depuis la source distante quand un utilisateur se connecte, et les modifications du profil (y compris le mot de passe) effectuées dans OJS vont automatiquement être mises à jour sur la source distante. Si cette option n\'est pas activée, les informations du profil OJS vont rester séparées de celles du profil sur la source distante.',
  'admin.auth.enableSyncPasswords' => 'Permettre la modification du mot de passe de l\'utilisateur (si prise en charge par ce plugiciel d\'authentification). Activer cette option permettra aux utilisateurs de modifier leurs mot de passe OJS et d\'utiliser la fonction "mot de passe oublié" pour réinitialiser un mot de passe oublié. Ces fonctions ne seront pas disponibles pour les utilisateurs utilisant une source d\'authentification où cette option n\'est pas activée.',
  'admin.auth.enableCreateUsers' => 'Permettre la création d\'utilisateurs (si supporté par ce plugiciel d\'authentification). Les utilisateurs créés avec OJS à l\'aide de cette source d\'authentification vont automatiquement être ajoutés à la source d\'authentification distante s\'ils n\'existent pas déjà. De plus, si cette source est la source d\'authentification par défaut, les comptes OJS créés par l\'intermédiaire d\'une inscription d\'utilisateur seront également ajoutés à la source distante d\'authentification.',
  'admin.systemVersion' => 'Version OJS',
  'admin.systemConfiguration' => 'Configuration OJS',
  'admin.systemConfigurationDescription' => 'Paramètres de configuration OJS de <tt>config.inc.php</tt>.',
  'admin.journals.createInstructions' => 'Vous serez inscrit automatiquement en tant que responsable de cette revue. Après avoir créé une nouvelle revue, entrez-y à titre de responsable pour poursuivre sa configuration et pour l\'inscription à des rôles des utilisateurs.',
  'admin.journals.journalSettings' => 'Paramètres de la revue',
  'admin.journals.noneCreated' => 'Aucune revue n\'a été créée.',
  'admin.contexts.create' => 'Créer une revue',
  'admin.journals.urlWillBe' => 'Cela devrait être un mot court ou un acronyme qui identifie la revue. L\'URL de la revue sera {$sampleUrl}.',
  'admin.contexts.form.titleRequired' => 'Un titre est requis.',
  'admin.contexts.form.pathRequired' => 'Le chemin est obligatoire.',
  'admin.contexts.form.pathAlphaNumeric' => 'Le chemin ne peut contenir que des caractères alphanumériques, des caractères de soulignement, et des tirets, et doit commencer et finir par un caractère alphanumérique.',
  'admin.contexts.form.pathExists' => 'Le chemin sélectionné est déjà utilisé par une autre revue.',
  'admin.contexts.form.primaryLocaleNotSupported' => 'La localisation principale doit faire partie des localisations autorisées pour la revue.',
  'admin.journals.enableJournalInstructions' => 'Permettre à cette revue d\'apparaître publiquement sur le site',
  'admin.contexts.contextDescription' => 'Description de la revue',
  'admin.journal.pathImportInstructions' => 'Chemin d\'accès à la revue existant ou à créer (par ex., "ojs").',
  'admin.journals.importSubscriptions' => 'Importer les abonnements',
  'admin.journals.transcode' => 'Conversion des métadonnées de l\'article à partir de la norme ISO 8859-1',
  'admin.journals.redirect' => 'Générer le code pour faire la correspondance entre les URLS d\'OJS 1 et d\'OJS 2',
  'admin.journals.form.importPathRequired' => 'Le chemin d\'importation est obligatoire.',
  'admin.journals.importErrors' => 'L\'importation a échoué',
  'admin.mergeUsers' => 'Fusionner les utilisateurs',
  'admin.mergeUsers.mergeUser' => 'Fusionner l\'utilisateur',
  'admin.mergeUsers.into.description' => 'Sélectionner un utilisateur à qui attribuer la paternité des textes, les assignations de révisions etc. de l\'utilisateur précédent.',
  'admin.mergeUsers.from.description' => 'Sélectionner un utilisateur à fusionner au compte d\'un autre utilisateur (par ex. : lorsque quelqu\'un possède deux comptes utilisateur). Le compte sélectionné en premier sera supprimé et ses soumissions, assignations, etc. seront affectées au second compte.',
  'admin.mergeUsers.allUsers' => 'Tous les utilisateurs inscrits à des rôles',
  'admin.mergeUsers.confirm' => 'Êtes-vous certain de vouloir fusionner le compte portant le nom d\'utilisateur « {$oldAccountCount} » avec le compte portant le nom d\'utilisateur « {$newUsername} » ? Le compte portant le nom d\'utilisateur « {$oldAccountCount} » sera supprimé. Cette action est irréversible.',
  'admin.mergeUsers.noneEnrolled' => 'Aucun utilisateur inscrit.',
  'admin.scheduledTask.subscriptionExpiryReminder' => 'Rappel d\'expiration d\'abonnement',
  'admin.scheduledTask.openAccessNotification' => 'Avis de libre accès',
  'admin.scheduledTask.reviewReminder' => 'Rappel d\'évaluation',
  'admin.settings.enableBulkEmails.description' => 'Sélectionnez les revues hébergées qui doivent être autorisées à envoyer des courriers automatiques. Quand cette fonctionnalité est activée, un directeur de revue peut envoyer un courrier à tous les utilisateurs inscrits à cette revue. <br><br>Un mauvais usage de cette fonctionnalité pour envoyer des courriers non sollicités peut violer les lois anti-spam de certaines juridictions et peut entraîner le blocage comme spams des courriers de votre serveur. Cherchez des conseils techniques avant d\'activer cette fonctionnalité et consultez les responsables de la revue pour vous assurer de sa bonne utilisation.<br><br>D\'autres limitations de cette fonctionnalité peuvent être activées pour chaque revue en visitant ses paramètres dans la liste des<a href="{$hostedContextsUrl}">Revues hébergées</a>.',
  'admin.settings.disableBulkEmailRoles.description' => 'Un directeur de revue ne pourra pas envoyer de mails automatiques à tous les rôles sélectionnés ci-dessous. Utilisez ce paramètre pour limiter les abus de la fonction de notification de courrier. Par exemple, il peut être plus sûr de désactiver les courriers automatiques pour les lecteurs, les auteurs ou les autres grands groupes d\'utilisateurs qui n\'ont pas donné leur consentement à la réception de courriers automatiques.<br><br>La fonction de courrier automatique peut être entièrement désactivée pour cette revue dans <a href="{$siteSettingsUrl}">Administration > Paramètres du site</a>.',
  'admin.settings.disableBulkEmailRoles.contextDisabled' => 'La fonction de courrier automatique a été désactivée pour cette revue. Activez la fonction dans <a href="{$siteSettingsUrl}">Administration > Paramètres du site</a>.',
  'admin.contexts.confirmDelete' => '
certain de vouloir supprimer définitivement cette revue et tout "
contenu?"',
  'admin.settings.options' => 'Options',
  'admin.settings.usePaging' => '
les sites qui rassemblent un grand nombre de revues, fragmentez la "
de titres en plusieurs pages."',
  'admin.settings.journalsList' => 'Éléments de la revue',
  'admin.settings.journalsList.description' => '
choisir pour chaque revue les éléments que vous souhaitez "
sur la page du site."',
  'admin.settings.journalsList.showThumbnail' => 'Vignette de la revue',
  'admin.settings.journalsList.showTitle' => 'Titre de la revue',
  'admin.settings.journalsList.showDescription' => 'Description de la revue',
  'admin.categories' => 'Catégories',
  'admin.categories.enable.description' => '
le veut, l\'administrateur de site peut ici définir un ensemble de "
visant à optimiser la gestion d\'un grand nombre de titres. Les "
de revue pourront alors rattacher leur publication à plusieurs "
ces catégories, et les lecteurs pourront consulter les revues "
par type de catégorie."',
  'admin.categories.disableCategories' => 'Ne pas classer les revues par catégorie.',
  'admin.categories.enableCategories' => 'Permettre aux directeurs de classer les revues par catégorie.',
  'admin.categories.editTitle' => 'Modifier une catégorie',
  'admin.categories.createTitle' => 'Créer une catégorie',
  'admin.categories.create' => 'Créer une nouvelle catégorie',
  'admin.categories.noneCreated' => 'Pas de catégories créées.',
  'admin.categories.confirmDelete' => 'Voulez-vous vraiment supprimer cette catégorie?',
  'admin.categories.name' => 'Nom',
  'admin.categories.nameRequired' => 'Un nom de catégorie est requis.',
);