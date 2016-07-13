**DV-IMPACT README**


DV-IMPACT is an online resource for the disease variants impact assessment on domain-peptide PPI networks. DV-IMPACT stores the PPI interaction networks mediated by wildtype and disease variants and visualizes the overlay of the two networks to understand the effects of mutations on the network and consequently their cellular and biological impact. Currently, the impact of ~250,000 disease (cancer) missense mutations stored in DV-IMPACT. Furthermore, DV-IMPACT provides the full sequences of the wildtype and disease variant proteins with a comprehensive search and download interface to easily build customized protein databases for genomic and proteomic analysis.
![DV-IMPACT Screenshot](blob:https%3A//drive.google.com/8f45ecb8-67ca-4491-91de-0244750a76e4)


**Code Overview:**

A quick introduction to the important source code files of DV-IMPACT:

index.php - HTML/PHP for the front landing page.

generate_stats.php - HTML/PHP for generating database statistics.

logout.php - Logs the administrator user out of the portal.

PDOext.class.php - An extension of PHP's PDO class, gives a few basic extra functions.

jquery.tooltip.css/js - CSS and JS files for the tooltip extension.

search.php - runs and handles searches for network data.

site.js - some javascript which is primarily used on the front page.

styles.css - the custom styles for DV-IMPACT.

common.php - Settings and configuration common to all PHP files.

./tables/ - PHP files for the generation of the browsing tables on the main page.

./admin/ - PHP files for the administration panel.

./variants/index.php - PHP/HTML for the variant search page.

./variants/details.php - PHP/HTML for the variant details page.

/variants/variant_load.php - AJAX PHP for loading variant search results.

./network/index.php - PHP/HTML for display of the network page. Called by search.php.

./network/download.php - Handles network downloads.
