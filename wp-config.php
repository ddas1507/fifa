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
define('DB_NAME', 'dionesjo_fifa2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'dionesjo');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Diones1507');

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
define('AUTH_KEY',         '&p:h.Ob-B}{3y|6o$l(TVh{dK(ItJzy![]QYi$qI3#o9iHmLi;swm%@^8|?9+oe2');
define('SECURE_AUTH_KEY',  'G7aHcxG1+OuiKEB~P9>6jKh^Ssx*7wN@|d4}mlRHrXHg.O`hZnSw|F]/:2V&tP=z');
define('LOGGED_IN_KEY',    '`|R^YNUk-sWHK8lcr2?d(|0ALwhh|J7yf/5y1M5uKJ; ;{JFS;r*K!Ui.@LKxQ~I');
define('NONCE_KEY',        'SBeXh-h.1?,`;hYGN-fSj2=Cd76o[-Jw?+kt1R2(8uSV97.>B+/5VN8s$yJx?{EE');
define('AUTH_SALT',        'N8F~xUZw^_2WnbD$}tl{+4UM%v~%5Z+&# u[+gXz/]PDSkWQWS**Y~4{?NJW~>c4');
define('SECURE_AUTH_SALT', 'J 1~e2+$m+4F_L/WG1k2!u_ps<XtQ_@pcg:zk?!$wA({I{Q9<<KIl!Yp.cjt^j|u');
define('LOGGED_IN_SALT',   'PrJ{}k2^*wMwq+J0F-,xS])PM-AK#}*c-F&LG}:,I2[%0+o2W+gS;V{(8~WK*RE@');
define('NONCE_SALT',       '1pp|QEmQl?Qhe{KXUe?YH5GMT[Bqb9J|$,+bF;Fpo?{Fnd4^(j.;U<mhaF:6Wt;G');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
