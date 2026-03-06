<?php
/**
 * ============================================
 * ANNUAIRE-CHAUFFAGE.FR - CONFIGURATION
 * ============================================
 */

define('SITE_NAME', 'trouver-devis-chauffage.fr');
define('SITE_DOMAIN', 'trouver-devis-chauffage.fr');
define('SITE_URL', 'https://trouver-devis-chauffage.fr');
define('SITE_EMAIL', 'contact@trouver-devis-chauffage.fr');
define('SITE_TAGLINE', "Chauffage & Climatisation Partout en France");
define('SITE_DESCRIPTION', "Trouvez un chauffagiste près de chez vous pour l\'installation, l\'entretien ou le dépannage de votre pompe à chaleur ou chaudière.");

define('SITE_LOGO_TEXT', 'TROUVER-DEVIS-CHAUFFAGE');
define('SITE_LOGO_TLD', '.FR');

define('METIER', "chauffagiste");
define('METIER_PLURAL', "chauffagistes");
define('METIER_TITLE', "Chauffagiste");
define('METIER_ICON', "thermometer");

define('VUD_PARTENAIRE_ID', '2372');
define('VUD_CATEGORIE_ID', '156');
define('VUD_IFRAME_URL', 'https://www.viteundevis.com/widget/devis.php');

define('SCRAPE_QUERY', "chauffagiste pompe a chaleur chaudiere");
define('SCRAPE_API_KEY', '[CLE_API_SEMSCRAPER]');

define('ITEMS_PER_PAGE', 24);
define('NEARBY_CITIES_COUNT', 100);
define('NEARBY_DEPARTMENTS_COUNT', 6);
define('ARTISANS_PER_PAGE', 15);

define('DATA_PATH', __DIR__ . '/data/');
define('REGIONS_FILE', DATA_PATH . 'regions/regions.json');

define('MODELES', [
    ['slug' => 'pompe-a-chaleur', 'nom' => 'Pompe à Chaleur', 'emoji' => "🔄", 'vud_cat' => '121'],
    ['slug' => 'chaudiere-gaz', 'nom' => 'Chaudière Gaz', 'emoji' => "🔥", 'vud_cat' => '121'],
    ['slug' => 'climatisation', 'nom' => 'Climatisation', 'emoji' => "❄️", 'vud_cat' => '121'],
]);

define('STYLES', [
    ['slug' => 'pompe-a-chaleur', 'nom' => 'Pompe à Chaleur', 'emoji' => "🔄", 'desc' => 'Détails et installation'],
    ['slug' => 'chaudiere-gaz', 'nom' => 'Chaudière Gaz', 'emoji' => "🔥", 'desc' => 'Détails et installation'],
    ['slug' => 'climatisation', 'nom' => 'Climatisation', 'emoji' => "❄️", 'desc' => 'Détails et installation'],
]);

define('SERVICES', [
    [
        'titre' => "Installation & Pose",
        'icon' => "✅",
        'desc' => "Installation par des experts qualifiés de votre région prenant en compte vos besoins.",
        'points' => ["Devis détaillé avant travaux", "Garantie décennale et respect des normes", "Conseils d'experts spécialisés"]
    ],
    [
        'titre' => "Entretien & Réparation",
        'icon' => "🛠️",
        'desc' => "Service rapide pour l'entretien et le dépannage de vos installations existantes.",
        'points' => ["Intervention rapide", "Diagnostic précis de l'état", "Pièces certifiées et durables"]
    ],
    [
        'titre' => "Rénovation Complète",
        'icon' => "✨",
        'desc' => "Modernisez votre installation pour une meilleure efficacité énergétique.",
        'points' => ["Étude thermique/technique personnalisée", "Adaptation aux dernières technologies", "Solutions respectueuses de l'environnement"]
    ],
]);

define('FAQ_ACCUEIL', [
    [
        'question' => "Demander un devis est-il gratuit ?",
        'reponse' => "Oui, la demande de devis via notre plateforme est totalement gratuite et sans aucun engagement de votre part. Cela vous permet d'estimer librement le coût de votre projet."
    ],
    [
        'question' => "Combien de temps faut-il pour qu'un professionnel me recontacte ?",
        'reponse' => "Généralement, nos artisans partenaires qualifiés vous recontactent sous 24 à 48 heures (jours ouvrés) pour discuter virtuellement de votre projet ou convenir d'une visite sur site."
    ],
    [
        'question' => "Les artisans proposés sont-ils labellisés/certifiés ?",
        'reponse' => "Nos spécialistes bénéficient des assurances pro nécessaires (garantie décennale) et des certifications en vigueur dans leur métier. N'hésitez pas à leur réclamer les détails lors de votre échange."
    ],
    [
        'question' => "Puis-je bénéficier d'aides financières ?",
        'reponse' => "Pour beaucoup de travaux de rénovation énergétique (isolation, chauffage, solaire, etc.), l'État propose des aides (MaPrimeRénov', éco-PTZ, CEE). Renseignez-vous auprès de votre professionnel lors du devis."
    ],
    [
        'question' => "Combien vont me coûter les travaux ?",
        'reponse' => "Le prix peut varier du simple au quintuple en fonction de la taille, la marque des matériaux et le coût de la main-d'œuvre. Il est impossible d'établir un tarif précis sans l'évaluation d'un professionnel sur place."
    ]
]);

