<?php
/**
 * Plugin Name: Pressure
 * Version: 0.1.0
 * Description: 諸々のチェックを行います
 */

require_once plugin_dir_path( __FILE__ ) . 'classes/config.php';
require_once plugin_dir_path( __FILE__ ) . 'classes/functions.php';
require_once plugin_dir_path( __FILE__ ) . 'classes/validate-functions.php';
require_once plugin_dir_path( __FILE__ ) . 'classes/page.php';

if ( ! class_exists( 'Pressure' ) ) {
	class Pressure {
		function __construct() {
			// 管理画面にメニューを追加
			if ( is_admin() ) {
				add_action( 'admin_menu', 'Pressure_Functions::add_plugin_admin_menu' );
			}

			// プラグインが有効化されたときに実行する関数を登録
			if ( function_exists( 'register_activation_hook' ) ) {
				register_activation_hook( __FILE__, array( &$this, 'activation_hook' ) );
			}

			// プラグインが停止されたときに実行する関数を登録
			if ( function_exists( 'register_deactivation_hook' ) ) {
				register_deactivation_hook( __FILE__, array( &$this, 'deactivation_hook' ) );
			}

			// プラグインが削除されたときに実行する関数を登録
			if ( function_exists( 'register_uninstall_hook' ) ) {
				register_uninstall_hook( __FILE__, array( &$this, 'uninstall_hook' ) );
			}
		}

		// プラグインが有効化されたときに実行
		public function activation_hook() {
		}

		// プラグインが停止されたときに実行
		public function deactive_hook() {
		}

		// プラグインが削除されたときに実行
		public function uninstall_hook() {
		}

		// プラグイン情報ヘッダーに記載してあるバージョン情報を取得
		public static function plugin_version() {
			$plugin_data = get_file_data( __FILE__, array( 'version' => 'Version' ) );
			return $plugin_data['version'];
		}
	}
}

new Pressure();
