📝 Beskrivelse
Din Indre Juvel er en webapplikation udviklet med PHP, JavaScript, SCSS, og HTML. Formålet med denne applikation er at tilbyde en platform for wellness og spirituel healing, herunder blogs, produkter og ressourcer.

🚀 Funktioner
Blogsektion: Del artikler og indlæg relateret til wellness, spirituel healing, miljø, gamle spirituelle praksisser, religioner, krops- og mental sundhed, ungdomsprodukter, meditationsteknikker, yogateknikker, aromaterapi, sunde teer, ædelstenes spirituelle betydning, selvudvikling, selvplejeprodukter, gamle overbevisninger, brug af røgelse, massageteknikker osv.
Produktkatalog: Præsenter produkter relateret til ovenstående emner.
Brugerautentifikation: Mulighed for brugere at logge ind og administrere deres profiler.
Søgefunktionalitet: Søg efter specifikke blogindlæg eller produkter.
📂 Projektstruktur
classes/: Indeholder PHP-klasser til forskellige funktionaliteter.
css/: Indeholder CSS-filer til styling af applikationen.
img/: Indeholder billeder brugt i applikationen.
includes/: Indeholder genanvendelige PHP-filer som header, footer osv.
js/: Indeholder JavaScript-filer for interaktivitet.
settings/: Indeholder konfigurationsfiler.
uploads/: Mappe til uploadede filer.
index.php: Hovedindgangspunktet for applikationen.
blog.php: Side til visning af individuelle blogindlæg.
blogoversigt.php: Side til visning af en oversigt over blogindlæg.
login.php: Brugerlogin-side.
logout.php: Brugerlogout-funktion.
Mission.php: Side, der beskriver projektets mission.
api.php: API-endpoint til forskellige funktioner.
📦 Teknologier anvendt
PHP: Server-side scripting for dynamisk indholdshåndtering.
JavaScript: Til interaktive funktioner og forbedret brugeroplevelse.
SCSS: Forprocessor for CSS for mere effektiv og modulær styling.
HTML: Markup-sprog til strukturering af webindhold.
🔧 Installation
Følg disse trin for at køre projektet lokalt:
1.Klon repoet
git clone https://github.com/loay0013/dinindrejuvel.git
cd dinindrejuvel
2.Opsætning af server
Brug en lokal server som XAMPP eller MAMP.
Placer projektfilerne i serverens htdocs-mappe.
3.Konfigurer database
Opret en MySQL-database og importer eventuelle nødvendige tabeller.
Opdater databaseforbindelsesoplysningerne i includes/db_connect.php eller tilsvarende fil.
4.Start serveren
Åbn din browser og naviger til http://localhost/dinindrejuvel for at se applikationen.
