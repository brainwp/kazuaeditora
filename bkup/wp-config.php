<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'edito253_kazua');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'edito253_root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'chuvakazua');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r++h,#:FAx|T}9~E@ZkaCMP6BU$iIe0JXJh)yEwd$t oxyAC/lE+H(aKs8F4wqx]');
define('SECURE_AUTH_KEY',  'Nd+:X^w{jze@T0Mx2CX8,);>U4I|i&emuDb+u(b.gs$SSLFh6 1zm!4=)nk)8g+J');
define('LOGGED_IN_KEY',    'Ypo(}u,z>(|1B<g-=V-C6$>cz+%)D-[KXQp}wh.VN0cN|aeQX9RFy%)~B;}Ca@z[');
define('NONCE_KEY',        '2%~N.1A$rL y@-A-o-a)Si*&~KJ)[-xd@G_~CLx-=%A|/0)8Ba3i{,}hdRfH/&2f');
define('AUTH_SALT',        'e(kLE*=S+$ (duw6Z$fQv|s?6VM_ix0tJN?|]JU|sM#%$o}_-IC/`=m0q,m*Q#h.');
define('SECURE_AUTH_SALT', '@OeZ][jdHo4-|N$X}A(FMsng(Td0+!Ap~PpqOAQ~>E5rS7.p{lL|(-KOaTtr$5`n');
define('LOGGED_IN_SALT',   ',#pyu4->tut[xxFn200mSX3+qU_um_3#,g0Eu- U|3jFGZR yYrw`E`]KsOdUn/f');
define('NONCE_SALT',       '^8/orT?+kjU`-.JBx-)1~5$#p`J;71*|gv|-nDM3Ih[Xrmvo^I[I)_3n$3%E_qx0');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ods_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
