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
define('DB_NAME', 'ecos');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'bQAlXh/7{B)mHx#H*>AA};jN+[)SCabp!W_?Dm&lQ&af=7%w0C/TQsEK1?9|:>&2');
define('SECURE_AUTH_KEY',  '!fwL?3{vg$P~D=(Ja*,hMo3E[W(=@>0UV?Bv2<!EXa;f@8JiI-TlV&T:+G=P,(S)');
define('LOGGED_IN_KEY',    '#0?b1Z0_g?2Ff!WR6kg1o,eU.m$P{mfNF6%h6dr9+pI5z0TF:*k~=Ow`1 MDaf`U');
define('NONCE_KEY',        '@DH 6}8g|t?6T[G)pfG_kGpFvl!c3[Q@3ec)X`k]~$h:;b*UJR:mYUp?d{U5%dYB');
define('AUTH_SALT',        's+$Q.xXld:|2v4zndmLi/(j+Ve6mZxR7i+u01*YzPB*[:>V^bi{Bw5i.#yB!yXL7');
define('SECURE_AUTH_SALT', '=zQ>/g7W?/E*!o^>c/&B9Ik(PY)l{(q]u}e}ddtB.uL)DxfRlJk#J):Zl}`c~fw9');
define('LOGGED_IN_SALT',   'IRDfp-fzR7s#J:GAYw&Y$g}[-@dg(=fY]YIj1*~(UVl16[apdFY1GN7P=.DYAhhC');
define('NONCE_SALT',       '9.ZM~4?XV0,7> ,_;4-rd#)&G<{:OKvkEalTr=D~7$V_^-Fcq&]#3[d@+0haGe3}');

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