define('TOP_VILLES', [
    ['nom' => 'Paris', 'slug' => 'paris', 'cp' => '75000', 'region' => 'ile-de-france', 'dept' => 'paris'],
    ['nom' => 'Marseille', 'slug' => 'marseille', 'cp' => '13000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'bouches-du-rhone'],
    ['nom' => 'Lyon', 'slug' => 'lyon', 'cp' => '69000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'rhone'],
    ['nom' => 'Toulouse', 'slug' => 'toulouse', 'cp' => '31100', 'region' => 'occitanie', 'dept' => 'haute-garonne'],
    ['nom' => 'Nice', 'slug' => 'nice', 'cp' => '06000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'alpes-maritimes'],
    ['nom' => 'Nantes', 'slug' => 'nantes', 'cp' => '44200', 'region' => 'pays-de-la-loire', 'dept' => 'loire-atlantique'],
    ['nom' => 'Montpellier', 'slug' => 'montpellier', 'cp' => '34080', 'region' => 'occitanie', 'dept' => 'herault'],
    ['nom' => 'Bordeaux', 'slug' => 'bordeaux', 'cp' => '33300', 'region' => 'nouvelle-aquitaine', 'dept' => 'gironde'],
    ['nom' => 'Lille', 'slug' => 'lille', 'cp' => '59260', 'region' => 'hauts-de-france', 'dept' => 'nord'],
    ['nom' => 'Strasbourg', 'slug' => 'strasbourg', 'cp' => '67000', 'region' => 'grand-est', 'dept' => 'bas-rhin'],
    ['nom' => 'Rennes', 'slug' => 'rennes', 'cp' => '35700', 'region' => 'bretagne', 'dept' => 'ille-et-vilaine'],
    ['nom' => 'Toulon', 'slug' => 'toulon', 'cp' => '83000', 'region' => 'provence-alpes-cote-d-azur', 'dept' => 'var'],
    ['nom' => 'Grenoble', 'slug' => 'grenoble', 'cp' => '38000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'isere'],
    ['nom' => 'Dijon', 'slug' => 'dijon', 'cp' => '21000', 'region' => 'bourgogne-franche-comte', 'dept' => 'cote-d-or'],
    ['nom' => 'Angers', 'slug' => 'angers', 'cp' => '49000', 'region' => 'pays-de-la-loire', 'dept' => 'maine-et-loire'],
    ['nom' => 'Nimes', 'slug' => 'nimes', 'cp' => '30000', 'region' => 'occitanie', 'dept' => 'gard'],
    ['nom' => 'Clermont-Ferrand', 'slug' => 'clermont-ferrand', 'cp' => '63000', 'region' => 'auvergne-rhone-alpes', 'dept' => 'puy-de-dome'],
    ['nom' => 'Le Havre', 'slug' => 'le-havre', 'cp' => '76600', 'region' => 'normandie', 'dept' => 'seine-maritime'],
]);

define('AVANTAGES', [
    ['titre' => 'Réseau National', 'desc' => 'Des milliers de professionnels référencés dans toute la France.', 'icon' => "🗺️"],
    ['titre' => 'Partenaires Expérimentés', 'desc' => 'Trouvez le bon interlocuteur pour la réussite de votre projet', 'icon' => "✅"],
    ['titre' => 'Mise en Relation Rapide', 'desc' => 'Obtenez gratuitement des devis adaptés à vos besoins.', 'icon' => "💰"],
]);

define('HERO_IMAGE', 'https://images.unsplash.com/photo-1499914485622-a88fac536970?w=1920&q=80&auto=format&fit=crop');
define('MODELE_IMAGE', 'https://images.unsplash.com/photo-1588636402741-35b8004fcfd3?w=1920&q=80&auto=format&fit=crop');


function getModeleBySlug($slug)
{
    foreach (MODELES as $modele) {
        if ($modele['slug'] === $slug) {
            return $modele;
        }
    }
    return null;
}

function getAllModeles()
{
    return MODELES;
}

function getVudUrl($modele = null)
{
    $catId = VUD_CATEGORIE_ID;
    if ($modele && isset($modele['vud_cat'])) {
        $catId = $modele['vud_cat'];
    }
    return 'https://www.viteundevis.com/in/?pid=' . VUD_PARTENAIRE_ID . '&c=' . $catId;
}

function getVudCatForModele($modele = null)
{
    if ($modele && isset($modele['vud_cat'])) {
        return $modele['vud_cat'];
    }
    return VUD_CATEGORIE_ID;
}
