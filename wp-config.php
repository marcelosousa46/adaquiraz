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
define('DB_NAME', 'adaquiraz');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fa8J#pQ7>d7!(aj+@E0Yvnp~|1mxJUx0@e@tJm-4V(#O*K]w:us tyihC`T,ov<V');
define('SECURE_AUTH_KEY',  'KWDt!_LpR~<v~z~}H<NOR-hS%N{1=4Q|KlABR36v.O{@U|fpxV M%>k~r.h`E(SQ');
define('LOGGED_IN_KEY',    'AoDR+{n]6]2-}c_>^|JNP0z??b?UW+It(&PBG4vGJur}c?@?TM!4nA$x{rq97l/0');
define('NONCE_KEY',        's{T3f!HU|t M%5GJo~$x~8vNEviugYS_1#y&4f;d}6k-qo*4sR+JSq,%+HPkG+l8');
define('AUTH_SALT',        'RSZw5G`7KI_I6&T?VGv2b=&>GgjT_l>Cn%_J&bm_Xwj2ZS/I]6k2Y/1zo$5fqv%r');
define('SECURE_AUTH_SALT', '$}$yl$^2p|5+zS|Kpy-s)3PT;qs1%5{ovbF)yLn;[JqdCk?5=r5(slQXwtF_4cbz');
define('LOGGED_IN_SALT',   'owZsGRB@KGES*B}FMe2<g8fi]0yoW=He5S,E&P[b?=$p]|c3NVbNmF[xEv`H(X_%');
define('NONCE_SALT',       'j`c.ScK4<lYJ|)6UGAsCnDjjR{TlWl;%o6#4} mOE?H5^DD2q$ibWiE@CZQ/sE#?');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
